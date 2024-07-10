<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<?php

use sistema\Nucleo\Helpers;
use sistema\Nucleo\Mensagem;
use sistema\Nucleo\Controlador;

require_once './sistema/configuracao.php';
include_once './sistema/Nucleo/Helpers.php';
include './sistema/Nucleo/Mensagem.php';
include './sistema/Nucleo/Controlador.php';

echo "<b>Aula 046 Introdução ao Método Mágico construct</b>";
echo '<hr><hr>';

$controlador = new Controlador('admin');

echo '<hr>';

var_dump($controlador);
