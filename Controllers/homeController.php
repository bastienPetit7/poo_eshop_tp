<?php

namespace App\Controllers; 

require_once('abstractController.php'); 

class HomeController extends AbstractController
{

    public function index()
    {
        $this->render('home'); 
    }
}