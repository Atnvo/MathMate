<?php

	session_start();
	//Checken of de waarde van ingelogd gelijk is aan de ja (dus de gene is ingelogd)
	if($_SESSION['ingelogd'] == "Ja"){

		echo "Welkom ".$_SESSION['username'];
		echo "<a href='uitloggen.php'><button>Uitloggen</button></a>";

	}else{
		//Je bent niet ingelogd en dus terug naar de inlog form
		header("Location: logindb.php");
	}
?>

<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<meta name="author" content="Alavi van Oosterhout">
	<link rel="stylesheet" href="">
</head>

<body>


	<form>

	</form>

	<div>
		<?php
			echo "Dit is de MD5 van admin ".md5($_SESSION['username'])."<br><br>";

 			$options = [
			'cost' => 10 //2 tot de macht 10 keer -1024
			];

			echo "Dit is de password_hash van admin met bcrypt optie <br>".password_hash($_SESSION['username'], PASSWORD_BCRYPT, $options);
		?>
	</div>


	<script src=""></script>
</body>

</html>
