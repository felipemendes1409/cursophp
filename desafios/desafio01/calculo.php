<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor - Respostas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $numero = $_POST['numero'];
        $antecessor = $numero - 1;
        $sucessor = $numero + 1;
     ?>

    <div class="result-container">
         <h2>Resultado</h2>
        <p>O antecessor de <?php echo $numero; ?> é <?php echo $antecessor; ?></p>
        <p>O sucessor de <?php echo $numero; ?> é <?php echo $sucessor; ?></p>
    </div>
</body>
</html>