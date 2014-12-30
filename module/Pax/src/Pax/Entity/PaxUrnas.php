<?php

namespace Pax\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * PaxUrnas
 *
 * @ORM\Table(name="pax_urnas")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Pax\Entity\PaxUrnasRepository")
 */
class PaxUrnas extends AbstractEntity
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
     * @ORM\Column(name="descricao", type="string", length=100, nullable=true)
     */
    private $descricao;

    /**
     * @var integer
     *
     * @ORM\Column(name="saldo", type="integer", nullable=true)
     */
    private $saldo;

    /**
     * @var float
     *
     * @ORM\Column(name="compra", type="float", precision=15, scale=2, nullable=true)
     */
    private $compra;

    /**
     * @var float
     *
     * @ORM\Column(name="venda", type="float", precision=15, scale=2, nullable=true)
     */
    private $venda;



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
     * Set descricao
     *
     * @param string $descricao
     * @return PaxUrnas
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string 
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set saldo
     *
     * @param integer $saldo
     * @return PaxUrnas
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get saldo
     *
     * @return integer 
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set compra
     *
     * @param float $compra
     * @return PaxUrnas
     */
    public function setCompra($compra)
    {
        $this->compra = $compra;

        return $this;
    }

    /**
     * Get compra
     *
     * @return float 
     */
    public function getCompra()
    {
        return $this->compra;
    }

    /**
     * Set venda
     *
     * @param float $venda
     * @return PaxUrnas
     */
    public function setVenda($venda)
    {
        $this->venda = $venda;

        return $this;
    }

    /**
     * Get venda
     *
     * @return float 
     */
    public function getVenda()
    {
        return $this->venda;
    }
}
