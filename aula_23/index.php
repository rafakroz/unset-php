<?php

require_once 'sistema/configuracao.php';
include_once 'helpers.php';

// Curso de PHP 8 Aula 022 Limpando TAGSCurso de PHP 8 Aula 023 Documentação com PHPdoc

$texto = 'Texto para resumir com função.';

echo resumirTexto($texto, 14);