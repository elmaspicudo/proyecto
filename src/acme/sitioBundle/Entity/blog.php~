<?php

namespace acme\sitioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * blog
 */
class blog
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
    private $contenido;


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
     * @return blog
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
     * Set contenido
     *
     * @param string $contenido
     * @return blog
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
    
        return $this;
    }

    /**
     * Get contenido
     *
     * @return string 
     */
    public function getContenido()
    {
        return $this->contenido;
    }
    /**
     * @var \acme\sitioBundle\Entity\blog
     */
    private $sitio;


    /**
     * Set sitio
     *
     * @param \acme\sitioBundle\Entity\blog $sitio
     * @return blog
     */
    public function setSitio(\acme\sitioBundle\Entity\blog $sitio = null)
    {
        $this->sitio = $sitio;
    
        return $this;
    }

    /**
     * Get sitio
     *
     * @return \acme\sitioBundle\Entity\blog 
     */
    public function getSitio()
    {
        return $this->sitio;
    }
}