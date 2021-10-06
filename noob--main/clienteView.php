<?php

namespace App View;

use Core DataBase;


class cliente {
    private $table = 'cliente';

    public function getAll(): array
    {
        $db = Database::getInstance();
        return $db->getList($this->table, "*");
    }  

    public function getBy(array $condition)
    {
        $db = Database::getInstance();
        return $db->getList($this->table, "*", $condition);
    }
}
</?