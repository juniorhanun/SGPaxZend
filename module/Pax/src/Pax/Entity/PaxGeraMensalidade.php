<?php

namespace Pax\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * PaxGeraMensalidade
 *
 * @ORM\Table(name="pax_gera_mensalidade", indexes={@ORM\Index(name="fk_pax_gera_mensalidade_pax_funcionarios1_idx", columns={"id_cobrador"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Pax\Entity\PaxGeraMensalidadeRepository")
 */
class PaxGeraMensalidade extends AbstractEntity
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
     * @ORM\Column(name="mes_referencia", type="string", length=2, nullable=true)
     */
    private $mesReferencia;

    /**
     * @var string
     *
     * @ORM\Column(name="ano_referencia", type="string", length=4, nullable=true)
     */
    private $anoReferencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_criacao", type="datetime", nullable=true)
     */
    private $dataCriacao;

    /**
     * @var \Pax\Entity\PaxFuncionarios
     *
     * @ORM\ManyToOne(targetEntity="Pax\Entity\PaxFuncionarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cobrador", referencedColumnName="id")
     * })
     */
    private $idCobrador;



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
     * Set mesReferencia
     *
     * @param string $mesReferencia
     * @return PaxGeraMensalidade
     */
    public function setMesReferencia($mesReferencia)
    {
        $this->mesReferencia = $mesReferencia;

        return $this;
    }

    /**
     * Get mesReferencia
     *
     * @return string 
     */
    public function getMesReferencia()
    {
        return $this->mesReferencia;
    }

    /**
     * Set anoReferencia
     *
     * @param string $anoReferencia
     * @return PaxGeraMensalidade
     */
    public function setAnoReferencia($anoReferencia)
    {
        $this->anoReferencia = $anoReferencia;

        return $this;
    }

    /**
     * Get anoReferencia
     *
     * @return string 
     */
    public function getAnoReferencia()
    {
        return $this->anoReferencia;
    }

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     * @ORM\PrePersist
     * @return PaxGeraMensalidade
     */
    public function setDataCriacao($dataCriacao)
    {
        $this->dataCriacao = new \DateTime('now');

        return $this;
    }

    /**
     * Get dataCriacao
     *
     * @return \DateTime 
     */
    public function getDataCriacao()
    {
        return $this->dataCriacao;
    }

    /**
     * Set idCobrador
     *
     * @param \Pax\Entity\PaxFuncionarios $idCobrador
     * @return PaxGeraMensalidade
     */
    public function setIdCobrador(\Pax\Entity\PaxFuncionarios $idCobrador = null)
    {
        $this->idCobrador = $idCobrador;

        return $this;
    }

    /**
     * Get idCobrador
     *
     * @return \Pax\Entity\PaxFuncionarios 
     */
    public function getIdCobrador()
    {
        return $this->idCobrador;
    }
}
