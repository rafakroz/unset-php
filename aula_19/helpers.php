<?php

function saudacao() : string
{
    $hora = 6;

    if ($hora >= 0 AND $hora <= 5){
        $saudacao = 'Boa magrugada!' . '<br>';
    }
    elseif ($hora >= 6 AND $hora <= 12){
        $saudacao = 'Bom dia!';
    }
    elseif ($hora >= 13 AND $hora <= 18){
        $saudacao = 'Boa tarde!';
    }
    else {
        $saudacao = 'Boa noite!';
    }
    
    return $saudacao;
}

function resumirTexto (string $texto, int $limite, string $continue = '...'): string
{
    return $texto;
}