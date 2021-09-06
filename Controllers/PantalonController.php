<?php

namespace App\Controllers; 

require_once('abstractController.php'); 
require_once('Models/PantalonModel.php');

use App\Controllers\AbstractController; 

class PantalonController extends AbstractController
{
        protected $model; 

        public function __construct()
        {
            $this->model = new \App\Models\PantalonModel; 
        }

        public function afficherToutesLesPantalons()
        {
            $pantalons = $this->model->findAll(); 

            $this->render('pantalon-liste', ['pantalons' => $pantalons]); 
        }

        public function afficherUnPantalon(int $id)
        {

            $pantalon = $this->model->findOne($id); 

            $this->render('pantalon-detail', ['pantalon' => $pantalon]); 
        }

        public function supprimerUnPantalon(int $id)
        {
            $this->model->deleteOne($id); 

            $this->redirect('pantalon'); 

        }
}