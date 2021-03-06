<?php
namespace EntradaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class EntradaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
        ->add('titulo',TextType::class)
        ->add('descripcion',TextareaType::class)
        ->add('save',SubmitType::class);
    }
    public function getName() {
        return 'titulo';
    }
}

