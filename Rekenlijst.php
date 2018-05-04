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
	<title>π|Rekenlijst</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<h1>Rekenlijst</h1>
	<li><a href="Landing.php">Home</a></li>
	<ul>
		<li><a href="Onderdeel2.php">Presentatie Dia</a></li>
		<li><a href="Onderdeel3.php">Onderdeel 3</a></li>
		<li><a href="Onderdeel4.php">Onderdeel 4</a></li>
		<li><a href="Onderdeel5.php">Onderdeel 5</a></li>
		<li><a href="Onderdeel6.php">Onderdeel 6</a></li>
		<li><a href="Onderdeel7.php">Onderdeel 7</a></li>
		<li><a href="Onderdeel8.php">Onderdeel 8</a></li>
		<li><a href="Onderdeel9.php">Onderdeel 9</a></li>
	</ul>
	<script src=""></script>
</body>

</html>
