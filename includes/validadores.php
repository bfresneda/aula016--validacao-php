<?php

//definindo constantes

define('TAMANHO_MIN_NOME',8);
define('TAMANHO_MAX_NOME',40);
define('TAMANHO_CPF',11);

//validador do nome
function nomeOk(string $nome):bool{
    return strlen($nome) >= TAMANHO_MIN_NOME && strlen($nome) <= TAMANHO_MAX_NOME;    
}


//validador de cpf
function cpfOk(int $cpf):bool{
    return $cpf == 11;
}



?>
