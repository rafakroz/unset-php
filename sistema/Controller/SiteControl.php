<?php

namespace sistema\Controller;

use sistema\Nucleo\Controlador;
use sistema\Model\PostModel;
use sistema\Nucleo\Helpers;

class SiteControl extends Controlador
{
    public function __construct()
    {
        parent::__construct('templates/site/views');
    }

    public function index(): void
    {
        $posts = (new PostModel())->busca();

        echo $this->template->renderizar('index.html', [
            'posts' => $posts
        ]);
    }

    public function post (int $id): void
    {
        $post = (new PostModel())->buscaPorId($id);

        if ( ! $post ){
            Helpers::redirecionar('404');
        }

        echo $this->template->renderizar('post.html', [
            'post' => $post
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