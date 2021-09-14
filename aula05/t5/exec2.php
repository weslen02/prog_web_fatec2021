<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <title> Vetores em PHP </title>
  <link rel="stylesheet" href="formata-formulario.css">
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 50%;
    }

    td,th {
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
</head>

<body>
  <h1> Vetores em PHP - processando notas de alunos </h1>

  <?php
  $nota1 = $_POST["n1"];
  $nota2 = $_POST["n2"];
  $nota3 = $_POST['n3'];

  $notas = ["Julio" => $nota1, "Cesar" => $nota2, "Andre" => $nota3];

  echo "<div><table class='center'>
    <tr>
      <th>Alunos</th>
      <th>Notas</th>
    </tr>
    <tr>
      <td>Julio</td>
      <td> " . $notas["Julio"] . "</td>
    </tr>

    <tr>
      <td>Cesar</td>
      <td> " . $notas["Cesar"] . "</td>
    </tr>

    <tr>
      <td>Andre</td>
      <td> " . $notas["Andre"] . "</td>
    </tr>
  </table>
  </div>";
  echo "<br>";

  echo "<p> A maior nota é a de: " . "<strong>" . array_search(max($notas), $notas) . " = " . max($notas) . "</strong> </p>";
  ?>


</body>

</html>