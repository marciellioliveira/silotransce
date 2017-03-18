<?php

	session_start();
	$dados = simplexml_load_file("http://localhost/sites/silotransce/dadosUser.xml");

	$emailOk = "";
	$senhaOk = "";

	for($i=0; $i<count($dados); $i++) {

		$emailOk = $dados->email;
		$senhaOk = $dados->senha;

		if(empty($_POST["email"]) || empty($_POST["senha"])) {

			$_SESSION['error']='Por favor, digite seu email e senha!';
			exit(header("Location:http://localhost/sites/silotransce/login.php"));

		}

	if(($_POST["email"] == $emailOk) && ($_POST["senha"] == $senhaOk)) {
		//set logged in

		$_SESSION['logged_in'] = true;
		//unset password, no need to include that
		unset($dados->Usuarios[$i]->senha);

		//json encode the user stuff from the xml
		$_SESSION['Usuarios'] = json_encode($dados->Usuarios[$i]);

		//goto admin
		exit(header("Location: http://localhost/sites/silotransce/admin_panel.php"));
	} 

}
	//as we have exited from loop (and therefore not been directed) we have an invalid login
	$_SESSION['error']='Senha ou login errado!';
	exit(header("Location:http://localhost/sites/silotransce/login.php"));

?>