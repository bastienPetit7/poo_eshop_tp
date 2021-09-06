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
        $controller->supprimerUneRobe($id);

    } else if ($type === "Pantalon")
    {
        $controller = new \App\Controllers\PantalonController;
        $controller->supprimerUnPantalon($id);

    } else if ($type === "Sneaker")
    {
        $controller = new \App\Controllers\SneakerController;
        $controller->supprimerUneSneaker($id);

    }
}
