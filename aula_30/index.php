<?php

require_once 'sistema/configuracao.php';
include_once 'helpers.php';

echo "Aula 030 É Melhor Criar ou Utilizar um Filtro";
echo '<hr>';

$url = 'http://unset.';

echo 'Função validarUrl:' . '<br>';
var_dump(validarUrl($url));

echo '<hr>';

echo 'Função validarUrlComFiltro:' . '<br>';
var_dump(validarUrlComFiltro($url));
