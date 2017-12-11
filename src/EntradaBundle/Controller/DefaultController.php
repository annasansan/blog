<?php


namespace EntradaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class DefaultController extends Controller
{
    /**
     * @Route("/blog")
     */
    public function indexAction()
    {
       
        return $this->render('EntradaBundle:Default:index.html.twig');
     
    }
    
    private function getUltimasEntradas()
    {
        $repository=$this->getDoctrine()->getRepository('EntradaBundle:Entrada');
        return $repository->findultimasEntradas();
    }
    
    public function UltimasEntradasAction() {
        $repository=$this->getDoctrine()->getRepository('EntradaBundle:Entrada');
        $entradas=$repository->findultimasEntradas();
        return array('ultimas_entradas'=>$entradas);
    }
}
