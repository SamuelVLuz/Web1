<?php
    setcookie("nome", "", time() - 60);

    echo("Nome: ") . $_COOKIE["nome"];

    setcookie("idade" , 25 , time() + 60 * 60 *24 *30);

    setcookie("acesso", "", time() - 60);
?>