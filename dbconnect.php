<html lang="nl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php
	//stap 1 maad db verbinding	
		$host = "localhost";
		$user = "root";
		$pass = "";
		$dbname = "MathMate";
		$conn = mysqli_connect($host, $user, $pass, $dbname);
		if(!$conn){
			echo "Database connectie niet gelukt";
		}
	?>
</body>
</html>
