<?php

/**
 * Função para formatar um número com casas decimais
 * @param float $valor Valor a ser formatado
 * @return string Valor formatado
 * @author Unset <email>
 */
function formatarValor (float $valor = null): string
{
    return number_format(($valor ? $valor : 0), 2, ',','.');
}

/**
 * Função para formatar um número
 * @param string|null $numero Número a ser formatado
 * @return string Número formatado
 * @author Unset <email>
 */
function formatarNumero (int $numero = null): string
{
    return number_format($numero ? $numero : 0, 0, ',', '.');
}

/**
 * Função que exibe uma saudação conforme horário
 * @return string Mensagem de Saudação
 */
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

/**
 * Função que resume um texto
 * @param string $texto Texto base
 * @param integer $limite Limite de caracteres
 * @param string $continue Parâmetro opcional, acrescido ao fim do resumo
 * @return string Texto resumido
 * @author Unset <email>
 */
function resumirTexto (string $texto, int $limite, string $continue = '...'): string
{
    $textoLimpo = trim(strip_tags($texto));

    if (mb_strlen($textoLimpo) <= $limite) {
        return $textoLimpo;
    }

    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ''));

    return $resumirTexto . $continue;
}