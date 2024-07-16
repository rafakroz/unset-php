<?php

namespace sistema\Model;

use sistema\Nucleo\Connection;

class PostModel
{
    public function ler(): array
    {
        $query = "SELECT * FROM posts";

        $stmt = Connection::getInstancia()->query($query);

        $result = $stmt->fetchAll();

        /*Debug do resultado da query
        var_dump($result);
        echo '<hr>';*/

        return $result;
    }
}