<?php

//definindo constantes

define('TAMANHO_MIN_NOME',8);
define('TAMANHO_MAX_NOME',40);
define('TAMANHO_CPF',11);
define('TAMANHO_MIN_SENHA',8);

//validador do nome
function nomeOk(string $nome):bool{
    return strlen($nome) >= TAMANHO_MIN_NOME && strlen($nome) <= TAMANHO_MAX_NOME;    
}


//validador de cpf
function cpfOk(string $cpf):bool{
    return strlen($cpf) == TAMANHO_CPF;
}

//validador de email

function emailOk(string $email):bool{
    return strpos($email,'@')>0;
}

function senhaOk(string $senha):bool{
    return strlen($senha) >= TAMANHO_MIN_SENHA;
}

?>
