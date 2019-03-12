<?php
    
    $host="localhost";
    $usuario="root";
    $senha="root";

    $conexao = mysqli_connect($host,$usuario,$senha);
    $banco = mysqli_select_db($conexao,'algamoneyfas_api');
    mysqli_set_charset($conexao,'UTF8');

    $sql = mysqli_query($conexao, "select * from categoria") or die("Erro");

    while($dados=mysqli_fetch_assoc($sql)){
        echo $dados['nome'].'</br>';
    }

?>