<?php
include "conexao.php";

// Executa uma consulta 
$sql = "select * from cliente";

$query = $conexao->query($sql);

echo "<table border='1'>
		<tr>
			<td>ID</td>
			<td>Nome</td>
			<td>Cidade</td>
			<td>Sexo</td>
			<td>Ação</td>
		</tr>";

while ($dados = $query->fetch_assoc()) {
	$id        = $dados["id"];
	$nome      = $dados["nome"];
	$cidade    = $dados["cidade"];
	$sexo      = $dados["sexo"];
	
	echo "<tr>
			<td>$id</td>
			<td>$nome</td>
			<td>$cidade</td>
			<td>$sexo</td>
			<td><a href=\"excluir.php?id=$id\">Excluir </a></td>	
		  </tr>";
}

     echo "</table>";

?>