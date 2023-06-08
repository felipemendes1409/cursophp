<?php
$numeroSorteado = rand(1, 100); //gera um número aleatório usando a função rand() do PHP. Neste caso, o número será um valor entre 1 e 100.*/
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Números Aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Número Aleatório</h1>
        <p>O número sorteado é: <?php echo $numeroSorteado; ?></p>
        <button onclick="window.location.reload();">Gerar Novo Número</button>
    </main>
</body>
</html>