<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exec 05</title>
    <link rel="stylesheet" href="css/tarefas.css" type="text/css" />
</head>
<body>
    <h1>exec 05</h1>
    <form action="" method="get"> 
        <fieldset>
            <legend>Dados do Aluno</legend>
            <label for="">Codigo:
                <input type="text" name="codigo" id="" value="12345">
            </label>
            <label for="">Nome:
                <input type="text" name="nome" id="" value="Dipirona">
            </label>
            <label for="">Preco:
                <input type="text" name="preco" id="" value="9">
            </label>

            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>   
    <table>
        <tr>           
            <th>Codigo</th>
            <th>Nome</th>
            <th>Preco</th>
        </tr>

        <?php $media = 0;?>
        <?php foreach ($lista_medicamentos as $medicamento) : ?>
            <tr>
                <td><?php echo $medicamento['codigo']; ?></td>
                <td><?php echo $medicamento['nome']; ?></td>
                <td><?php echo $medicamento['preco']; ?></td>
            </tr>

            <?php $maior_preco = max(array($medicamento['preco']));?>
        <?php endforeach;?>
    </table>

    <h1>Maior Preco: <?php echo $maior_preco ;  ?> </h1>
    <h1><?php echo $verdade ? 'Tem o Medicamento procurado' : 'Nada' ?></h1>
</body>
</html>