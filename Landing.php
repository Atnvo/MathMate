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
	<title>π MathMate</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="lib/animate.css">
</head>

<body>
	
	<section id="h_container">
		
		<section class="animated fadeInDown" id="header">
			<div id="h_nav-c">
				<a href="Landing.php"><img id="h_logo" src="img/logo-noback.png"></a>
				<div id="topbar">
		<input type="checkbox" id="check"/>
		<label id="icon" for="check">
			<!--icon-->
			<div id="test1">
				<div class="bar1"></div>
				<div class="bar2"></div>	
				<div class="bar3"></div>
			</div>
		</label>
		<div class="menu1">
				<nav>
					<a href="Landing.php">
						<div class="link">Home</div>
					</a>
					<a href="Onderdeel2.php">
						<div class="link">
							-Wat kan ik
						</div>
					</a>
					<a href="Onderdeel3.php">
						<div class="link">
							-Rekenpagina
						</div>
					</a>
					<a href="Onderdeel4.php">
						<div class="link">
							-Fibonacci, 
							-Priemgetallen
						</div>
					</a>
					<a href="Onderdeel5.php">
						<div class="link">
							-Omrekencalculator,
							-Factorizer
						</div>
					</a>
					<a href="Onderdeel6.php">
						<div class="link">
							-Rad van fortuin
						</div>
					</a>
					<a href="Onderdeel7.php">
						<div class="link">
							- Shoot the pig
						</div>
					</a>
					<a href="over-ons.php">
						<div class="link">Over ons</div>
					</a>
				</nav>
			</div>
	</div>
			</div>
		</section>

	<div id="img-background"></div>
		
		<section class="animated pulse" id="L_tittle-container">
			<h1>MathMate</h1>
		
			<?php
				//Gebruiker welkom heten
				echo "<h1>Welcome ".$_SESSION['username']."!</h1>";
			?>
			<div>
			<p>Wat is MathMate?
			MathMate is een website waarbij je rekensommen online kan berekenen, je kan Priemfactoren,
			Omrekencalculator van decimaal en hexidecimaal en meer.</p>
			</div>
</section>

	<footer id="footer-nav">
		<a href='uitloggen.php'><button>Uitloggen</button></a>
		<a id="link over ons" href="over-ons.php">Over ons</a>
	</footer>
	<script src="lib/particles.js"></script>
</body>

</html>
