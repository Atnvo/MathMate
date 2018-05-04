<?php
//Dit is de versie met database connectie

//Check of er een POST is gedaan naar deze pagina
if($_SERVER['REQUEST_METHOD'] == 'POST'){

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
		header("Location: Landing.php");

	}else{
		header("Location: logindb.php");
	}

}else{
	header("Location: logindb.php");
}
?>
