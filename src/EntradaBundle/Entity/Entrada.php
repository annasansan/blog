<?php
namespace EntradaBundle\Entity;

class Entrada
{
    private $id;
    protected $titulo;
    protected $descripcion;
    protected $autor;

    public function __construct(Autor $autor=null,$titulo=null,$descripcion=null){
        $this->autor=$autor;
        $this->titulo=$titulo;
        $this->descripcion=$descripcion;
    }
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Entrada
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Entrada
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    
    

    /**
     * Set autor
     *
     * @param \EntradaBundle\Entity\Author $autor
     *
     * @return Entrada
     */
    public function setAutor(\EntradaBundle\Entity\Author $autor = null)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor
     *
     * @return \EntradaBundle\Entity\Author
     */
    public function getAutor()
    {
        return $this->autor;
    }
}
