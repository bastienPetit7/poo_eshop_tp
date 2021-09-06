<?php

namespace App\Controllers; 

abstract class AbstractController
{


    public function render(string $path, array $varibales= [])
    {
        extract($varibales); 

        ob_start(); 

        require('Templates/'.$path.'.html.php'); 

        $pageContent = ob_get_clean(); 

        require('Templates/layout.html.php'); 
    }

    public function redirect(string $path)
    {
        header('Location: '.$path.'.php'); 
    }
}