<?php

function saudacao() : string
{
    $hora = 3;

    if ($hora >= 0 && $hora <= 5){
        $saudacao = 'Boa magrugada!' . '<br>';
    }
    if ($hora >= 6 && $hora <= 12){
        $saudacao = 'Bom dia!' . '<br>';
    }
    
    return $saudacao;
}

function resumirTexto (string $texto, int $limite, string $continue = '...'): string
{
    return $texto;
}