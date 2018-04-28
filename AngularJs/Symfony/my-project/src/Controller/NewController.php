<?php 
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class FirstController{
    public function homepage(){
        return new Response('Salut');
    }
}