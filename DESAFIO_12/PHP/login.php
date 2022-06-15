<?php
    session_start();

    include ('conexao.php');

    if(empty($_POST['i_usuario']) || empty($_POST['i_senha'])){
        header('Location: ../index.php');
    }
    // protege o banco de dados de um ataque hacker
    $usuario = mysqli_real_escape_string($conexao, $_POST['i_usuario']);
    $senha = mysqli_real_escape_string($conexao, $_POST['i_senha']);

    $sql = "select id_usuario, nome, sobrenome, login from usuario where login = '{$usuario}' and senha = md5('{$senha}')";
    
    $resposta = mysqli_query($conexao, $sql);
    $row = mysqli_num_rows($resposta);

    if($row == 1){
        $_SESSION['usuario'] = $usuario;
        header('Location: painel.php');
    }else{
        $_SESSION['nao_autenticado'] = true;
        header('Location: ../index.php');
    }

?>