<?php

function resultadoNotas($nota1, $nota2, $nota3){
    $media = ($nota1 + $nota2 + $nota3) / 3;

    if ($media < 1.8) {
        $resultado = "Reprovado";
    } else if ($media < 7) {
        $resultado = "Em exame";
    } else {
        $resultado = "Aprovado";
    }

    return $resultado;
}

echo resultadoNotas(7,8,9);

?>