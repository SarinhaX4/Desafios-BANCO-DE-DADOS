<?php
    session_start();
?>
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/esti_login.css">
    </head>
    <body>
        <main>
        <form action="php/login.php" method="post">
            <div class="form_box">

                <h1>Login</h1>
                <?php
                    if(isset($_SESSION['nao_autenticado'])){
                ?>
                        <div class="erro_box">
                            Usuário ou senha inválidos!
                        </div>
                <?php
                    }
                    unset($_SESSION['nao_autenticado']);
                ?>

                <input type="text" name="i_usuario" class="i_text" placeholder="Usuário" required>

                <input type="password" name="i_senha" class="i_text" placeholder="senha" required>

                <button class="btt_form" point>Entrar</button>

                <div class="novo_usuario-box">
                    Não tem conta? <a href="">Crie uma!</a>
                </div>

            </div>
        </form>
        </main>
    </body>
</html>