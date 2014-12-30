<?php

namespace Admin\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Sitmap
 *
 * @ORM\Table(name="sitmap")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Admin\Entity\SitmapRepository")
 */
class Sitmap extends AbstractEntity
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
     * @var \DateTime
     *
     * @ORM\Column(name="lastmod", type="datetime", nullable=true)
     */
    private $lastmod;

    /**
     * @var string
     *
     * @ORM\Column(name="loc", type="string", length=150, nullable=true)
     */
    private $loc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_cadastro", type="datetime", nullable=true)
     */
    private $dataCadastro;



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
     * Set lastmod
     *
     * @param \DateTime $lastmod
     * @return Sitmap
     */
    public function setLastmod($lastmod)
    {
        $this->lastmod = $lastmod;

        return $this;
    }

    /**
     * Get lastmod
     *
     * @return \DateTime 
     */
    public function getLastmod()
    {
        return $this->lastmod;
    }

    /**
     * Set loc
     *
     * @param string $loc
     * @return Sitmap
     */
    public function setLoc($loc)
    {
        $this->loc = $loc;

        return $this;
    }

    /**
     * Get loc
     *
     * @return string 
     */
    public function getLoc()
    {
        return $this->loc;
    }

    /**
     * Set dataCadastro
     *
     * @param \DateTime $dataCadastro
     * @return Sitmap
     */
    public function setDataCadastro($dataCadastro)
    {
        $this->dataCadastro = $dataCadastro;

        return $this;
    }

    /**
     * Get dataCadastro
     *
     * @return \DateTime 
     */
    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }
}
