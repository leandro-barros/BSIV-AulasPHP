<?php
include "conexao.php";

$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$sexo = $_POST['sexo'];

$inserir = $conexao->query("insert into cliente(nome,cidade,sexo) 
values ('$nome', '$cidade', '$sexo')");

if($inserir){
    //$inserir->close(); //Fecha a execuç?o da query query
    echo "Cliente inserido com sucesso!";
} else {
    echo "Erro ao inserir cliente!: ", $inserir->error;//Exibe o erro
}

?>