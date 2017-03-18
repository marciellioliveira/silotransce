<?php 

	$primNome=$_POST['primeiroNome'];
	$segNome=$_POST['segundoNome'];
	$emailUsuario=$_POST['email'];
	$senhaUsuario=$_POST['senha'];
	$link = 'login.php';

	$xml = new XMLWriter;

	$xml->openMemory();

	$xml->startDocument( '1.0' , 'iso-8859-1' );

	$xml->startElement("Usuarios");

	$xml->writeElement("primeiroNome", $primNome);
	$xml->writeElement("segundoNome", $segNome);
	$xml->writeElement("email", $emailUsuario);
	$xml->writeElement("senha", $senhaUsuario);

	$xml->endElement();

	$file = fopen('dadosUser.xml','w+');

	fwrite($file,$xml->outputMemory(true));

	include("login.php");

	fclose($file);
?>