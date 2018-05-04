<?php 
session_start();
if($_SESSION['ingelogd'] == "Ja"){
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
	<meta name="author" content="Alavi van Oosterhout">
	<meta name="description" content="Landing page MathMate">
	<title>π MathMate</title>
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<section id="h_container">

	<section id="header">
		<div id="h_nav-c">
			<img id="h_logo" src="img/logoA1.png">
			<article id="h_nav-1">
				<a href="Rekenlijst.php">Rekensommen</a>
				<a href="">Mogelijkheden</a>
				<a href="">Over Ons</a>
				<img id="h_search-icon" src="">
			</article>
		</div>
	</section>



	<h1> Landing.php </h1>

	<a href='uitloggen.php'><button>Uitloggen</button></a>
	</section>
</body>

</html>
