<?php

namespace App\Models;

require_once('AbstractModel.php'); 


class PantalonModel extends AbstractModel
{

    public function findAll()
    {
        $result = $this->pdo->query('SELECT * FROM pantalon'); 

        return $result->fetchAll();
    }

    public function findOne(int $id)
    {
        $result = $this->pdo->prepare('SELECT * FROM pantalon WHERE id = :id');
        
        $result->execute(['id' => $id]); 

        return $result->fetch();
    }

    public function deleteOne(int $id)
    {

        $delete = $this->pdo->prepare('DELETE FROM pantalon WHERE id = :id'); 

        $delete->execute(['id' => $id]); 
    }
}