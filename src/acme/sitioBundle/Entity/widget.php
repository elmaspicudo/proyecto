<?php

namespace acme\sitioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * widget
 */
class widget
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $contenido;

    /**
     * @var string
     */
    private $coordenadas;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var \acme\sitioBundle\Entity\pagina
     */
    private $pagina;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pagina = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set contenido
     *
     * @param string $contenido
     * @return widget
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
     * Set coordenadas
     *
     * @param string $coordenadas
     * @return widget
     */
    public function setCoordenadas($coordenadas)
    {
        $this->coordenadas = $coordenadas;
    
        return $this;
    }

    /**
     * Get coordenadas
     *
     * @return string 
     */
    public function getCoordenadas()
    {
        return $this->coordenadas;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return widget
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Add pagina
     *
     * @param \acme\sitioBundle\Entity\pagina $pagina
     * @return widget
     */
    public function addPagina(\acme\sitioBundle\Entity\pagina $pagina)
    {
        $this->pagina[] = $pagina;
    
        return $this;
    }

    /**
     * Remove pagina
     *
     * @param \acme\sitioBundle\Entity\pagina $pagina
     */
    public function removePagina(\acme\sitioBundle\Entity\pagina $pagina)
    {
        $this->pagina->removeElement($pagina);
    }

    /**
     * Get pagina
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPagina()
    {
        return $this->pagina;
    }
}
