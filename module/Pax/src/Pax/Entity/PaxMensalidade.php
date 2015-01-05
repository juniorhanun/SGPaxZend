<?php

namespace Pax\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * PaxMensalidade
 *
 * @ORM\Table(name="pax_mensalidade", indexes={@ORM\Index(name="fk_pax_mensalidade_pax_associados1_idx", columns={"id_associados"}), @ORM\Index(name="fk_pax_mensalidade_pax_funcionarios1_idx", columns={"id_funcionarios"})})
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Pax\Entity\PaxMensalidadeRepository")
 */
class PaxMensalidade extends AbstractEntity
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
     * @ORM\Column(name="data_pagamento", type="datetime", nullable=true)
     */
    private $dataPagamento;

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
     * @var float
     *
     * @ORM\Column(name="valor_mensalidade", type="float", precision=15, scale=2, nullable=true)
     */
    private $valorMensalidade;

    /**
     * @var integer
     *
     * @ORM\Column(name="paga", type="integer", nullable=true)
     */
    private $paga = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="valor_pago", type="float", precision=15, scale=2, nullable=true)
     */
    private $valorPago;

    /**
     * @var float
     *
     * @ORM\Column(name="diferenca", type="float", precision=15, scale=2, nullable=true)
     */
    private $diferenca;

    /**
     * @var string
     *
     * @ORM\Column(name="cobrador", type="string", length=45, nullable=true)
     */
    private $cobrador;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_associados", type="integer", nullable=false)
     */
    private $idAssociados;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_funcionarios", type="integer", nullable=false)
     */
    private $idFuncionarios;



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
     * Set dataPagamento
     *
     * @param \DateTime $dataPagamento
     * @return PaxMensalidade
     */
    public function setDataPagamento($dataPagamento)
    {
        $this->dataPagamento = $dataPagamento;

        return $this;
    }

    /**
     * Get dataPagamento
     *
     * @return \DateTime 
     */
    public function getDataPagamento()
    {
        return $this->dataPagamento;
    }

    /**
     * Set mesReferencia
     *
     * @param string $mesReferencia
     * @return PaxMensalidade
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
     * @return PaxMensalidade
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
     * Set valorMensalidade
     *
     * @param float $valorMensalidade
     * @return PaxMensalidade
     */
    public function setValorMensalidade($valorMensalidade)
    {
        $this->valorMensalidade = $valorMensalidade;

        return $this;
    }

    /**
     * Get valorMensalidade
     *
     * @return float 
     */
    public function getValorMensalidade()
    {
        return $this->valorMensalidade;
    }

    /**
     * Set paga
     *
     * @param integer $paga
     * @return PaxMensalidade
     */
    public function setPaga($paga)
    {
        $this->paga = $paga;

        return $this;
    }

    /**
     * Get paga
     *
     * @return integer 
     */
    public function getPaga()
    {
        return $this->paga;
    }

    /**
     * Set valorPago
     *
     * @param float $valorPago
     * @return PaxMensalidade
     */
    public function setValorPago($valorPago)
    {
        $this->valorPago = $valorPago;

        return $this;
    }

    /**
     * Get valorPago
     *
     * @return float 
     */
    public function getValorPago()
    {
        return $this->valorPago;
    }

    /**
     * Set diferenca
     *
     * @param float $diferenca
     * @return PaxMensalidade
     */
    public function setDiferenca($diferenca)
    {
        $this->diferenca = $diferenca;

        return $this;
    }

    /**
     * Get diferenca
     *
     * @return float 
     */
    public function getDiferenca()
    {
        return $this->diferenca;
    }

    /**
     * Set cobrador
     *
     * @param string $cobrador
     * @return PaxMensalidade
     */
    public function setCobrador($cobrador)
    {
        $this->cobrador = $cobrador;

        return $this;
    }

    /**
     * Get cobrador
     *
     * @return string 
     */
    public function getCobrador()
    {
        return $this->cobrador;
    }

    /**
     * Set idAssociados
     *
     * @param integer $idAssociados
     * @return PaxMensalidade
     */
    public function setIdAssociados($idAssociados)
    {
        $this->idAssociados = $idAssociados;

        return $this;
    }

    /**
     * Get idAssociados
     *
     * @return integer 
     */
    public function getIdAssociados()
    {
        return $this->idAssociados;
    }

    /**
     * Set idFuncionarios
     *
     * @param integer $idFuncionarios
     * @return PaxMensalidade
     */
    public function setIdFuncionarios($idFuncionarios)
    {
        $this->idFuncionarios = $idFuncionarios;

        return $this;
    }

    /**
     * Get idFuncionarios
     *
     * @return integer 
     */
    public function getIdFuncionarios()
    {
        return $this->idFuncionarios;
    }
}
