<?php

namespace sistema\Model;

use sistema\Nucleo\Connection;

class PostModel
{
    public function ler(int|null $id = null): array
    {
        $where = ($id ? "WHERE id = {$id}" : '');

        $query = "SELECT * FROM posts {$where}";
        // $query = "SELECT * FROM posts WHERE title = 'titulo do post 3'";
        // $query = "SELECT * FROM posts LIMIT 2, 2";
        // $query = "SELECT * FROM posts LIMIT 2 OFFSET 5";
        // $query = "SELECT * FROM posts LIMIT 2";
        // $query = "SELECT * FROM posts WHERE id = 2 AND (status = 1 OR status = 0)";
        // $query = "SELECT * FROM posts WHERE id = 4 AND status in (0)";
        // $query = "SELECT * FROM posts WHERE status in (1)";
        // $query = "SELECT * FROM posts WHERE id = 3 AND (status = 0 OR status = 1)";

        $stmt = Connection::getInstancia()->query($query);

        $result = $stmt->fetchAll();

        /*Debug do resultado da query
        var_dump($result);
        echo '<hr>';*/

        return $result;
    }
}