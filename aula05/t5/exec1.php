<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Vetores em PHP - processando notas de alunos </h1>
 <?php
  $nota1 = $_POST["nota1"];
  $nota2 = $_POST["nota2"];
  $nota3 = $_POST['nota3'];

  //criando um vetor de índice numérico em PHP
  $notas = [];

  $notas[0] = $nota1;
  $notas[1] = $nota2;
  $notas[2] = $nota3;

  //criação do vetor com indexação automática (só funciona com índice numérico)
  $notas[] = $nota1;
  $notas[] = $nota2;
  $notas[] = $nota3;

  //outra forma de criarmos o mesmo vetor
  $notas = array();
  $notas = array($nota1, $nota2, $nota3);

  //outra forma de criarmos o mesmo vetor
  $notas = [$_POST["nota1"], $_POST["nota2"], $_POST["nota3"]];

  //mostrar os dados do vetor na página web
  echo "<pre>";
  print_r($notas);
  echo "</pre>";

  echo "<br>";
  print_r($notas);
  echo "<br>";

  //calculando a média de notas do vetor
  $media = array_sum($notas)/count($notas);

  $mediaFormatada = number_format($media, 1, ",", ".");

  echo "<p> De acordo com os dados armazenados no vetor de notas, a média de notas é igual a <span> $mediaFormatada </span> </p>";  
 ?>    
</body> 
</html> 