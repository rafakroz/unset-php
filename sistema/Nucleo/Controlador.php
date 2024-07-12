<?php

namespace sistema\Nucleo;

use sistema\Support\Template;

/**
 * Classe reponsável por criar uma instância do template
 */
class Controlador
{
    //Será utilizado na classe filha
    protected Template $template;

    public function __construct(string $diretorio)
    {
        //Assim que acessar o atributo template, será preciso informar um diretório
        //onde estarão os templates
        $this->template = new Template($diretorio);
    }
}