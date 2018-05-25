<?php
	//Sessie ophalen en kapot maken
	session_start();
	session_destroy();

	header("Location: Login/logindb.php");
?>
