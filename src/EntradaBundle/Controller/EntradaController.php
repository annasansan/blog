<?php
namespace EntradaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class EntradaController extends Controller

{
  
    public function showAction($page)
    {
        // ...
        
        return $this->render('EntradaBundle:posts:show.html.twig',array('page'=>$page));
    }
    
}

