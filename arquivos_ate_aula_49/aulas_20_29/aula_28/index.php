<?php

require_once 'sistema/configuracao.php';
include_once 'helpers.php';

// Aula 028 Criando Função Contar Tempo

echo contarTempo(date('1933-07-05 12:50:12'));

echo '<hr>';

$data1 = new DateTime('1933-06-02');
$data2 = new DateTime('2024-07-05');

$diferenca = $data1->diff($data2);

echo 'Anos: ' . $diferenca->y;
echo '<br>';
echo 'Dias: ' . $diferenca->days;