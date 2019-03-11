<?php
	// $usuario = isset($login = $_POST['usuario'];
	$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : "";
	$senha = isset($_POST['senha']) ? $_POST['senha'] : "";
	// $senha = $_POST['senha'];
	
	if ($usuario == "Leo" && $senha == "123") {
		header('location:site.php');
	}else{
		encho('invalido');
	}
?>