<?php

namespace Pax\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * PaxObitos
 *
 * @ORM\Table(name="pax_obitos", indexes={@ORM\Index(name="fk_pax_obitos_pax_funcionarios1_idx", columns={"id_funcionarios"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Pax\Entity\PaxObitosRepository")
 */
class PaxObitos extends AbstractEntity
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
     * @var integer
     *
     * @ORM\Column(name="codigo_ass", type="integer", nullable=true)
     */
    private $codigoAss;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_associado", type="string", length=45, nullable=true)
     */
    private $nomeAssociado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_obito", type="datetime", nullable=true)
     */
    private $dataObito;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=45, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="situacao", type="string", length=45, nullable=true)
     */
    private $situacao;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=true)
     */
    private $status = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="velorio", type="string", length=45, nullable=true)
     */
    private $velorio;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade", type="string", length=45, nullable=true)
     */
    private $cidade;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_pagamento", type="string", length=45, nullable=true)
     */
    private $tipoPagamento;

    /**
     * @var string
     *
     * @ORM\Column(name="contrato", type="string", length=45, nullable=true)
     */
    private $contrato;

    /**
     * @var string
     *
     * @ORM\Column(name="groupo", type="string", length=45, nullable=true)
     */
    private $groupo;

    /**
     * @var string
     *
     * @ORM\Column(name="translado", type="string", length=45, nullable=true)
     */
    private $translado;

    /**
     * @var string
     *
     * @ORM\Column(name="responsavel", type="string", length=45, nullable=true)
     */
    private $responsavel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_pagamento", type="datetime", nullable=true)
     */
    private $dataPagamento;

    /**
     * @var string
     *
     * @ORM\Column(name="cod_urna", type="string", length=45, nullable=true)
     */
    private $codUrna;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_urna", type="string", length=45, nullable=true)
     */
    private $valorUrna;

    /**
     * @var string
     *
     * @ORM\Column(name="diferenca_urna", type="string", length=45, nullable=true)
     */
    private $diferencaUrna;

    /**
     * @var string
     *
     * @ORM\Column(name="atendente", type="string", length=45, nullable=true)
     */
    private $atendente;

    /**
     * @var string
     *
     * @ORM\Column(name="horario_sepultamento", type="string", length=45, nullable=true)
     */
    private $horarioSepultamento;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_total", type="float", precision=15, scale=2, nullable=true)
     */
    private $valorTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text", nullable=true)
     */
    private $descricao;

    /**
     * @var float
     *
     * @ORM\Column(name="valor_tran", type="float", precision=15, scale=2, nullable=true)
     */
    private $valorTran;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_velorio", type="datetime", nullable=true)
     */
    private $dataVelorio;

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
     * Set codigoAss
     *
     * @param integer $codigoAss
     * @return PaxObitos
     */
    public function setCodigoAss($codigoAss)
    {
        $this->codigoAss = $codigoAss;

        return $this;
    }

    /**
     * Get codigoAss
     *
     * @return integer
     */
    public function getCodigoAss()
    {
        return $this->codigoAss;
    }

    /**
     * Set nomeAssociado
     *
     * @param string $nomeAssociado
     * @return PaxObitos
     */
    public function setNomeAssociado($nomeAssociado)
    {
        $this->nomeAssociado = $nomeAssociado;

        return $this;
    }

    /**
     * Get nomeAssociado
     *
     * @return string
     */
    public function getNomeAssociado()
    {
        return $this->nomeAssociado;
    }

    /**
     * Set dataObito
     *
     * @param \DateTime $dataObito
     * @return PaxObitos
     */
    public function setDataObito($dataObito)
    {
        if(!$dataObito):
            $this->dataObito = null;
        else:
            list ($dia, $mes, $ano) = split ('[/.-]', $dataObito);
            $dataObito = $ano . '-'.$mes.'-'.$dia;
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
     * Set nome
     *
     * @param string $nome
     * @return PaxObitos
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
     * Set situacao
     *
     * @param string $situacao
     * @return PaxObitos
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;

        return $this;
    }

    /**
     * Get situacao
     *
     * @return string
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return PaxObitos
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
     * Set velorio
     *
     * @param string $velorio
     * @return PaxObitos
     */
    public function setVelorio($velorio)
    {
        $this->velorio = $velorio;

        return $this;
    }

    /**
     * Get velorio
     *
     * @return string
     */
    public function getVelorio()
    {
        return $this->velorio;
    }

    /**
     * Set cidade
     *
     * @param string $cidade
     * @return PaxObitos
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get cidade
     *
     * @return string
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set tipoPagamento
     *
     * @param string $tipoPagamento
     * @return PaxObitos
     */
    public function setTipoPagamento($tipoPagamento)
    {
        $this->tipoPagamento = $tipoPagamento;

        return $this;
    }

    /**
     * Get tipoPagamento
     *
     * @return string
     */
    public function getTipoPagamento()
    {
        return $this->tipoPagamento;
    }

    /**
     * Set contrato
     *
     * @param string $contrato
     * @return PaxObitos
     */
    public function setContrato($contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato
     *
     * @return string
     */
    public function getContrato()
    {
        return $this->contrato;
    }

    /**
     * Set groupo
     *
     * @param string $groupo
     * @return PaxObitos
     */
    public function setGroupo($groupo)
    {
        $this->groupo = $groupo;

        return $this;
    }

    /**
     * Get groupo
     *
     * @return string
     */
    public function getGroupo()
    {
        return $this->groupo;
    }

    /**
     * Set translado
     *
     * @param string $translado
     * @return PaxObitos
     */
    public function setTranslado($translado)
    {
        $this->translado = $translado;

        return $this;
    }

    /**
     * Get translado
     *
     * @return string
     */
    public function getTranslado()
    {
        return $this->translado;
    }

    /**
     * Set responsavel
     *
     * @param string $responsavel
     * @return PaxObitos
     */
    public function setResponsavel($responsavel)
    {
        $this->responsavel = $responsavel;

        return $this;
    }

    /**
     * Get responsavel
     *
     * @return string
     */
    public function getResponsavel()
    {
        return $this->responsavel;
    }

    /**
     * Set dataPagamento
     *
     * @param \DateTime $dataPagamento
     * @return PaxObitos
     */
    public function setDataPagamento($dataPagamento)
    {
        if(!$dataPagamento):
            $this->dataPagamento = null;
        else:
            list ($dia, $mes, $ano) = split ('[/.-]', $dataPagamento);
            $dataPagamento = $ano . '-'.$mes.'-'.$dia;
            //var_dump($dataPagamento);die("PaxAssociaodosEntidade L 448");
            $this->dataPagamento = new \DateTime($dataPagamento);
        endif;

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
     * Set codUrna
     *
     * @param string $codUrna
     * @return PaxObitos
     */
    public function setCodUrna($codUrna)
    {
        $this->codUrna = $codUrna;

        return $this;
    }

    /**
     * Get codUrna
     *
     * @return string
     */
    public function getCodUrna()
    {
        return $this->codUrna;
    }

    /**
     * Set valorUrna
     *
     * @param string $valorUrna
     * @return PaxObitos
     */
    public function setValorUrna($valorUrna)
    {
        $this->valorUrna = $valorUrna;

        return $this;
    }

    /**
     * Get valorUrna
     *
     * @return string
     */
    public function getValorUrna()
    {
        return $this->valorUrna;
    }

    /**
     * Set diferencaUrna
     *
     * @param string $diferencaUrna
     * @return PaxObitos
     */
    public function setDiferencaUrna($diferencaUrna)
    {
        $this->diferencaUrna = $diferencaUrna;

        return $this;
    }

    /**
     * Get diferencaUrna
     *
     * @return string
     */
    public function getDiferencaUrna()
    {
        return $this->diferencaUrna;
    }

    /**
     * Set atendente
     *
     * @param string $atendente
     * @return PaxObitos
     */
    public function setAtendente($atendente)
    {
        $this->atendente = $atendente;

        return $this;
    }

    /**
     * Get atendente
     *
     * @return string
     */
    public function getAtendente()
    {
        return $this->atendente;
    }

    /**
     * Set horarioSepultamento
     *
     * @param string $horarioSepultamento
     * @return PaxObitos
     */
    public function setHorarioSepultamento($horarioSepultamento)
    {
        $this->horarioSepultamento = $horarioSepultamento;

        return $this;
    }

    /**
     * Get horarioSepultamento
     *
     * @return string
     */
    public function getHorarioSepultamento()
    {
        return $this->horarioSepultamento;
    }

    /**
     * Set valorTotal
     *
     * @param float $valorTotal
     * @return PaxObitos
     */
    public function setValorTotal($valorTotal)
    {
        $this->valorTotal = $valorTotal;

        return $this;
    }

    /**
     * Get valorTotal
     *
     * @return float
     */
    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     * @return PaxObitos
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
     * Set valorTran
     *
     * @param float $valorTran
     * @return PaxObitos
     */
    public function setValorTran($valorTran)
    {
        $this->valorTran = $valorTran;

        return $this;
    }

    /**
     * Get valorTran
     *
     * @return float
     */
    public function getValorTran()
    {
        return $this->valorTran;
    }

    /**
     * Set dataVelorio
     *
     * @param \DateTime $dataVelorio
     * @return PaxObitos
     */
    public function setDataVelorio($dataVelorio)
    {
        if(!$dataVelorio):
            $this->dataVelorio = null;
        else:
            list ($dia, $mes, $ano) = split ('[/.-]', $dataVelorio);
            $dataVelorio = $ano . '-'.$mes.'-'.$dia;
            //var_dump($dataVelorio);die("PaxAssociaodosEntidade L 448");
            $this->dataVelorio = new \DateTime($dataVelorio);
        endif;

        return $this;
    }

    /**
     * Get dataVelorio
     *
     * @return \DateTime
     */
    public function getDataVelorio()
    {
        return $this->dataVelorio;
    }

    /**
     * Set idFuncionarios
     *
     * @param \Pax\Entity\PaxFuncionarios $idFuncionarios
     * @return PaxObitos
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