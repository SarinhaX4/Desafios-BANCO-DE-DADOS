<?php
   include("conexao.php");

    $sql = "select * from aula";
    $resposta = $conexao->query($sql) ;

    // verificação para saber se meu banco retornou alguma resposta
    if(mysqli_num_rows($resposta) > 0){
        ?>
        <html>
            <head>
                <title>Lista de tarefas</title>
                <meta charset="utf-8">
                <style>
                    table{
                        margin:auto;
                    }
                    td{
                        min-width: 100px;
                    }
                </style>
            </head>
            
            <body>
                <table border = "1">
                    <tr>
                        <td>TAREFAS</td>
                        <td>TIPO</td>
                        <td>STATUS</td>
                        <td>DESCRIÇÃO</td>
                        <td colspan="2">OPÇÕES</td>
                    </tr>
                    <?php
                        while($row = mysqli_fetch_assoc($resposta)){
                        ?>
                        <tr>
                            <td> <?php echo $row["tarefa"] ?> </td>
                            <td> <?php echo $row["tipo"] ?> </td>
                            <td> <?php echo $row["status"] ?> </td>
                            <td> <?php echo $row["descricao"] ?> </td>
                            
                            <td> <a href="editar.php?cod_aula=<?php echo $row["cod_aula"] ?>">Editar</a> </td>
                            <td> <a href="deletar.php?cod_aula=<?php echo $row["cod_aula"] ?>">Excluir</a> </td>

                        </tr> 
                    <?php
                        }
                    ?>
                    <tr>
                        <td colspan="4">
                            <a href = "../index.html">Voltar</a>
                        </td>
                    </tr>
                </table>
            </body>
        </html>
        <?php
    }else{
        echo "Nenhuma tarefa foi cadastrada!";   
    }
    mysqli_close($conexao);
?>
