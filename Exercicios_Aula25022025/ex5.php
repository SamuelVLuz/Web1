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
    $num = 5;

    printf("A tabuada do número %d é:<br>", $num);
    for ($i = 1; $i <= 10; $i ++){
        printf("%d vezes %d é: %d<br>", $num, $i, $i * $num);
    }
?>
