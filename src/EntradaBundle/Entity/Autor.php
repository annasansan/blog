<?php
namespace EntradaBundle\Entity;



class Autor
{
    private $id;
    protected $nombre;
    protected $nick;
    public function __construct($nombre = null,$nick = null){
        $this->nombre=$nombre;
        $this->nick=$nick;
    }
    
    public function getEntradas() {
        return $this->entradas;
    }
    /**
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Autor
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set nick
     *
     * @param string $nick
     *
     * @return Autor
     */
    public function setNick($nick)
    {
        $this->nick = $nick;

        return $this;
    }

    /**
     * Get nick
     *
     * @return string
     */
    public function getNick()
    {
        return $this->nick;
    }
}
