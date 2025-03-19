<?php

function somaPares($numero){
    $soma = 0;
    for ($i = 0; $i <= $numero; $i += 2){
        $soma += $i;
    }

    return $soma;
}

echo somaPares(30);

?>