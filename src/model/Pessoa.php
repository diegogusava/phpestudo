<?php

namespace model;

use app\DatabaseSingleton;

class Pessoa
{
    const TABLE = "pessoa";
    public $id;
    public $nome;

    public function insert(){
        $db = DatabaseSingleton::getInstance();
        $db->insert(self::TABLE, self::toMap());
    }

    private function toMap()
    {
        return [
            "id" => $this->id,
            "nome" => $this->nome,
        ];
    }

}

