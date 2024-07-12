<?php

namespace sistema\Support;

class Template
{
    //1 - Criado o atributo twig
    private \Twig\Environment $twig;

    //2 - Criado construtor que recebe um diretório [que terá as views]
    public function __construct(string $diretorio)
    {
        //3 - O loader receber o diretório como parâmetro
        $loader = new \Twig\Loader\FilesystemLoader($diretorio);
        
        //4 - Carregamento do diretório
        $this->twig = new \Twig\Environment($loader);
    }

    //5 - criada a função para renderizar o template
    //Os dados da array, serão passados para a view, com o método renderizar
    public function renderizar(string $view, array $dados)
    {
        //6 - Retornando o método render do twig
        return $this->twig->render($view, $dados);
    }
}