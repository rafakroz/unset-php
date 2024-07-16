<?php

//Arquivo index responsável pela incialização do sistema
use sistema\Nucleo\Helpers;

require 'vendor/autoload.php';
//require 'rotas.php';

use sistema\Nucleo\Connection;

$con = Connection::getInstancia();