<?php

/**
 * Classe responsável pelo tratamento das mensagens
 * @author rafaelsilva <email>
 */
class Mensagem
{
    // visibilidade private: apenas a classe pode acessar o atributo
    private $texto;
    private $css;

    /**
     * Método responsável pela renderização
     * @return string Mensagem passada
     */
    public function renderizar(): string
    {
        return $this->texto = $this->filtrar('Mensagem de teste na função renderizar.');
    }

    /**
     * Método responsável pela limpeza de tags na mensagem
     * @param string $mensagem Mensagem passada
     * @return string Mensagem alterada
     */
    private function filtrar(string $mensagem): string
    {
        return filter_var($mensagem, FILTER_SANITIZE_SPECIAL_CHARS);
    }
}