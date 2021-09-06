<?php

namespace App;



$id=null; 
$type=null;

if(!empty($_GET['id']) && !empty($_GET['type']))
{
   $id = $_GET['id']; 
   $type = $_GET['type']; 

   require_once('Controllers/'.$type.'Controller.php');

    if( $type === "Robe")
    {
        $controller = new \App\Controllers\RobeController;
        $controller->afficherUneRobe($id);

    } else if ($type === "Pantalon")
    {
        $controller = new \App\Controllers\PantalonController;
        $controller->afficherUnPantalon($id);

    } else if ($type === "Sneaker")
    {
        $controller = new \App\Controllers\SneakerController;
        $controller->afficherUneSneaker($id);

    }
}



 
 