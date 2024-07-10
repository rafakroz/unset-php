<?php

require_once 'sistema/configuracao.php';
include_once 'helpers.php';

echo "<b>Aula 038 Introdução as Expressões Regulares</b>";
echo '<hr><hr>';

$cpf = '004.348.491-38';
$cpf2 = '00434849138';

/*
preg_replace: efetua subsituição de string com definição de expressão regular
*/

echo '$cpf ['.$cpf.']: <br>';
var_dump(validarCpf($cpf));

echo '<br><br>';

echo '$cpf2 ['.$cpf2.']: <br>';
var_dump(validarCpf($cpf2));

//echo $limparNumero = preg_replace('/[^0-9]/', '', $cpf);