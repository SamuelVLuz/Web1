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
    $fibo = [0,1];

    for ($i = 2; $i < 10; $i ++){
        $fibo[] = $fibo[$i - 1] + $fibo[$i - 2];
    }

    $string=implode(",",$fibo);
    echo $string;
?>
