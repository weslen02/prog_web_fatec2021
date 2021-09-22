<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
    <link rel="stylesheet" href="css/tarefas.css" type="text/css" />
</head>

<body>
    <h1>Contatos</h1>
    <!-- não executa esse, pois ele será incluido em outro php -->

    <form action="destruidor_de_session.php" method="get">
        <input type="submit" value="destroir session"> <br>
    </form>
    <form action="" method="get">
        <fieldset>
            <legend>Contato</legend>
            <label for="">Nome:
                <input type="text" name="nome" id="">
            </label>
            <label for="">Numero:
                <!-- <input type="tel" name="telefone" id="" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" placeholder="19-1234-5678"> -->
                <input type="tel" name="telefone" id="" placeholder="19-1234-5678">
            </label>
            <label for="">E-mail:
                <input type="text" name="email" id="">
            </label>
            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>
    <table>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>E-mail</th>
        </tr>

        <?php
        // if (isset($_COOKIE['contato'])) {
            $contact = unserialize($_COOKIE['contato']);
            echo "<tr>";
            // foreach ($_COOKIE['contato'] as $contatos){
                echo "<td> {$contact['nome']} </td>";
                echo "<td> {$contact['telefone']} </td>";
                echo "<td> {$contact['email']} </td>";
            // }
            echo "</tr>";
        // }
        ?>
    </table>
</body>

</html>