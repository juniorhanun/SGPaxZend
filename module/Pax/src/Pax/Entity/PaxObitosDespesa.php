<?php

namespace Pax\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * PaxObitosDespesa
 *
 * @ORM\Table(name="pax_obitos_despesa", indexes={@ORM\Index(name="fk_pax_obitos_despesa_pax_obitos1_idx", columns={"id_obitos"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Pax\Entity\PaxObitosDespesaRepository")
 */
class PaxObitosDespesa extends AbstractEntity
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
     * @ORM\Column(name="sepulta", type="string", length=45, nullable=true)
     */
    private $sepulta;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_sep", type="float", precision=15, scale=2, nullable=true)
     */
    private $valorSep;

    /**
     * @var string
     *
     * @ORM\Column(name="paramento", type="string", length=45, nullable=true)
     */
    private $paramento;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_par", type="float", precision=15, scale=2, nullable=true)
     */
    private $valorPar;

    /**
     * @var string
     *
     * @ORM\Column(name="ornamento", type="string", length=45, nullable=true)
     */
    private $ornamento;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_orn", type="float", precision=15, scale=2, nullable=true)
     */
    private $valorOrn;

    /**
     * @var string
     *
     * @ORM\Column(name="velas", type="string", length=45, nullable=true)
     */
    private $velas;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_vela", type="float", precision=15, scale=2, nullable=true)
     */
    private $valorVela;

    /**
     * @var string
     *
     * @ORM\Column(name="veu", type="string", length=45, nullable=true)
     */
    private $veu;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_veu", type="float", precision=15, scale=2, nullable=true)
     */
    private $valorVeu;

    /**
     * @var string
     *
     * @ORM\Column(name="nota_fal", type="string", length=45, nullable=true)
     */
    private $notaFal;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_nota", type="float", precision=15, scale=2, nullable=true)
     */
    private $valorNota;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_servico", type="float", precision=15, scale=2, nullable=true)
     */
    private $valorServico;

    /**
     * @var \Pax\Entity\PaxObitos
     *
     * @ORM\ManyToOne(targetEntity="Pax\Entity\PaxObitos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_obitos", referencedColumnName="id")
     * })
     */
    private $idObitos;



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
     * Set sepulta
     *
     * @param string $sepulta
     * @return PaxObitosDespesa
     */
    public function setSepulta($sepulta)
    {
        $this->sepulta = $sepulta;

        return $this;
    }

    /**
     * Get sepulta
     *
     * @return string
     */
    public function getSepulta()
    {
        return $this->sepulta;
    }

    /**
     * Set valorSep
     *
     * @param float $valorSep
     * @return PaxObitosDespesa
     */
    public function setValorSep($valorSep)
    {
        $this->valorSep = $valorSep;

        return $this;
    }

    /**
     * Get valorSep
     *
     * @return float
     */
    public function getValorSep()
    {
        return $this->valorSep;
    }

    /**
     * Set paramento
     *
     * @param string $paramento
     * @return PaxObitosDespesa
     */
    public function setParamento($paramento)
    {
        $this->paramento = $paramento;

        return $this;
    }

    /**
     * Get paramento
     *
     * @return string
     */
    public function getParamento()
    {
        return $this->paramento;
    }

    /**
     * Set valorPar
     *
     * @param float $valorPar
     * @return PaxObitosDespesa
     */
    public function setValorPar($valorPar)
    {
        $this->valorPar = $valorPar;

        return $this;
    }

    /**
     * Get valorPar
     *
     * @return float
     */
    public function getValorPar()
    {
        return $this->valorPar;
    }

    /**
     * Set ornamento
     *
     * @param string $ornamento
     * @return PaxObitosDespesa
     */
    public function setOrnamento($ornamento)
    {
        $this->ornamento = $ornamento;

        return $this;
    }

    /**
     * Get ornamento
     *
     * @return string
     */
    public function getOrnamento()
    {
        return $this->ornamento;
    }

    /**
     * Set valorOrn
     *
     * @param float $valorOrn
     * @return PaxObitosDespesa
     */
    public function setValorOrn($valorOrn)
    {
        $this->valorOrn = $valorOrn;

        return $this;
    }

    /**
     * Get valorOrn
     *
     * @return float
     */
    public function getValorOrn()
    {
        return $this->valorOrn;
    }

    /**
     * Set velas
     *
     * @param string $velas
     * @return PaxObitosDespesa
     */
    public function setVelas($velas)
    {
        $this->velas = $velas;

        return $this;
    }

    /**
     * Get velas
     *
     * @return string
     */
    public function getVelas()
    {
        return $this->velas;
    }

    /**
     * Set valorVela
     *
     * @param float $valorVela
     * @return PaxObitosDespesa
     */
    public function setValorVela($valorVela)
    {
        $this->valorVela = $valorVela;

        return $this;
    }

    /**
     * Get valorVela
     *
     * @return float
     */
    public function getValorVela()
    {
        return $this->valorVela;
    }

    /**
     * Set veu
     *
     * @param string $veu
     * @return PaxObitosDespesa
     */
    public function setVeu($veu)
    {
        $this->veu = $veu;

        return $this;
    }

    /**
     * Get veu
     *
     * @return string
     */
    public function getVeu()
    {
        return $this->veu;
    }

    /**
     * Set valorVeu
     *
     * @param float $valorVeu
     * @return PaxObitosDespesa
     */
    public function setValorVeu($valorVeu)
    {
        $this->valorVeu = $valorVeu;

        return $this;
    }

    /**
     * Get valorVeu
     *
     * @return float
     */
    public function getValorVeu()
    {
        return $this->valorVeu;
    }

    /**
     * Set notaFal
     *
     * @param string $notaFal
     * @return PaxObitosDespesa
     */
    public function setNotaFal($notaFal)
    {
        $this->notaFal = $notaFal;

        return $this;
    }

    /**
     * Get notaFal
     *
     * @return string
     */
    public function getNotaFal()
    {
        return $this->notaFal;
    }

    /**
     * Set valorNota
     *
     * @param float $valorNota
     * @return PaxObitosDespesa
     */
    public function setValorNota($valorNota)
    {
        $this->valorNota = $valorNota;

        return $this;
    }

    /**
     * Get valorNota
     *
     * @return float
     */
    public function getValorNota()
    {
        return $this->valorNota;
    }

    /**
     * Set valorServico
     *
     * @param float $valorServico
     * @return PaxObitosDespesa
     */
    public function setValorServico($valorServico)
    {
        $this->valorServico = $valorServico;

        return $this;
    }

    /**
     * Get valorServico
     *
     * @return float
     */
    public function getValorServico()
    {
        return $this->valorServico;
    }

    /**
     * Set idObitos
     *
     * @param \Pax\Entity\PaxObitos $idObitos
     * @return PaxObitosDespesa
     */
    public function setIdObitos(\Pax\Entity\PaxObitos $idObitos = null)
    {
        $this->idObitos = $idObitos;

        return $this;
    }

    /**
     * Get idObitos
     *
     * @return \Pax\Entity\PaxObitos
     */
    public function getIdObitos()
    {
        return $this->idObitos;
    }
}