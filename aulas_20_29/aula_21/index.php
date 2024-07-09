<?php

include_once 'helpers.php';

/* Curso de PHP 8 Aula 021 Como Criar uma Função para Resumir Textos Passo a Passo */

$texto = 'Texto para resumir com função.';

// mb_strlen: Contando a quantidade de caracteres
// trim: retira espaços no começo e no final
echo $totalCarcteres = mb_strlen(trim($texto));

echo '<hr>';

// mb_substr: exclui caracteres
// texto, índice de início e quantidade a ser mantida
echo $resumo = mb_substr($texto, 2, 14);

echo '<hr>';

// posição da última ocorrência da string definida
echo $ocorrencia = mb_strrpos($texto, 'p');

echo '<hr>';

echo resumirTexto($texto, 8);
// echo saudacao();

// echo '<br><br>';

/*----------------------------------*/