<?php

namespace Pax\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * PaxMovimentoCaixa
 *
 * @ORM\Table(name="pax_movimento_caixa")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Pax\Entity\PaxMovimentoCaixaRepository")
 */
class PaxMovimentoCaixa extends AbstractEntity
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
     * @ORM\Column(name="data_movimento", type="datetime", nullable=true)
     */
    private $dataMovimento;

    /**
     * @var string
     *
     * @ORM\Column(name="credor", type="string", length=45, nullable=true)
     */
    private $credor;

    /**
     * @var string
     *
     * @ORM\Column(name="discriminacao", type="string", length=250, nullable=true)
     */
    private $discriminacao;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_lancado", type="float", precision=15, scale=2, nullable=true)
     */
    private $valorLancado;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=1, nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="lancamento", type="string", length=45, nullable=true)
     */
    private $lancamento;



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
     * Set dataMovimento
     *
     * @param \DateTime $dataMovimento
     * @ORM\PrePersist
     * @return PaxMovimentoCaixa
     */
    public function setDataMovimento($dataMovimento)
    {
        $this->dataMovimento = new \DateTime("now");

        return $this;
    }

    /**
     * Get dataMovimento
     *
     * @return \DateTime 
     */
    public function getDataMovimento()
    {
        return $this->dataMovimento;
    }

    /**
     * Set credor
     *
     * @param string $credor
     * @return PaxMovimentoCaixa
     */
    public function setCredor($credor)
    {
        $this->credor = $credor;

        return $this;
    }

    /**
     * Get credor
     *
     * @return string 
     */
    public function getCredor()
    {
        return $this->credor;
    }

    /**
     * Set discriminacao
     *
     * @param string $discriminacao
     * @return PaxMovimentoCaixa
     */
    public function setDiscriminacao($discriminacao)
    {
        $this->discriminacao = $discriminacao;

        return $this;
    }

    /**
     * Get discriminacao
     *
     * @return string 
     */
    public function getDiscriminacao()
    {
        return $this->discriminacao;
    }

    /**
     * Set valorLancado
     *
     * @param float $valorLancado
     * @return PaxMovimentoCaixa
     */
    public function setValorLancado($valorLancado)
    {
        $this->valorLancado = $valorLancado;

        return $this;
    }

    /**
     * Get valorLancado
     *
     * @return float 
     */
    public function getValorLancado()
    {
        return $this->valorLancado;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return PaxMovimentoCaixa
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
     * Set lancamento
     *
     * @param string $lancamento
     * @return PaxMovimentoCaixa
     */
    public function setLancamento($lancamento)
    {
        $this->lancamento = $lancamento;

        return $this;
    }

    /**
     * Get lancamento
     *
     * @return string 
     */
    public function getLancamento()
    {
        return $this->lancamento;
    }
}
