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

    public function __tostring()
    {
        return $this->renderizar();
    }

    /**
     * Função que recebe exibe a mensagem com filtro e estilo de sucesso
     * @param string $mensagem Mensagem recebida
     * @return Mensagem
     */
    public function success(string $mensagem): Mensagem
    {
        $this->css = 'alert alert-success';

        $this->texto = $this->filtrar($mensagem);

        return $this;
    }

    /**
     * Função que recebe exibe a mensagem com filtro e estilo de erro
     * @param string $mensagem Mensagem recebida
     * @return Mensagem
     */
    public function erro(string $mensagem): Mensagem
    {
        $this->css = 'alert alert-danger';

        $this->texto = $this->filtrar($mensagem);

        return $this;
    }

    /**
     * Função que recebe exibe a mensagem com filtro e estilo de alerta
     * @param string $mensagem Mensagem recebida
     * @return Mensagem
     */
    public function alert(string $mensagem): Mensagem
    {
        $this->css = 'alert alert-warning';

        $this->texto = $this->filtrar($mensagem);

        return $this;
    }

    /**
     * Função que recebe exibe a mensagem com filtro e estilo de informação
     * @param string $mensagem Mensagem recebida
     * @return Mensagem
     */
    public function informa(string $mensagem): Mensagem
    {
        $this->css = 'alert alert-primary';

        $this->texto = $this->filtrar($mensagem);

        return $this;
    }

    /**
     * Método responsável pela renderização
     * @return string Mensagem passada
     */
    public function renderizar(): string
    {
        return "<div class='{$this->css}'>{$this->texto}</div>";
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