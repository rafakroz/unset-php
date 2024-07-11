<?php

require_once 'sistema/configuracao.php';
include_once 'helpers.php';

// Aula 022 Limpando TAGS

/*
$textoLimpo = trim(strip_tags($texto));

strip_tags: limpas as tags html do texto
*/

$texto = 'Texto para resumir com função.';

echo resumirTexto($texto, 14);