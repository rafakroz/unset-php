<?php

require_once 'sistema/configuracao.php';
include_once 'helpers.php';
include './sistema/Nucleo/Mensagem.php';

echo "<b>Aula 039 Introdução as Classes</b>";
echo '<hr><hr>';

$msg = new Mensagem();

var_dump($msg);