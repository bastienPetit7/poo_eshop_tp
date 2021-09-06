<?php

namespace App\Models;

abstract class AbstractModel 
{
    protected $pdo; 

    public function __construct()
    {
        $this->pdo = $this->getPDO(); 
    }

    public function getPDO()
    {
        $pdo = new \PDO('mysql:host=localhost;dbname=tpcommerce', 'root', 'root');
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);   
        return $pdo;
    }
}