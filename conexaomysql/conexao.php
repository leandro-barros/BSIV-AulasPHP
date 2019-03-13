<?php
$hostname = "localhost";
$username = "root";
$password = "root";
$dbdatabase = "willian";

$conexao = new mysqli($hostname, $username, $password, $dbdatabase);

if($conexao->connect_error){
    echo "<p>Conexao:Erro!</p>";
}else{ 
    echo "<p>Conexao:OK!</p>";
 }

?>