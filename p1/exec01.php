<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <title> Vetores em PHP </title>
    <link rel="stylesheet" href="formata-formulario.css">
</head>

<style>
    /* table */
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 50%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    .center {
        margin-left: auto;
        margin-right: auto;
    }
</style>

<body>
    <h1> P1 EXEC 01 </h1>

    <?php

    $aluno1 = $_POST["a1"];
    $aluno2 = $_POST["a2"];
    $aluno3 = $_POST["a3"];

    $nota1 = $_POST["n1"];
    $nota2 = $_POST["n2"];
    $nota3 = $_POST['n3'];

    $notasAlunos = array(
        $aluno1 => $nota1,
        $aluno2 => $nota2,
        $aluno3 => $nota3
    );

    arsort($notasAlunos);
    
    echo "<div><table class='center'>
    <tr>
      <th>Alunos</th>
      <th>Notas</th>
    </tr>";

    foreach ($notasAlunos as $nome => $nota) {
        echo "<tr>
            <td>{$nome}</td>
            <td>{$nota}</td>
        </tr>";
    }


    echo "</table>
    </div>";
    echo "<br>";
    ?>
</body>

</html>