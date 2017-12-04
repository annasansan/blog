<?php
namespace EntradaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use EntradaBundle\Entity\Entrada;
use EntradaBundle\Form\EntradaType;


class EntradaController extends Controller

{
    public function createAction(Request $request)  {
        $entrada=new Entrada();
        $form=$this->createForm(EntradaType::class,$entrada);
        
        
        
        $form->handleRequest($request);
        if ($form->isSubmitted()&&$form->isValid()) {
            $entrada=$form->getData();
            
            $em=$this->getDoctrine()->getManager();
            $em->persist($entrada);
            $em->flush();
            
            //    return $this->redirectToRoute('entradas_autor_show',array('id'=>$autor->getId()));
            
        }
        
        return $this->render('EntradaBundle:Entrada:create.html.twig',array('form'=>$form->createView()));
    }
  
    public function showAction($page)
    {
        // ...
        
        return $this->render('EntradaBundle:posts:show.html.twig',array('page'=>$page));
    }
    
}

