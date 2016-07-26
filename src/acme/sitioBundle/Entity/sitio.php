<?php

namespace acme\sitioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sitio
 */
class sitio
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
    private $dominio;

    /**
     * @var string
     */
    private $imagen;


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
     * @return sitio
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
     * Set dominio
     *
     * @param string $dominio
     * @return sitio
     */
    public function setDominio($dominio)
    {
        $this->dominio = $dominio;
    
        return $this;
    }

    /**
     * Get dominio
     *
     * @return string 
     */
    public function getDominio()
    {
        return $this->dominio;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return sitio
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    
        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $lotes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lotes = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add lotes
     *
     * @param \acme\sitioBundle\Entity\theme $lotes
     * @return sitio
     */
    public function addLote(\acme\sitioBundle\Entity\theme $lotes)
    {
        $this->lotes[] = $lotes;
    
        return $this;
    }

    /**
     * Remove lotes
     *
     * @param \acme\sitioBundle\Entity\theme $lotes
     */
    public function removeLote(\acme\sitioBundle\Entity\theme $lotes)
    {
        $this->lotes->removeElement($lotes);
    }

    /**
     * Get lotes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLotes()
    {
        return $this->lotes;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $theme;


    /**
     * Add theme
     *
     * @param \acme\sitioBundle\Entity\theme $theme
     * @return sitio
     */
    public function addTheme(\acme\sitioBundle\Entity\theme $theme)
    {
        $this->theme[] = $theme;
    
        return $this;
    }

    /**
     * Remove theme
     *
     * @param \acme\sitioBundle\Entity\theme $theme
     */
    public function removeTheme(\acme\sitioBundle\Entity\theme $theme)
    {
        $this->theme->removeElement($theme);
    }

    /**
     * Get theme
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set theme
     *
     * @param \acme\sitioBundle\Entity\theme $theme
     * @return sitio
     */
    public function setTheme(\acme\sitioBundle\Entity\theme $theme = null)
    {
        $this->theme = $theme;
    
        return $this;
    }
}