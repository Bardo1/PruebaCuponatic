<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 *
 * @ORM\Table(name="Producto", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="NormasBundle\Repositories\ProductoRepository"))
 */
class Producto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=60, nullable=true)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=4487, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha_inicio", type="string", length=19, nullable=true)
     */
    private $fechaInicio;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha_termino", type="string", length=19, nullable=true)
     */
    private $fechaTermino;

    /**
     * @var string
     *
     * @ORM\Column(name="precio", type="string", length=6, nullable=true)
     */
    private $precio;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="string", length=133, nullable=true)
     */
    private $imagen;

    /**
     * @var string
     *
     * @ORM\Column(name="vendidos", type="string", length=8, nullable=true)
     */
    private $vendidos;

    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="string", length=89, nullable=true)
     */
    private $tags;



    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Producto
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
     * @return Producto
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
     * Set fechaInicio
     *
     * @param string $fechaInicio
     *
     * @return Producto
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return string
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaTermino
     *
     * @param string $fechaTermino
     *
     * @return Producto
     */
    public function setFechaTermino($fechaTermino)
    {
        $this->fechaTermino = $fechaTermino;

        return $this;
    }

    /**
     * Get fechaTermino
     *
     * @return string
     */
    public function getFechaTermino()
    {
        return $this->fechaTermino;
    }

    /**
     * Set precio
     *
     * @param string $precio
     *
     * @return Producto
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Producto
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
     * Set vendidos
     *
     * @param string $vendidos
     *
     * @return Producto
     */
    public function setVendidos($vendidos)
    {
        $this->vendidos = $vendidos;

        return $this;
    }

    /**
     * Get vendidos
     *
     * @return string
     */
    public function getVendidos()
    {
        return $this->vendidos;
    }

    /**
     * Set tags
     *
     * @param string $tags
     *
     * @return Producto
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
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
}
