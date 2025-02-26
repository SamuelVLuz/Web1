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
    $peso = 83;
    $altura = 1.78;
    $imc = $peso / ($altura ** 2);

    if ($imc < 18.5){
        printf ("Seu IMC é %.2f sendo considerado magreza", $imc);
    } else if ($imc < 25){
        printf ("Seu IMC é %.2f sendo considerado normal", $imc);
    } else if ($imc < 30){
        printf ("Seu IMC é %.2f sendo considerado sobrepeso", $imc);
    } else if ($imc < 40){
        printf ("Seu IMC é %.2f sendo considerado obesidade", $imc);
    } else {
        printf ("Seu IMC é %.2f sendo considerado obesidade grave", $imc);
    }
?>
