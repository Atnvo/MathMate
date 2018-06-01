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

		/* The Modal (background) */

		.modal {
			display: none;
			/* Hidden by default */
			position: fixed;
			/* Stay in place */
			z-index: 1;
			/* Sit on top */
			padding-top: 100px;
			/* Location of the box */
			left: 0;
			top: 0;
			width: 100%;
			/* Full width */
			height: 72%;
			/* Full height */
			overflow: auto;
			/* Enable scroll if needed */
			background-color: rgb(0, 0, 0);
			/* Fallback color */
			background-color: rgba(0, 0, 0, 0.1);
			/* Black w/ opacity */
		}

		/* Modal Content */

		.modal-content {
			position: relative;
			background-color: #fefefe;
			margin: auto;
			margin-top: 3em;
			padding: 0;
			border: 1px solid #888;
			width: 80%;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-animation-name: animatetop;
			-webkit-animation-duration: 0.4s;
			animation-name: animatetop;
			animation-duration: 0.4s
		}

		/* Add Animation */

		@-webkit-keyframes animatetop {
			from {
				top: -300px;
				opacity: 0
			}
			to {
				top: 0;
				opacity: 1
			}
		}

		@keyframes animatetop {
			from {
				top: -300px;
				opacity: 0
			}
			to {
				top: 0;
				opacity: 1
			}
		}

		/* The Close Button */

		.close {
			color: white;
			float: right;
			font-size: 28px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus {
			color: #000;
			text-decoration: none;
			cursor: pointer;
		}

		.modal-body {
			padding: 2px 16px;
		}

	</style>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>

	<section id="particles-js"></section>

	<div class="animated bounceInUp" id="container-login">
		<h1 id="login_tittle">Login Forumulier
			<br>MathMate</h1>
		<form method="POST" action="inloggendb.php">
			<table>
				<tr>
					<td>Username:</td>
					<td>
						<input type="text" name="username" />
					</td>
				</tr>
				<tr>
					<td>Passsword:</td>
					<td>
						<input type="password" name="password" />
					</td>
				</tr>
			</table>
			<input type="submit" class="button" name="submit" value="login">
		</form>
		<p>Geen acccount?
			<button id="myBtn">Registreer</button>
		</p>

		<!-- The Modal -->
		<div id="myModal" class="modal">

			<!-- Modal content -->
			<div class="modal-content">
				<div class="modal-header">
					<span class="close">&times;</span>
				</div>
				<div class="modal-body">
					<form method="get" action="beveilig.php">

						<table>
							<tr>
								<td>username: </td>
								<td>
									<input type="text" name="username" />
									<br>
								</td>
							</tr>
							<tr>
								<td>password: </td>
								<td>
									<input type="password" name="password" />
									<br>
								</td>
							</tr>
						</table>
						<input type="submit" name="submit" value="Account aan maken">

					</form>
				</div>
				<div class="modal-footer">
					
				</div>
			</div>
		</div>

	</div>

	<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
	<script src="../lib/particles.js"></script>
	<script>
		// Get the modal
		var modal = document.getElementById('myModal');

		// Get the button that opens the modal
		var btn = document.getElementById("myBtn");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks the button, open the modal 
		btn.onclick = function () {
			modal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function () {
			modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function (event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>

</body>

</html>