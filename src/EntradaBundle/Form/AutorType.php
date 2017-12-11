<?php
namespace EntradaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AutorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('nombre',TextType::class)
            ->add('nick',TextType::class)
            ->add('save',SubmitType::class);
    }
    public function getName() {
        return 'autor';
    }
}

