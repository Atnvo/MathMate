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
			<a href="Landing.php">
				<img id="header-img_logo" src="img/Logo-noback.png">
			</a>
			<div id="topbar">
				<input type="checkbox" id="check" />
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
		</section>
	</div>

	<section id="content-container">
		<div id=content-container_2>

			<div id="container-overons">
			<!-- Inhoud hier -->
			<article id="over-ons_c">
				<h1>Over ons</h1>
				<br>
				<p>Wij zijn een groep studenten op mboRijnland van Applicatie
					en- mediaontwikkeling<p>
				<br>
				<p>Project opdracht<br>
Ons team heeft de opdracht gekregen van een docent logica, die les geeft op het mbo in leiden. Deze docent vroeg ons of we een website kunnen maken waar de volgende onderdelen in zitten; Een homepage waar je kan navigeren, en een welkomstbericht met nuttige informatie over de website. Verder moet er een Presentatiepagina komen, dit moet met JS geprogrammeerd zijn, in de presentatie moet kun je zien wat je allemaal met de website kunt doen.
Verder moet er een rekenpagina en een pittige rekenpagina op hierop kan je de tafel van?, de machtreeks van ?, de breuken reeks van ? en de kwadraat reeks van ? vinden. op de pittige rekenpagina kan je de rij van Fibonacci zien en alle priemgetallen tot?.
Op de andere pagina moet een shoot the pig spel komen.

				</p>
			</article>


			<div class="animated fadeIn" id="container-persoon">
			<!-- Persoon -->
			<section>
				<div>
					<a class="persoon-website" href="https://www.linkedin.com/in/atnvo/" target="_blank"><img src="img/browser.png"></a>
					<img class="photo-persoon" src="img/persoon/Alavi.jpg">
					<article class="persoon-beschrijving">
						<!-- Naam persoon -->
						<h2>Alavi</h2>
						<!-- Beschrijving / tittle -->
						<p>Web Developer</p>
					</article>
				</div>
			</section>



			<!-- Persoon -->
			<section>
				<div>
					<a class="persoon-website" href="" target="_blank"><img src="img/browser.png"></a>
					<!-- Foto persoon -->
					<img class="photo-persoon" src="img/persoon/blank.png">
					<article class="persoon-beschrijving">
						<!-- Naam persoon -->
						<h2>Demi</h2>
						<!-- Beschrijving / tittle -->
						<p>Developer</p>
					</article>
				</div>
			</section>
   
			<!-- Persoon -->
			<section>
				<div>
					<a class="persoon-website" href="" target="_blank"><img src="img/browser.png"></a>
					<!-- Foto persoon --> 
					<img class="photo-persoon" src="img/persoon/blank.png">
					<article class="persoon-beschrijving">
						<!-- Naam persoon -->
						<h2>Text</h2>
						<!-- Beschrijving / tittle -->
						<p>Text</p>
					</article>
				</div>
			</section>

</div>
</div>

		</div>
	</section>

	<div id="footer-container">
		<div>
			<a href="over-ons.php">Over ons</a>
			<a href='uitloggen.php'>Uitloggen</a>
		</div>
		<p id="auther">Gemaakt door: Alavi</p>
	</div>

	</section>

</body>

</html>