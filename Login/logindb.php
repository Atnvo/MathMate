<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Login form Undefined">
	<meta name="author" content="Alavi van Oosterhout">
	<title>Login formulier</title>
	<link rel="stylesheet" href="../lib/animate.css">
		<style>
	#container-login {
		height: auto;
		position: absolute;
		background-color: white;
		border-radius: 1%;
		padding: 2%;
		padding-bottom: 3%;
		top: 35%;
		left: 42.5%;
		transform: translate(-42.5%, -42.5%);
		box-shadow: 0px 0px 50px -15px;
	}

	#login_tittle {
		font-family: 'Roboto', sans-serif;
	}
	</style>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
</head>

<body>

	<section id="particles-js"></section>

	<div class="animated bounceInUp" id="container-login">
		<h1 id="login_tittle">Login Forumulier<br>Undefined</h1>
		<form method="post" action="inloggendb.php">
		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username" /></td>
			</tr>
			<tr>
				<td>Passsword:</td>
				<td><input type="password" name="password" /></td>
			</tr>
		</table>
			<input type="submit" class="button" name="submit" value="login">
		</form>
		<p>Geen acccount? <a id="i_link-back" href="../registratie.html">Registeer</a></p>
	</div>

	<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
	<script src="../lib/particles.js"></script>
</body>

</html>

