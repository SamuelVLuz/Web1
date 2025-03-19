<?php

function contarPalavras($frase, $palavra){
    $lista_frase = explode(" ", $frase);
    $contagem_lista = array_count_values($lista_frase);
    $contagem_palavra = $contagem_lista[$palavra];

    return $contagem_palavra;
}

echo contarPalavras("Hoje é um belo dia para Hoje é Hoje Hoje Hoje", "Hoje");

?>