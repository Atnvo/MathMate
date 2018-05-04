<?php

	session_start();
	//Checken of de waarde van ingelogd gelijk is aan de ja (dus de gene is ingelogd)
	if($_SESSION['ingelogd'] == "Ja"){
		
		echo "Welkom ".$_SESSION['username'];
		echo "<a href='uitloggen.php'><button>Uitloggen</button></a>";
		
	}else{
		//Je bent niet ingelogd en dus terug naar de inlog form
		header("Location: logindb.php");
	}
?>
<div>
<?php
	echo "Dit is de MD5 van admin ".md5($_SESSION['username'])."<br>";

 	$options = [
		'cost' => 10 //2 tot de macht 10 keer -1024	
	];

	echo "Dit is de password_hash van admin met bcrypt optie <br>".password_hash($_SESSION['username'], PASSWORD_BCRYPT, $options);
?>
</div>