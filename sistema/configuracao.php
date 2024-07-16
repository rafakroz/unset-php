<?php

// Arquivo de Configurações padrões do Sistema

// Definição do fuso horário
date_default_timezone_set('America/Sao_Paulo');

// Dados para conexão com o banco de dados no Connection
const DB_HOST = 'localhost';
const DB_PORT = '3306';
const DB_NAME = 'blog';
const DB_USER = 'root';
const DB_PASSWORD = '';

// Informações do sistema
const SITE_NOME = 'UnSet';
// Forma em desuso: define('SITE_NOME', 'UnSet');

const SITE_DESCRICAO = 'UnSet - Tecnologia em Sistemas';

// urls do sistema
const URL_PRODUCAO = 'http://unset.com.br';
const URL_DESENVOLVIMENTO_MAC = 'http://localhost:8888/unset-php';
const URL_DESENVOLVIMENTO_OUTRO = 'http://localhost/unset-php';

const URL_SITE = 'unset-php/';