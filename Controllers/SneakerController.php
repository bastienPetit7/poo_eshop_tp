<?php

namespace App\Controllers; 

require_once('abstractController.php'); 
require_once('Models/SneakerModel.php');

use App\Controllers\AbstractController; 

class SneakerController extends AbstractController
{
        protected $model; 

        public function __construct()
        {
            $this->model = new \App\Models\SneakerModel; 
        }

        public function afficherToutesLesSneakers()
        {
            $sneakers = $this->model->findAll(); 

            $this->render('sneaker-liste', ['sneakers' => $sneakers]); 
        }

        public function afficherUneSneaker(int $id)
        {

            $sneaker = $this->model->findOne($id); 

            $this->render('sneaker-detail', ['sneaker' => $sneaker]); 
        }

        public function supprimerUneSneaker(int $id)
        {
            $this->model->deleteOne($id); 

            $this->redirect('sneaker'); 

        }
}