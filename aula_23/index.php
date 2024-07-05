<?php

require_once 'sistema/configuracao.php';
include_once 'helpers.php';

// Aula 023 Documentação com PHPdoc

$texto = 'Texto para resumir com função.';

echo resumirTexto($texto, 14);