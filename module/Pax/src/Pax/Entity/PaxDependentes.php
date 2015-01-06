<?php

namespace Pax\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * PaxDependentes
 *
 * @ORM\Table(name="pax_dependentes", indexes={@ORM\Index(name="fk_pax_dependentes_1_idx", columns={"id_associado"})})
 * @ORM\Entity@ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Pax\Entity\PaxDependentesRepository")
 */
class PaxDependentes extends AbstractEntity
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
     * @ORM\Column(name="nome", type="string", length=45, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf", type="string", length=45, nullable=true)
     */
    private $cpf;

    /**
     * @var string
     *
     * @ORM\Column(name="rg", type="string", length=45, nullable=true)
     */
    private $rg;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=45, nullable=true)
     */
    private $tipo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_obito", type="datetime", nullable=true)
     */
    private $dataObito;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_nascimento", type="datetime", nullable=true)
     */
    private $dataNascimento;

    /**
     * @var \Pax\Entity\PaxAssociados
     *
     * @ORM\ManyToOne(targetEntity="Pax\Entity\PaxAssociados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_associado", referencedColumnName="id")
     * })
     */
    private $idAssociado;



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
     * Set nome
     *
     * @param string $nome
     * @return PaxDependentes
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set cpf
     *
     * @param string $cpf
     * @return PaxDependentes
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get cpf
     *
     * @return string 
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set rg
     *
     * @param string $rg
     * @return PaxDependentes
     */
    public function setRg($rg)
    {
        $this->rg = $rg;

        return $this;
    }

    /**
     * Get rg
     *
     * @return string 
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return PaxDependentes
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return PaxDependentes
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
     * Set dataObito
     *
     * @param \DateTime $dataObito
     * @return PaxDependentes
     */
    public function setDataObito($dataObito)
    {
        if(!$dataObito):
            $this->dataObito = null;
        else:
            $data = explode('/', $dataObito);
            $dataObito = $data[2] . '-'.$data[1].'-'.$data[0];
            //var_dump($dataObito);die("PaxAssociaodosEntidade L 448");
            $this->dataObito = new \DateTime($dataObito);
        endif;

        return $this;
    }

    /**
     * Get dataObito
     *
     * @return \DateTime 
     */
    public function getDataObito()
    {
        return $this->dataObito;
    }

    /**
     * Set dataNascimento
     *
     * @param \DateTime $dataNascimento
     * @return PaxDependentes
     */
    public function setDataNascimento($dataNascimento)
    {
        if(!$dataNascimento):
            $this->dataNascimento = null;
        else:
            $data = explode('/', $dataNascimento);
            $dataNascimento = $data[2] . '-'.$data[1].'-'.$data[0];
            $this->dataNascimento = new \DateTime($dataNascimento);
        endif;

        return $this;
    }

    /**
     * Get dataNascimento
     *
     * @return \DateTime 
     */
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    /**
     * Set idAssociado
     *
     * @param \Pax\Entity\PaxAssociados $idAssociado
     * @return PaxDependentes
     */
    public function setIdAssociado(\Pax\Entity\PaxAssociados $idAssociado = null)
    {
        $this->idAssociado = $idAssociado;

        return $this;
    }

    /**
     * Get idAssociado
     *
     * @return \Pax\Entity\PaxAssociados 
     */
    public function getIdAssociado()
    {
        return $this->idAssociado;
    }
}
