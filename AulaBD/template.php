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
    
    <?php include('formulario.php'); ?>
    
    <?php if ($exibir_tabela) : ?>
        <?php include('tabela.php'); ?>
    <?php endif; ?>
    
</body>
</html>