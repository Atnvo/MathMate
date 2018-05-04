<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Login form Undefined">
	<meta name="author" content="Alavi van Oosterhout">
	<title>Login formulier</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="lib/animate.css">
</head>

<body>

	<section id="particles-js"></section>

	<a id="l_link-home" href="index.html">Ga terug</a>

	<div class="animated fadeIn" id="container-login">
		<h1 id="login_tittle">Login formulier <br> Undefined</h1>
		<form method="post" action="inloggendb.php">
			username: <input type="text" name="username" /><br>
			password: <input type="password" name="password" /><br>
			<input type="submit" class="button" name="submit" value="login">
		</form>
		<a id="i_link-back" href="index.html">Ga terug</a>
	</div>

	<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
	<script src="lib/particles.js"></script>
</body>

</html>
