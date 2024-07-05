<?php
date_default_timezone_set('America/Sao_Paulo');

function saudacao(): string
{
    $hora = date('H');

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
    $textoLimpo = trim($texto);

    if (mb_strlen($textoLimpo) <= $limite) {
        return $textoLimpo;
    }

    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ''));

    return $resumirTexto . $continue;
}