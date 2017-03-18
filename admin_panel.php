<?php 

	session_start();

	//logout

	if(isset($_GET['logout'])) {		
		unset($_SESSION['logged_in']);
		session_destroy();
	}

	//check login
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {
		//json decode user details from session into an array

		$Usuarios = json_decode($_SESSION['Usuarios'],true);

		//debug your values

		/*	
		if(file_exists('dadosUser.xml')) {
			$xml = simplexml_load_file('http://localhost/sites/silotransce/dadosUser.xml');
			print_r($xml);
		} else {
			echo "falha ";
		}*/

		exit(header("Location: http://localhost/sites/silotransce/include/pagina-inicial.php"));


			echo '<a href="?logout">logout</a>';

	} else {

		exit(header("Location: http://localhost/sites/silotransce/login.php"));
	}

?>

