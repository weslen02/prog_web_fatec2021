<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <title> Vetores em PHP </title>
  <link rel="stylesheet" href="formata-formulario.css">
</head>

<body>
  <h1> Vetores em PHP - exec3 </h1>

  <?php
  $nota1 = $_POST["n1"];
  $nota2 = $_POST["n2"];
  $nota3 = $_POST['n3'];
  
  $notas = array(
    "Julio" => $nota1,
    "Cesar" => $nota2,
    "Andre" => $nota3
  );

  $notasKeys = array_keys($notas);
  print_r($notasKeys);

  echo "<br><br>";

  arsort($notas);
  foreach ($notas as $key => $nota) {
    echo "{$key} = {$nota} <br>";
  }
    

  ?>


</body>

</html>