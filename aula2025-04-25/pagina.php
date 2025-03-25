<?php
    if (!isset($_COOKIE["acesso"])){
        setcookie("acesso", 1);
        echo("Bem vindo, esse é o seu primeiro acesso");
    } else {
        echo("Esta é a sua " . $_COOKIE["acesso"] .  " visita a página");
        setcookie("acesso", $_COOKIE["acesso"] + 1);
    }
?>