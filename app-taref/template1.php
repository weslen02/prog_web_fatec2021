<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de tarefas</title>
    <link rel="stylesheet" href="css/tarefas.css" type="text/css" />
</head>
<body>
    <h1>Gerenciador de tarefas</h1>
    <form action="" method="get"> 
        <fieldset>
            <legend>Nova tarefa</legend>
            <label for="">Tarefa:
                <input type="text" name="nome" id="">
            </label>
            <label for="">
                Descrição (opcional):
                <textarea name="descricao" id="" cols="30" rows="10"></textarea>
            </label>
            <label for="">
                Prazo (opcional):
                <input type="text" name="prazo" id="">
            </label>
            <fieldset>
                <legend>Prioridade</legend>
                <label for="">
                    <input type="radio" name="prioridade" id="" value="baixa" checked >Baixa
                    <input type="radio" name="prioridade" id="" value="media"  >Média
                    <input type="radio" name="prioridade" id="" value="alta"  >Alta
                </label>
            </fieldset>
            <label for="">
                Tarefa concluída:
                <input type="checkbox" name="concluida" id="" value="sim">
            </label>
            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>   
    <table>
        <tr>           
            <th>Tarefa</th>
            <th>Descrição</th>
            <th>Prazo</th>
            <th>Prioridade</th>
            <th>Concluída</th>
        </tr>

        <?php foreach ($lista_tarefas as $tarefa) : ?>
            <tr>
                <td><?php echo $tarefa['nome']; ?></td>
                <td><?php echo $tarefa['descricao']; ?></td>
                <td><?php echo $tarefa['prazo']; ?></td>
                <td><?php echo $tarefa['prioridade']; ?></td>
                <td><?php echo $tarefa['concluida']; ?></td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>