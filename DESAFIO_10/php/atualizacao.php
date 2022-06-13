<?php

    include ("conexao.php");

    $tarefa = $_POST['i_tarefa'];
    $tipo = $_POST['i_tipo'];
    $status = $_POST['i_status'];
    $descricao = $_POST['i_descricao'];

    $sql = "update aula set tarefa='$tarefa', tipo='$tipo', status='$status', descricao='$descricao' where cod_aula='$cod'";

    if(mysqli_query($conexao, $sql)){
        include "visualizacao.php";
    }else{
        echo "Erro na atualização do registro!";
    }

?>