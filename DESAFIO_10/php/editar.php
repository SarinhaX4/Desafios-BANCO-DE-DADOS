<?php
    include("conexao.php");

    $cod = $_GET['cod_aula'];
    $sql = "select * from aula where cod_aula=$cod";
    $resposta = $conexao->query($sql);

    if(mysqli_num_rows($resposta) > 0){
        $row = mysqli_fetch_assoc($resposta);

        ?>
            <h1>Editar a tarefa</h1>
            <form action="atualizacao.php?cod_aula=<?php echo $row["cod_aula"] ?>" method="post" >
            <label>Título</label>
            <input type="text" name="i_tarefa" id="i_tarefa" placeholder="Tarefa" required>
            
            <label>Tipo</label>
            <select name="i_tipo">
                <option value=""></option>
                <option value="Aula">Aula</option>
                <option value="Exercícios">Exercícios</option>
                <option value="Redação">Redação</option>
            </select>    

            <label>Status</label>
            <select name="i_status" required>
                <option value=""></option>
                <option value="Pendente">Pendente</option>
                <option value="andamento">Em andamento</option>
                <option value="Concluído">Concluído</option>
            </select>

            <label>Descrição</label>
            <input name="i_descricao" cols="20" rows="10" class="i_descricao"></input>

            <input type="submit" value="Criar tarefa" class="btt_form">

            <a href="visualizacao.php">Ver tarefas</a>
        </form>
    <?php

    }else{
        echo "Nenhum registro editado!";
    }
?>