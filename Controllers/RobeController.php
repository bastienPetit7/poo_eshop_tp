<?php

namespace App\Controllers; 

require_once('abstractController.php'); 
require_once('Models/RobeModel.php');

use App\Controllers\AbstractController; 

class RobeController extends AbstractController
{
        protected $model; 

        public function __construct()
        {
            $this->model = new \App\Models\RobeModel; 
        }

        public function afficherToutesLesRobes()
        {
            $robes = $this->model->findAll(); 

            $this->render('robe-liste', ['robes' => $robes]); 
        }

        public function afficherUneRobe(int $id)
        {

            $robe = $this->model->findOne($id); 

            $this->render('robe-detail', ['robe' => $robe]); 
        }

        public function supprimerUneRobe(int $id)
        {
            $this->model->deleteOne($id); 

            $this->redirect('robe'); 

        }
}