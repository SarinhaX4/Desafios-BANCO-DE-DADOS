<?php

    include ("conexao.php");

    $cod = $_GET['cod_aula'];
    $sql = "delete from aula where cod_aula=$cod";

    if(mysqli_query($conexao, $sql)){
        include "visualizacao.php";
    }else{
        echo "Erro na hora de deletar o registro!";
    }

?>