<?php

namespace sistema\Nucleo;

class Helpers
{

    /**
     * Função que valida o CPF
     * @param string $cpf CPF recebido
     * @return bool Validação
     */
    public static function validarCpf (string $cpf): bool
    {
        // $this: objetos
        // self:: métodos estáticos
        // Limpando a string, para que aceite com ou sem ponto e traço
        $cpf = self::limparNumero ($cpf);

        if(mb_strlen($cpf) != 11 || preg_match('/(\d)\1{10}/', $cpf)){
            return false;
        }

        for ($t = 9; $t < 11; $t++){

            for ($d = 0, $c = 0; $c < $t; $c++){
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;

            if ($cpf[$c] != $d) {
                return false;
            }
        }
        return true;
    }

    /**
     * Função que limpa um número
     * @param string $numero Número recebido
     * @return string Número alterado
     */
    public static function limparNumero(string $numero): string
    {
        return preg_replace('/[^0-9]/', '', $numero);
    }

    /**
     * Função para substituição de caracteres
     * @param mixed $string
     * @return string Texto alterado
     */
    public static function slug ($string): string
    {
        $mapa['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúû@#$%&*()_-+={[}]/?¨|;:.,\\\'<>॰৽ª"!   ';

        $mapa['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuu                                 ';

        // strtr: subsistuição de strings
        // mb_convert_encoding: convertendo para o encode utf8
        $slug = strtr(mb_convert_encoding($string, 'ISO-8859-1', 'UTF-8'), mb_convert_encoding($mapa['a'], 'ISO-8859-1', 'UTF-8'), $mapa['b']);

        // strip_tags: remover tags html e trim: remover espaços no início e fim
        $slug = strip_tags(trim($slug));

        // str_replace: efetua substituição de strings
        // substituindo os espaços por traço
        $slug = str_replace(' ', '-', $slug);
        
        // substituindo os traços por apenas 1 traço
        $slug = str_replace(['------', '-----', '----', '---', '--', '-'], '-', $slug);

        // retornando o slug com caracteres caixa baixa
        return strtolower(mb_convert_encoding($slug, 'ISO-8859-1', 'UTF-8'));
    }

    /**
     * Função que monta a data completa
     * @return string Data completa
     */
    public static function dataAtual(): string
    {
        // Dia do mês
        $diaMes = date('d');
        
        // Dia da semana
        $diaSemana = date('w');
        
        // Mês do ano
        $mes = date('n');
        // Aual: $mes = date('n') -1;
        
        // Ano
        $ano = date('Y');

        $nomeDiasDaSemana = ['domingo', 'segunda-feira', 'terça-feira', 'quarta-feira', 'quinta-feira', 'sexta-feira', 'sábado'];
        
        /* Aula:
        $nomeDosMeses = ['Janeiro', Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'
        ];
        */

        $nomeDosMeses = [
            1 => 'Janeiro', 
            2 => 'Fevereiro',
            3 => 'Março',
            4 => 'Abril',
            5 => 'Maio',
            6 => 'Junho',
            7 => 'Julho',
            8 => 'Agosto',
            9 => 'Setembro',
            10 => 'Outubro',
            11 => 'Novembro',
            12 => 'Dezembro'
        ];

        $dataFormatada = $nomeDiasDaSemana[$diaSemana] . ', ' . $diaMes . ' de ' . $nomeDosMeses[$mes] . ' de ' . $ano;

        return $dataFormatada;
    }

    /**
     * Função que monta a url de acordo com o ambiente
     * @param string $url URL recebida
     * @return string URL modificada
     */
    public static function url (string $url = null): string
    {
        $servidor = filter_input(INPUT_SERVER, 'HTTP_HOST');
        //$servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
        //$ambiente = ($servidor == 'localhost' ? URL_DESENVOLVIMENTO : URL_PRODUCAO);

        if ($servidor == 'localhost:8888'){

            $ambiente = URL_DESENVOLVIMENTO_MAC; 

        } elseif ($servidor == 'localhost'){

            $ambiente = URL_DESENVOLVIMENTO_OUTRO; 

        } else {
            $ambiente = URL_PRODUCAO;
        }

        if (str_starts_with($url, '/')){
            return $ambiente.$url;
        }
        return $ambiente . '/' . $url;
    }

    /**
     * Função para identificar se está em localhost
     * @return bool
     */
    public static function localhost(): bool
    {
        $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');

        if ($servidor == 'localhost'){
            return true;
        }
        return false;
    }

    /**
     * Função para validar a URL
     * @param string $url URL testada
     * @return boolean Retorno verdadeiro ou falso
     */
    public static function validarUrl(string $url):bool
    {
        // verifica se tem menos de 10 caracteres
        if (mb_strlen($url) < 10){
            return false;
        }
        // verifica se não contém ponto
        if (!str_contains($url, '.')){
            return false;
        }
        // verifica se contém hhtp ou https
        if (str_contains($url, 'http://') or str_contains($url, 'https://')){
            return true;
        }
        return false;
    }

    /**
     * Função para validar a URL com filtro
     * @param string $url URL testada
     * @return boolean Retorno verdadeiro ou falso
     */
    public static function validarUrlComFiltro(string $url):bool
    {
        // filter_var: aplicando filtro na variável
        return filter_var($url, FILTER_VALIDATE_URL);
    }

    /**
     * Função que valida E-mail
     * @param string $email E-mail testado
     * @return boolean Retorno verdadeiro ou falso
     */
    public static function validarEmail(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    /**
     * Função que conta o tempo a partir de uma data
     * @param string $data Data informada
     * @return string Resultado da diferença entre as datas
     * @author Unset <email@email.com>
     */
    public static function contarTempo(string $data): string
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
    public static function formatarValor (float $valor = null): string
    {
        return number_format(($valor ? $valor : 0), 2, ',','.');
    }

    /**
     * Função para formatar um número
     * @param string|null $numero Número a ser formatado
     * @return string Número formatado
     * @author Unset <email>
     */
    public static function formatarNumero (int $numero = null): string
    {
        return number_format($numero ? $numero : 0, 0, ',', '.');
    }

    /**
     * Função que exibe uma saudação conforme horário
     * @return string Mensagem de Saudação
     */
    public static function saudacao(): string
    {
        $hora = date('H');

        /*
        if ($hora >= 0 AND $hora <= 5){
            $saudacao = 'Boa magrugada!' . '<br>';
        }
        elseif ($hora >= 6 AND $hora <= 12){
            $saudacao = 'Bom dia!' . '<br>';
        }
        elseif ($hora >= 13 AND $hora <= 18){
            $saudacao = 'Boa tarde!' . '<br>';
        }
        else {  
            $saudacao = 'Boa noite!' . '<br>';
        }
        */
        /*
        switch ($hora) {
            case ($hora >= 0 AND $hora <= 5):
                $saudacao = 'Boa magrugada!' . '<br>';
                break;
            case ($hora >= 6 AND $hora <= 12):
                $saudacao = 'Bom dia!' . '<br>';
                break;
            case ($hora >= 13 AND $hora <= 18):
                $saudacao = 'Boa tarde!' . '<br>';
                break;
            
            default:
                $saudacao = 'Boa noite!' . '<br>';
                break;
        }
        */

        $saudacao = match(true){
            $hora >= 0 AND $hora <= 5 => 'Boa madrugada!',
            $hora >= 6 AND $hora <= 12 => 'Bom dia!',
            $hora >= 13 AND $hora <= 18 => 'Boa tarde!',
            default => 'Boa noite!'
        };

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
    public static function resumirTexto (string $texto, int $limite, string $continue = '...'): string
    {
        $textoLimpo = trim(strip_tags($texto));

        if (mb_strlen($textoLimpo) <= $limite) {
            return $textoLimpo;
        }

        $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ''));

        return $resumirTexto . $continue;
    }

}