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
    $f1 = 11;
    $f2 = 1;
    $f3 = 10;

    $m = [$f1, $f2, $f3];

    $num = 0;
    $soma = 0;

    for ($i = 0; $i < 3; $i++){
        if ($m[$i] >= 0 && $m[$i] <= 10){
            $soma += $m[$i];
            $num += 1;
        }
    }

    if ($num == 0){
        echo ("Sem notas válidas");
    } else {
        echo ($soma / $num);
    }
?>