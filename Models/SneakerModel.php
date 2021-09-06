<?php

namespace App\Models;

require_once('AbstractModel.php'); 


class SneakerModel extends AbstractModel
{

    public function findAll()
    {
        $result = $this->pdo->query('SELECT * FROM sneaker'); 

        return $result->fetchAll();
    }

    public function findOne(int $id)
    {
        $result = $this->pdo->prepare('SELECT * FROM sneaker WHERE id = :id');
        
        $result->execute(['id' => $id]); 

        return $result->fetch(); 
    }

    public function deleteOne(int $id)
    {

        $delete = $this->pdo->prepare('DELETE FROM sneaker WHERE id = :id'); 

        $delete->execute(['id' => $id]); 
    }
}