<?php
	// Pega pelo link
	//echo $_GET['nomex'];
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$cidade = $_POST['cidade'];
	//$cidade = $_GET['cidade'];
	
	echo "Nome: ".$nome."<br/>";
	echo "Email: ".$email."<br/>";
	echo "Cidade: ".$cidade."<br/>";
?>