<?php
    include("conexao.php");

    $tarefa = $_POST['i_tarefa'];
    $tipo = $_POST['i_tipo'];
    $status = $_POST['i_status'];
    $descricao = $_POST['i_descricao'];

    $sql = "insert into aula (tarefa, tipo, status, descricao) values ('{$tarefa}','{$tipo}','{$status}', '{$descricao}')";
    $conexao->query($sql);
?>

<html>
    <head>
        <title>Concluído</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Tarefa cadastrada</h1>
        <a href="../index.html">Nova tarefa</a>
        <a href="visualizacao.php">Ver tarefas</a>
    </body>
</html>