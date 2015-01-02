<?php

namespace Pax\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * PaxMaterial
 *
 * @ORM\Table(name="pax_material")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Pax\Entity\PaxMaterialRepository")
 */
class PaxMaterial extends AbstractEntity
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
     * @ORM\Column(name="descricao", type="string", length=200, nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="saldo", type="string", length=45, nullable=true)
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
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;



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
     * @return PaxMaterial
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
     * @param string $saldo
     * @return PaxMaterial
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get saldo
     *
     * @return string 
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set compra
     *
     * @param float $compra
     * @return PaxMaterial
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
     * @return PaxMaterial
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

    /**
     * Set status
     *
     * @param integer $status
     * @return PaxMaterial
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
