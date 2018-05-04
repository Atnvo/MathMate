<?php 
if($_SESSION['ingelogd'] == "Ja"){

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
	<meta name="author" content="Alavi van Oosterhout">
	<meta name="description" content="Landing page MathMate">
	<title>π MathMate</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>


	<h1> Landing.php </h1>


	<a href='uitloggen.php'><button>Uitloggen</button></a>
</body>

</html>
