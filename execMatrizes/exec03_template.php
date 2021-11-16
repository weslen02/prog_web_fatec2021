<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exec 03</title>
    <link rel="stylesheet" href="css/tarefas.css" type="text/css" />
</head>
<body>
    <h1>exec 03</h1>
    <form action="" method="get"> 
        <fieldset>
            <legend>Dados do Aluno</legend>
            <label for="">Matricula:
                <input type="text" name="matricula" id="" value="12345">
            </label>
            <label for="">Nome:
                <input type="text" name="nome" id="" value="Joao1">
            </label>
            <label for="">Media Final:
                <input type="text" name="media" id="" value="9">
            </label>

            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>   
    <table>
        <tr>           
            <th>Matricula</th>
            <th>Nome</th>
            <th>Media</th>
        </tr>

        <?php $media = 0;?>
        <?php foreach ($lista_alunos as $aluno) : ?>
            <tr>
                <td><?php echo $aluno['matricula']; ?></td>
                <td><?php echo $aluno['nome']; ?></td>
                <td><?php echo $aluno['media']; ?></td>
            </tr>

            <?php $media = ($media + $aluno['media']);?>
            <?php $maior_nota = max(array($aluno['media']));?>
        <?php endforeach;?>
    </table>

    <h1>Media da Sala: <?php echo $media / count($lista_alunos);  ?> </h1>
    <h1>Maior Nota: <?php echo $maior_nota ;  ?> </h1>
</body>
</html>