<?php

require_once 'sistema/configuracao.php';
include_once 'helpers.php';
include './sistema/Nucleo/Mensagem.php';

echo "<b>Aula 041 Introdução aos Métodos</b>";
echo '<hr><hr>';

$msg = new Mensagem();

echo $msg->renderizar();

echo '<hr>';

var_dump($msg);