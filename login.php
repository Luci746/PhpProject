<?php

if(isset($_POST["email"]) && !empty($_POST["email"])){

    // variáveis de autenticação de login
    $login = addslash($_POST["login"]);
    $senha = addslash($_POST["senha"]);

}

