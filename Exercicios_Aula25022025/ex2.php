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
    $nota = 1;

    if ($nota < 0 || $nota > 10){
        echo ("Nota inválida");
    } else if ($nota < 1){
        echo ("Muito Ruim");
    } else if ($nota < 5){
        echo ("Ruim");
    } else if ($nota < 7){
        echo ("Regular");
    } else if ($nota < 9){
        echo ("Bom");
    } else {
        echo ("Excelente");
    }
?>
