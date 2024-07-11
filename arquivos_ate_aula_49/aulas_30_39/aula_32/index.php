<?php

require_once 'sistema/configuracao.php';
include_once 'helpers.php';

echo "Aula 032 Informação do servidor e ambiente de execução";
echo '<hr>';

var_dump(localhost());
echo '<br>';

echo url('noticias/novas');