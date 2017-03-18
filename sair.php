<?php

	session_start();

	//logout

	session_start();
	unset($_SESSION['logged_in']);  // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
	header("Location: http://localhost/sites/silotransce/login.php");

?>