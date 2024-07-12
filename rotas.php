<?php

use Pecee\SimpleRouter\SimpleRouter;

// Setando os controladores para serem utilizados
SimpleRouter::setDefaultNamespace('sistema\Controller');

SimpleRouter::get(URL_SITE, 'SiteControl@index');
SimpleRouter::get(URL_SITE.'sobre', 'SiteControl@sobre');

// Para as rotas funcionarem
SimpleRouter::start(); 