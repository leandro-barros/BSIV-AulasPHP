<?php
include "conexao.php";

$id      = $_GET["id"];

$excluir = $conexao->query("delete from cliente where id = $id");

if($excluir){
    //$inserir->close(); //Fecha a execução da query query
    echo "Cliente excluído com sucesso!";
} else {
    echo "Erro ao excluir cliente!: ", $excluir->error;//Exibe o erro
}
//header("Location: index.php#tabs-4");
?>