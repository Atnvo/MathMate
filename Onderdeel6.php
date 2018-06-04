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
	<script src="https://code.jquery.com/jquery-3.3.1.slimmin.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="js/rad.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" />
	<link href="css/rad.css" rel="stylesheet" />
	<script src="js/index.js"></script>
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
			<!-- Inhoud hier -->
			<h1>Onderdeel 6</h1>
			<div class="container" style="margin-top:100px;">
        <table class="table text-center">
            <tr>
                <td colspan="2">
                    <input id="btnSpinIt" type="submit" value="Spin It" class="input-sm form-control btn-success" onclick="SpinIt()">
                </td>
            </tr>
            <tr>
                <td>
                    <div class="pointer"></div>
                    <div id="rad" class="text-center"></div>
                </td>
                <td>
                    <div class="pointer"></div>
                    <div id="rad" class="text-center"></div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input id="btnClearIt" type="submit" value="Clear It" class="input-sm form-control btn-danger" onclick="ClearIt()">
                </td>
            </tr>
            <tr>
                <td>
                    <input id="ipNumberRad1" type="text" class="input-sm form-control">
                </td>
                <td>
                    <input id="ipNumberRad2" type="text" class="input-sm form-control">
                </td>
            </tr>
        </table>
    </div>
		</div>


	</section>

	<div id="footer-container">
		<a href="over-ons.php">Over ons</a>
		<a href='uitloggen.php'>Uitloggen</a>
	</div>

</body>

</html>

