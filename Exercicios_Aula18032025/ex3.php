<?php

function comparador3numeros($numero1, $numero2, $numero3){

    if ($numero1 == $numero2 && $numero2 == $numero3){
        $resultado = "Os 3 números são iguais";
    } else if ($numero1 >= $numero2 && $numero1 >= $numero3){
        if ($numero1 == $numero2){
            $resultado = "O primeiro número e o segundo são os maiores";
        } else if ($numero1 == $numero3){
            $resultado = "O primeiro número e o terceiro são os maiores";
        } else {
            $resultado = "O primeiro número é o maior";
        }
    } else if ($numero2 >= $numero1 && $numero2 >= $numero3){
        if ($numero2 == $numero3){
            $resultado = "O segundo número e o terceiro são os maiores";
        } else {
            $resultado = "O segundo número é o maior";
        }
    } else if ($numero3 > $numero1 && $numero3 > $numero2){
            $resultado = "O terceiro número é o maior";
    }   

    return $resultado;
}

echo comparador3numeros(3,1,3);

?>