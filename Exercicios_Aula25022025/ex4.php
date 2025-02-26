<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo de estrutura de decisão switch</h1>
</body>
</html>

<?php
    $soma = 0;

    for ($i = 1; $i < 50; $i += 2){
        $soma += $i;
    }
    printf("A soma dos ímpares de 1 a 50 é : %d", $soma);
?>
