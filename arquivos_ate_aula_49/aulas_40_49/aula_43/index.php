<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<?php

require_once 'sistema/configuracao.php';
include_once 'helpers.php';
include './sistema/Nucleo/Mensagem.php';

echo "<b>Aula 043 Introdução aos Métodos Mágicos</b>";
echo '<hr><hr>';

echo (new Mensagem())->alert('Mensagem de alerta!');

//$msg = new Mensagem();

// echo $msg->success('Mensagem de sucesso!')->renderizar();

//echo (new Mensagem())->erro('Mensagem de erro!')->renderizar();

echo '<hr>';

var_dump($msg);