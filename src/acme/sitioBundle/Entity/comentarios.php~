<?php

namespace acme\sitioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * comentarios
 */
class comentarios
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $comentario;

    /**
     * @var \DateTime
     */
    private $fechaHora;


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
     * @return comentarios
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
     * Set comentario
     *
     * @param string $comentario
     * @return comentarios
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;
    
        return $this;
    }

    /**
     * Get comentario
     *
     * @return string 
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set fechaHora
     *
     * @param \DateTime $fechaHora
     * @return comentarios
     */
    public function setFechaHora($fechaHora)
    {
        $this->fechaHora = $fechaHora;
    
        return $this;
    }

    /**
     * Get fechaHora
     *
     * @return \DateTime 
     */
    public function getFechaHora()
    {
        return $this->fechaHora;
    }
    /**
     * @var \acme\sitioBundle\Entity\comentarios
     */
    private $blog;


    /**
     * Set blog
     *
     * @param \acme\sitioBundle\Entity\comentarios $blog
     * @return comentarios
     */
    public function setBlog(\acme\sitioBundle\Entity\comentarios $blog = null)
    {
        $this->blog = $blog;
    
        return $this;
    }

    /**
     * Get blog
     *
     * @return \acme\sitioBundle\Entity\comentarios 
     */
    public function getBlog()
    {
        return $this->blog;
    }
}