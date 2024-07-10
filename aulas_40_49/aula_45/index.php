<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<?php

use sistema\Nucleo\Helpers;
use sistema\Nucleo\Mensagem;

require_once './sistema/configuracao.php';
include_once './sistema/Nucleo/Helpers.php';
include './sistema/Nucleo/Mensagem.php';

echo "<b>Aula 045 Introdução aos Métodos Estáticos</b>";
echo '<hr><hr>';

// $helper = new Helpers();

// echo $helper->validarCpf('4314351345');

#

//echo Helpers::limparNumero('15613rdfvsf51css');

echo Helpers::saudacao();

echo '<hr>';