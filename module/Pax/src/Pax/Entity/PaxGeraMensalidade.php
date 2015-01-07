<?php

namespace Pax\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * PaxGeraMensalidade
 *
 * @ORM\Table(name="pax_gera_mensalidade", indexes={@ORM\Index(name="fk_pax_gera_mensalidade_pax_funcionarios1_idx", columns={"id_funcionarios"})})
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
     * @ORM\Column(name="mes_referencia", type="string", length=45, nullable=true)
     */
    private $mesReferencia;

    /**
     * @var string
     *
     * @ORM\Column(name="ano_referencia", type="string", length=45, nullable=true)
     */
    private $anoReferencia;

    /**
     * @var \Pax\Entity\PaxFuncionarios
     *
     * @ORM\ManyToOne(targetEntity="Pax\Entity\PaxFuncionarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_funcionarios", referencedColumnName="id")
     * })
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
     * Set idFuncionarios
     *
     * @param \Pax\Entity\PaxFuncionarios $idFuncionarios
     * @return PaxGeraMensalidade
     */
    public function setIdFuncionarios(\Pax\Entity\PaxFuncionarios $idFuncionarios = null)
    {
        $this->idFuncionarios = $idFuncionarios;

        return $this;
    }

    /**
     * Get idFuncionarios
     *
     * @return \Pax\Entity\PaxFuncionarios 
     */
    public function getIdFuncionarios()
    {
        return $this->idFuncionarios;
    }
}
