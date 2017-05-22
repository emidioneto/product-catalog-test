<?php

namespace App\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cms
 *
 * @ORM\Table(name="cms", indexes={@ORM\Index(name="fk_product_idx", columns={"id_product"}), @ORM\Index(name="fk_category0_idx", columns={"id_category"})})
 * @ORM\Entity(repositoryClass="App\Model\Repository\CmsRepository")
 */
class Cms
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255, nullable=false)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=255, nullable=false)
     */
    private $region;

    /**
     * @var \App\Model\Category
     *
     * @ORM\ManyToOne(targetEntity="App\Model\Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_category", referencedColumnName="id")
     * })
     */
    private $idCategory;

    /**
     * @var \App\Model\Product
     *
     * @ORM\ManyToOne(targetEntity="App\Model\Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_product", referencedColumnName="id")
     * })
     */
    private $idProduct;

    function getId()
    {
        return $this->id;
    }

    function getContent()
    {
        return $this->content;
    }

    function getRegion()
    {
        return $this->region;
    }

//    function getIdCategory(): \App\Model\Category
    function getIdCategory()
    {
        return $this->idCategory;
    }

//    function getIdProduct(): \App\Model\Product
    function getIdProduct()
    {
        return $this->idProduct;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function setContent($content)
    {
        $this->content = $content;
    }

    function setRegion($region)
    {
        $this->region = $region;
    }

    function setIdCategory(\App\Model\Category $idCategory)
    {
        $this->idCategory = $idCategory;
    }

    function setIdProduct(\App\Model\Product $idProduct)
    {
        $this->idProduct = $idProduct;
    }
}