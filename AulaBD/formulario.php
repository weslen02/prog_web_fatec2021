<form action="" method="get">
    <fieldset>
        <legend>Nova tarefa</legend>
        <input type="hidden" name="id" value="<?php echo $tarefa['id']; ?>">
        <label for="">Tarefa:
            <input type="text" name="nome" value="<?php echo $tarefa['nome']; ?> " />
        </label>
        <label for="">
            Descrição (opcional):
            <textarea name="descricao" id="" cols="30" rows="10"> <?php echo $tarefa['descricao']; ?> </textarea>
        </label>
        <label for="">
            Prazo (opcional):
            <input type="date" name="prazo" value="
                <?php echo $tarefa['prazo'];
                // echo traduz_data_para_exibir($tarefa['prazo']); 
                ?> "
            />
        </label>
        <fieldset>
            <legend>Prioridade</legend>
            <label for="">
                <input type="radio" name="prioridade" value="1" <?php echo ($tarefa['prioridade'] == 1) ? 'checked' : ''; ?> /> Baixa
                <input type="radio" name="prioridade" value="2" <?php echo ($tarefa['prioridade'] == 2) ? 'checked' : ''; ?> /> Média
                <input type="radio" name="prioridade" value="3" <?php echo ($tarefa['prioridade'] == 3) ? 'checked' : ''; ?> /> Alta
            </label>
        </fieldset>
        <label for="">
            Tarefa concluída:
            <input type="checkbox" name="concluida" id="" value="1" <?php echo ($tarefa['concluida'] == 1) ? 'checked' : ''; ?> />
        </label>
        <input type="submit" value="<?php /*echo ($tarefa['id'] > 0) ? 'Atualizar' : 'Cadastrar';*/ echo 'Cadastrar' ?>" />
    </fieldset>
</form>