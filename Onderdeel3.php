<?php 
session_start();
if($_SESSION['ingelogd'] == "Ja"){
	}else{
		//Je bent niet ingelogd en dus terug naar de inlog form
		header("Location: Login/logindb.php");
	}
?>

<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Alavi van Oosterhout">
	<meta name="description" content="Landing page MathMate">
	<title>π|Onderdeel 2</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="lib/animate.css">
</head>

<body>

	<div class="animated fadeInLeft" id="header-container_c">
		<section id="header-container">
			<a href="Landing.php"><img id="header-img_logo" src="img/Logo-noback.png"></a>
			<div id="topbar">
			<input type="checkbox" id="check"/>
			<label id="icon" for="check">
				<!--icon-->
				<div id="test">
					<div class="bar1"></div>
					<div class="bar2"></div>	
					<div class="bar3"></div>
				</div>
			</label>
			<div class="menu">
				<nav>
					<a href="Landing.php">
						<div class="link">Home</div>
					</a>
					<a href="Onderdeel2.php">
						<div class="link">Wat kan ik</div>
					</a>
					<a href="Onderdeel3.php">
						<div class="link">Onderdeel 3</div>
					</a>
					<a href="Onderdeel4.php">
						<div class="link">Onderdeel 4</div>
					</a>
					<a href="Onderdeel5.php">
						<div class="link">Onderdeel 5</div>
					</a>
					<a href="Onderdeel6.php">
						<div class="link">Onderdeel 6</div>
					</a>
					<a href="Onderdeel7.php">
						<div class="link">Onderdeel 7</div>
					</a>
					<a href="Onderdeel8.php">
						<div class="link">Onderdeel 8</div>
					</a>
				</nav>
			</div>
			</div>
		</section>
	</div>

	<section id="content-container">
		<div id=content-container_2>
			<!-- Inhoud hier -->
			<h1>Onderdeel 3</h1>
			
		</div>


	</section>

	<div id="footer-container">
		<a href="over-ons.php">Over ons</a>
		<a href='uitloggen.php'>Uitloggen</a>
	</div>

</body>

</html>

