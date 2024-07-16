<?php

namespace sistema\Nucleo;

use Exception;
use PDO;
use PDOException;

class Connection
{
    private static $instancia;

    public static function getInstancia(): PDO
    {
        //Verificar se a instância está vazia
        if (empty(self::$instancia))
        {
            try {
                //Efetuando a conexão
                //Dado no arquivo configuração
                self::$instancia = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD, [
                    //Garante que o charset seja do PDO seja o mesmo do BD
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",

                    //Todos os erros do PDO, serão exceção
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

                    //Converte os resultados das consultas em objetos
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,

                    //Força as colunas a terem o mesmo nome especificado nas tabelas
                    PDO::ATTR_CASE => PDO::CASE_NATURAL
                ]);

            } catch (PDOException $ex) {

                die('Erro de conexão: ' . $ex->getMessage() . '<br>');

            }

            return self::$instancia;
        }
    }

    /**
     * Construct protegido impede que nova instâncias sejam criadas fora da classe
     */
    protected function __construct()
    {

    }

    /**
     * Clone impede que a classe seja clonada
     * @return void
     */
    private function __clone(): void
    {

    }
}