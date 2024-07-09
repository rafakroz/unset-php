<?php

require_once 'sistema/configuracao.php';
include_once 'helpers.php';

echo "<b>Aula 037 Estruturas de Repetição</b>";
echo '<hr><hr>';

$numero = 5;

// while ($numero < 10) {
//     echo $numero++;
// }

$multiplicador = 5;

for ($i = 1; $i <= 10; $i++){
    // echo ($i % 2 ? $i . ' ímpar' . '<br>' : $i . ' par' . '<br>');

    // tabuada
    echo $i . ' x ' . $multiplicador . ' = ' . $i * $multiplicador . '<br>';
}