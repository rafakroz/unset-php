<?php

require_once 'sistema/configuracao.php';
include_once 'helpers.php';
include './sistema/Nucleo/Mensagem.php';

echo "<b>Aula 040 Introdução aos Atributos</b>";
echo '<hr><hr>';

$msg = new Mensagem();

echo $msg->texto = 'Texto de teste';

echo '<hr>';

var_dump($msg);