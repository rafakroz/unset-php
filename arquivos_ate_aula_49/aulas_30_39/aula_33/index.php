<?php

require_once 'sistema/configuracao.php';
include_once 'helpers.php';

echo "Aula 033 Introdução aos Arrays";
echo '<hr>';

echo dataAtual();

echo '<hr>';

echo saudacao() . '<br> Hoje é ' . dataAtual();

/*
$meses = [
    'Janeiro', 
    'Fevereiro', 
    'Março', 
    'Abril'
];

foreach ($meses as $chave => $valor){
    echo $valor . '<br>';
};

echo '<hr>';

var_dump($meses);

echo '<hr>';

echo $_SERVER['HTTP_USER_AGENT'];

echo '<hr>';

echo $_SERVER['SCRIPT_FILENAME'];

echo '<hr>';

var_dump($_SERVER);
*/