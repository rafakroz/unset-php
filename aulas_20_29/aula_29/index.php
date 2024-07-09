<?php

require_once 'sistema/configuracao.php';
include_once 'helpers.php';

// Aula 029 Tipos de Filtros

if (validarEmail('rafael@gmail.com')){
    echo 'Endereço de E-mail válido!';
}
else {
    echo 'E-mail inválido!';
}

echo '<hr>';

var_dump(validarUrl('http://www.globo.com'));
