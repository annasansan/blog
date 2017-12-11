<?php
namespace EntradaBundle\Repository;

use Doctrine\ORM\EntityRepository;

class EntradaRepository extends EntityRepository{
    
    public function findultimasEntradas(){
        
        return $this->getEntityManager()
        ->createQuery('SELECT e from EntradaBundle:Entrada e')
        ->getArrayResult();
        
    }
}