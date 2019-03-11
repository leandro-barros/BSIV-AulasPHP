<!DOCTYPE html>
<html>
<body>

<h2>Formulário PHP</h2>
<head>
<?php
	$nome = isset($_POST['nome']) ? $_POST['nome'] : "";
	$email = isset($_POST['email']) ? $_POST['email'] : "";
	$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : "";
	
	if($nome != "" && $email != "" && $cidade != ""){
		echo "Nome: ".$nome."<br/>";
		echo "Email: ".$email."<br/>";
		echo "Cidade: ".$cidade."<br/>";
	}else{
		echo "Preencha os dados";
	}
?>
</head>

<form action="index-leandro.php" method="POST" style="margin:12px">

  <label>Nome</label>
  <br>
  <input type="text" name="nome"/>
  <br>
  <br>
  
  <label>Email</label>
  <br>
  <input type="email" name="email"/>
  <br>
  <br>
  
  <label>Cidade</label>
  <br>
  <input type="text" name="cidade"/>

  <br><br>
  <input type="submit" value="Enviar">
</form> 

</body>
</html>
