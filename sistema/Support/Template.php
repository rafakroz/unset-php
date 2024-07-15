<?php

namespace sistema\Support;

use Twig\Lexer;
use sistema\Nucleo\Helpers;

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

        //Array chamando o método privado helpers
        $lexer = new Lexer($this->twig, [$this->helpers()]);
        
        //
        $this->twig->setLexer($lexer);
    }

    //5 - criada a função para renderizar o template
    //Os dados da array, serão passados para a view, com o método renderizar
    public function renderizar(string $view, array $dados): string
    {
        //6 - Retornando o método render do twig
        return $this->twig->render($view, $dados);
    }

    /**
     * Função com as funções que poderão ser utilizadas mas views com o Twig
     * @return void
     */
    private function helpers(): void
    {
        [
            $this->twig->addFunction(
                new \Twig\TwigFunction('url', function (string $url = null)
                    {
                        return Helpers::url($url);
                    }
                )
            ),
            $this->twig->addFunction(
                new \Twig\TwigFunction('saudacao', function ()
                    {
                        return Helpers::saudacao();
                    }
                )
            ),
            $this->twig->addFunction(
                new \Twig\TwigFunction('resumirTexto', function (string $texto, int $limite)
                    {
                        return Helpers::resumirTexto($texto, $limite);
                    }
                )
            )
        ];
    }

}