<?php

namespace App;

require_once('Controllers/homeController.php'); 

$controller = new \App\Controllers\HomeController;
$controller->index(); 
