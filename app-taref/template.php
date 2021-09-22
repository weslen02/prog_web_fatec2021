<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
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
            <input type="submit" value="Cadastrar">
        </fieldset>

    </form>

    <table>
        <tr>           
            <th>Tarefas</th>
        </tr>

        <?php foreach ($lista_tarefas as $tarefa) : ?>

            <tr>
                <td><?php echo $tarefa; ?></td>
            </tr>
        <?php endforeach;?>

    </table>
</body>
</html>