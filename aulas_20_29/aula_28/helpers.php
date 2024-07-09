<?php

/**
 * Função que conta o tempo a partir de uma data
 * @param string $data Data informada
 * @return string Resultado da diferença entre as datas
 * @author Unset <email@email.com>
 */
function contarTempo(string $data): string
{
    $agora = strtotime(date('Y-m-d H:i:s'));
    $tempo = strtotime($data);
    $diferenca = $agora - $tempo;
    
    $segundos = $diferenca;
    // tempo / 60 segundos (1 minuto)
    $minutos = round($diferenca / 60);
    // tempo / 3600 segundos (1 hora)
    $horas = round($diferenca / 3600);
    // tempo / 86400 segundos (24 horas)
    $dias = round($diferenca / 86400);
    // tempo / 604800 segundos (1 semana)
    $semanas = round($diferenca / 604800);
    // tempo / 2419200 segundos (4 semanas)
    $meses = round($diferenca / 2419200);
    // tempo / 29030400 segundos (12 meses)
    $anos = round($diferenca / 29030400);

    if ($segundos <= 60) {
        return 'Agora!';
    }
    elseif ($minutos <= 60) {
        return $minutos == 1 ? 'há 1 minuto' : 'há ' . $minutos . ' minutos';
    }
    elseif ($horas <= 24) {
        return $horas == 1 ? 'há 1 hora' : 'há ' . $horas . ' horas';
    }
    elseif ($dias <= 7) {
        return $dias == 1 ? 'ontem' : 'há ' . $dias . ' dias';
    }
    elseif ($semanas <= 4) {
        return $semanas == 1 ? 'há 1 semana' : 'há ' . $semanas . ' semanas';
    }
    elseif ($meses <= 12) {
        return $meses == 1 ? 'há 1 mês' : 'há ' . $meses . ' meses';
    }
    else {
        return $anos == 1 ? 'há 1 ano' : 'há ' . $anos . ' anos';
    }
}

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