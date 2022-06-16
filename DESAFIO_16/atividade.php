
<html>
    <head>
        <title>Atividade</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/esti_form.css">
    </head>
    <body>
        <form action="" method="">
                <div class="form_box">
    
                    <h1>Nova tarefa</h1>

                    <label>Tarefa:</label>
                    <input type="text" name="i_tarefa" id="i_tarefa" placeholder="Resumir página 15" required>
                    
                    <label>Tipo:</label>
                    <select name="i_tipo" id="i_tipo" required>
                        <option value=""></option>
                        <option value="Aula">Aula</option>
                        <option value="Exercícios">Exercícios</option>
                        <option value="Redação">Redação</option>
                        <option value="Outro">Outro</option>
                    </select>    

                    <label>Status:</label>
                    <select name="i_status" id = "i_status" required>
                        <option value=""></option>
                        <option value="Pendente">Pendente</option>
                        <option value="andamento">Em andamento</option>
                        <option value="Concluído">Concluído</option>
                    </select>

                    <label>Descrição:</label>
                    <textarea name="i_descricao" cols="30" rows="10" id="i_descricao"></textarea>

                    <button class="btt_form" id = "btt_f">Entrar</button>
                    
                    <a href="">Ver tarefas</a>
            
                </div>
        </form>
    </body>
</html>