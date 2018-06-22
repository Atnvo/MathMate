<?php

//Dit is de versie met database connectie

//Check of er een POST is gedaan naar deze pagina
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	function test_input($data) {
        $data = trim($data);             // Verwijderd de lege plekken in de code
        $data = stripslashes($data);     // Verwijderd de "/" in de gegevens
        $data = htmlspecialchars($data); // Verwijderd alle html characters in de gegevens
        return $data;
    }

	$ingevoerduser = test_input($_POST['username']);
	$ingevoerduser = test_input($_POST['password']);

	//Dit heeft de user ingevoerd
	$ingevoerdeww = $_POST['password'];
	$ingevoerduser = $_POST['username'];
	$hasedpass = md5($ingevoerdeww);

	require("dbconnect.php");

	$sql = "
	SELECT * FROM gebruikers
	WHERE username = '$ingevoerduser'
	AND password = '$hasedpass'";
	
	$result = mysqli_query($conn, $sql);
	if (!$result) {
		die("Query niet gelukt");
	}
	$aantal = mysqli_num_rows($result);
	
	if($aantal == 1){
		session_start();
		$user = mysqli_fetch_row($result);
		$_SESSION['ingelogd'] = "Ja";
		$_SESSION['username'] = $user[1];
		header("Location: ../landing.php");
	
	}else{
		header("Location: logindb.php");
	}
	
}else{
	header("Location: logindb.php");
}
?>