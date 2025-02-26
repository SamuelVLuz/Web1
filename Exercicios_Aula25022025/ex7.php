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
    $chico = 0.8;
    $juca = 0.6;
    $anos = 0;

    do {
        $chico += 0.06;
        $juca += 0.09;
        $anos += 1;
    } while ($chico > $juca);

    printf ("Juca vai ficar maior que Chico em %d anos", $anos);
?>
