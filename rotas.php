<?php

use Pecee\SimpleRouter\SimpleRouter;
use sistema\Nucleo\Helpers;

try {
    // Setando os controladores para serem utilizados
    SimpleRouter::setDefaultNamespace('sistema\Controller');

    SimpleRouter::get(URL_SITE, 'SiteControl@index');
    SimpleRouter::get(URL_SITE.'sobre', 'SiteControl@sobre');
    SimpleRouter::get(URL_SITE.'404', 'SiteControl@erro404');

    // Para as rotas funcionarem
    SimpleRouter::start(); 

} catch (Pecee\SimpleRouter\Exceptions\NotFoundHttpException $ex) {
    if (Helpers::localhost()) {
        echo $ex;
    }
    else {
        Helpers::redirecionar('404');
    }
}

/*
No catch, caso estejamos em localhost, ou seja, ambiente de desenvolvimento,
teremos a mensagem de erro completa.

Caso não estejamos em ambiente de desenvolvimento, será exibida a página de erro 404.
*/