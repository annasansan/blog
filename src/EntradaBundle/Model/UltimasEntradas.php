<?php
namespace EntradaBundle\Model;

use Doctrine\Common\Persistence\ObjectManager;



class UltimasEntradas
{
    private $repository;
    
    public function _construct(ObjectManager $om) {
        
        $this->repository=$om->getRepository('EntradaBundle:Entrada');
    }
    public function findFrom() {
         
        return $this->repository->findultimasEntradas();
           
        
    }
}

