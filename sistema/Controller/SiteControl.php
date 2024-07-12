<?php

namespace sistema\Controller;

use  sistema\Nucleo\Controlador;
use sistema\Support\Template;

class SiteControl extends Controlador
{
    public function __construct()
    {
        parent::__construct('templates/site/views');
    }

    public function index(): void
    {
        echo $this->template->renderizar('index.html', [
            'titulo' => 'Teste de Título',
            'subtitulo' => 'Teste de subtítulo'
        ]);
    }

    public function sobre(): void
    {
        echo $this->template->renderizar('sobre.html', [
            'titulo' => 'Teste de Título, página sobre',
            'subtitulo' => 'Teste de subtítulo, página sobre'
        ]);
    }
}