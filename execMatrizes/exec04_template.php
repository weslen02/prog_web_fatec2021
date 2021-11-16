<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exec 04</title>
    <link rel="stylesheet" href="css/tarefas.css" type="text/css" />
</head>

<body>
    <h1>exec 04</h1>
    <form action="" method="get">
        <fieldset>
            <legend>Dados do Aluno</legend>
            <label for="">Matricula:
                <input type="text" name="matricula" id="" value="12345">
            </label>
            <label for="">Nome:
                <input type="text" name="nome" id="" value="Joao1">
            </label>

            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>
    <table>
        <tr>
            <th>Matricula</th>
            <th>Nome</th>
        </tr>

        <?php foreach ($lista_alunos as $aluno) : ?>
            <tr>
                <td><?php echo $aluno['matricula']; ?></td>
                <td><?php echo $aluno['nome']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h1><?php echo $verdade ? 'Tem o nome procurado' : 'NADA' ?></h1>
</body>

</html>