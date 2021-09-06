<?php

namespace App\Models;

require_once('Models/AbstractModel.php'); 


class RobeModel extends AbstractModel
{

    public function findAll()
    {
        $result = $this->pdo->query('SELECT * FROM robe'); 

        return $result->fetchAll();
    }

    public function findOne(int $id)
    {
        $result = $this->pdo->prepare('SELECT * FROM robe WHERE id = :id');
        
        $result->execute(['id' => $id]); 

        return $result->fetch(); 
    }

    public function deleteOne(int $id)
    {

        $delete = $this->pdo->prepare('DELETE FROM robe WHERE id = :id'); 

        $delete->execute(['id' => $id]); 
    }
}