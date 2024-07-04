<?php

include_once 'helpers.php';

/* Curso de PHP 8 Aula 017 Tipos de Dados e Retorno */

$texto = 'Teste do index';

echo resumirTexto($texto, 100, 'continue');

echo '<br><br>';

/*----------------------------------*/

$texto = 'texto';
$int = 10;
$float = 9.99;
$bool = false;
$nulo = null;

echo 'Vardump:' . '<br><br>';

echo 'Vardump string: <br>';
var_dump($texto);
echo '<br><br>';

echo 'Vardump int: <br>';
var_dump($int);
echo '<br><br>';

echo 'Vardump float: <br>';
var_dump($float);
echo '<br><br>';

echo 'Vardump boll: <br>';
var_dump($bool);
echo '<br><br>';

echo 'Vardump nulo: <br>';
var_dump($nulo);
echo '<br><br>';
