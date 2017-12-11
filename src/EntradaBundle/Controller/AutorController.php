<?php
namespace EntradaBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use EntradaBundle\Entity\Autor;
use EntradaBundle\Form\AutorType;

class AutorController extends Controller
{
    public function createAction(Request $request)  {
        $autor=new Autor();
        $form=$this->createForm(AutorType::class,$autor);
       
        
        
        $form->handleRequest($request);
        if ($form->isSubmitted()&&$form->isValid()) {
            $autor=$form->getData();
            
            $em=$this->getDoctrine()->getManager();
            $em->persist($autor);
            $em->flush();
            
        //    return $this->redirectToRoute('entradas_autor_show',array('id'=>$autor->getId()));
             
        }
        
        return $this->render('EntradaBundle:Autor:create.html.twig',array('form'=>$form->createView()));
    }
}

