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
            'titulo' => 'Home | UnSet',
            'subtitulo' => 'Teste de subtítulo'
        ]);
    }

    public function sobre(): void
    {
        echo $this->template->renderizar('sobre.html', [
            'titulo' => 'Sobre | UnSet',
            'subtitulo' => 'Teste de subtítulo, página sobre'
        ]);
    }

    public function erro404(): void
    {
        echo $this->template->renderizar('404.html', [
            'titulo' => 'Página não encontrada | UnSet'
        ]);
    }
}