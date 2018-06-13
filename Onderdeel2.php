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
	<link rel="stylesheet" href="lib/animate.css">
	<link rel="stylesheet" href="lib/impress.css">
	<link rel="stylesheet" href="css/nav.css">
</head>

<body>

	<div class="animated fadeInLeft" id="header-container_c" style="height: 4.5em;">
		<section id="header-container">
			<a href="Landing.php">
				<img id="header-img_logo" src="img/Logo-noback.png">
			</a>
		</section>
	</div>

	<div id="impress">
		<div id="title" class="step" data-x="0" data-y="0" data-scale="4">
			<span class="try">Project Periode 4</span>
			<h1>MathMate
				<sup>π</sup>
				<span class="footnote">
				<sup>-</sup> Gebruik < en > om te navigeren</span>
			</h1>
			<span class="footnote">
				<a href="landing.php">-Terug naar home</a>
			</span>
		</div>

		<div id="ing" class="step" data-x="850" data-y="3000" data-rotate="90" data-scale="5" data-rotate-x="-30" data-rotate-y="20">
			<p><strong>MathMate</strong>
				Is een Website waar je omrekensommen voor getallen kunt doen
				zoals<br>
				<b class="positioning">Factorizer</b>,
				<b class="positioning">Tafel berekenen</b>,
				<b class="positioning">text3</b>,
				<b class="positioning">text4</b> en
				<b class="positioning">text5</b>
		</div>

		<div id="big" class="step" data-x="3500" data-y="2100" data-rotate="180" data-scale="6">
			<p>visualize your
				<b>big</b>
				<span class="thoughts">thoughts</span>
			</p>
		</div>

		<div id="tiny" class="step" data-x="2825" data-y="2325" data-z="-3000" data-rotate="300" data-scale="1">
			<p>and
				<b>tiny</b> ideas</p>
		</div>

		<div id="its" class="step" data-x="3400" data-y="-850" data-rotate="270" data-scale="6" data-rotate-x="-20" data-rotate-y="40">
			<p>
			Een logica docent van mboRijnland heeft ons ingeschakeld om een rekensom
			 website maken die enkele rekensommen kan berekenen, daarnaast moest er 
			 ook een inlogsysteem aanwezig zijn om gebruikers kunnen inloggen en ook
			  een gastaccount aanmaken.
			</p>
		</div>

		<div id="imagination" class="step" data-x="6700" data-y="-300" data-scale="6">
			<p>the only
				<b>limit</b> is your
				<b class="imagination">imagination</b>
			</p>
		</div>

		<div id="source" class="step" data-x="6300" data-y="2000" data-rotate="20" data-scale="4">
			<p>Meer weten?</p>
			<q>
				<a href="Landing.php">Probeer nu</a><?php
				//Naam van gebruiker ophalen
				echo "<h1>".$_SESSION['username']."</h1>";
			?></q>
		</div>

		<div id="one-more-thing" class="step" data-x="6000" data-y="4000" data-scale="2">
			<p>one more thing...</p>
		</div>


		<div id="its-in-3d" class="step" data-x="6200" data-y="4300" data-z="-100" data-rotate-x="-40" data-rotate-y="10" data-scale="2">
			<p>
				<span class="have">have</span>
				<span class="you">you</span>
				<span class="noticed">noticed</span>
				<span class="its">it’s</span>
				<span class="in">in</span>
				<b>3D
					<sup>*</sup>
				</b>?</p>
			<span class="footnote">* beat that, prezi ;)</span>
			<span class="footnote">
				<a href="landing.php">-Terug naar home</a>
			</span>
		</div>

		<div id="overview" class="step" data-x="3000" data-y="1500" data-scale="10">
		</div>

	</div>

	</section>
	<script type="text/javascript" src="js/impress.js"></script>
	<script>impress().init();</script>
</body>

</html>