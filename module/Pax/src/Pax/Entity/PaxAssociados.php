<?php

namespace Pax\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * PaxAssociados
 *
 * @ORM\Table(name="pax_associados", indexes={@ORM\Index(name="fk_pax_associados_pax_funcionarios1_idx", columns={"id_funcionarios"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Pax\Entity\PaxAssociadosRepository")
 */
class PaxAssociados extends AbstractEntity
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
     * @ORM\Column(name="cidade_asso", type="string", length=45, nullable=true)
     */
    private $cidadeAsso;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=45, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="contrato", type="string", length=45, nullable=true)
     */
    private $contrato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_contrato", type="datetime", nullable=true)
     */
    private $dataContrato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_pedido", type="datetime", nullable=true)
     */
    private $dataPedido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_nascimento", type="datetime", nullable=true)
     */
    private $dataNascimento;

    /**
     * @var string
     *
     * @ORM\Column(name="dia_pagemento", type="string", length=2, nullable=true)
     */
    private $diaPagemento;

    /**
     * @var string
     *
     * @ORM\Column(name="serie", type="string", length=45, nullable=true)
     */
    private $serie;

    /**
     * @var string
     *
     * @ORM\Column(name="porcento", type="string", length=10, nullable=true)
     */
    private $porcento;

    /**
     * @var string
     *
     * @ORM\Column(name="viajem", type="string", length=3, nullable=true)
     */
    private $viajem;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_civil", type="string", length=10, nullable=true)
     */
    private $estadoCivil;

    /**
     * @var string
     *
     * @ORM\Column(name="profissao", type="string", length=45, nullable=true)
     */
    private $profissao;

    /**
     * @var string
     *
     * @ORM\Column(name="religiao", type="string", length=45, nullable=true)
     */
    private $religiao;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=11, nullable=true)
     */
    private $cep;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=2, nullable=true)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade", type="string", length=100, nullable=true)
     */
    private $cidade;

    /**
     * @var string
     *
     * @ORM\Column(name="bairro", type="string", length=100, nullable=true)
     */
    private $bairro;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco", type="string", length=100, nullable=true)
     */
    private $endereco;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco_cobranca", type="string", length=100, nullable=true)
     */
    private $enderecoCobranca;

    /**
     * @var string
     *
     * @ORM\Column(name="celular", type="string", length=15, nullable=true)
     */
    private $celular;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=15, nullable=true)
     */
    private $telefone;

    /**
     * @var string
     *
     * @ORM\Column(name="local", type="string", length=100, nullable=true)
     */
    private $local;

    /**
     * @var string
     *
     * @ORM\Column(name="pai", type="string", length=100, nullable=true)
     */
    private $pai;

    /**
     * @var string
     *
     * @ORM\Column(name="status_pai", type="string", length=45, nullable=true)
     */
    private $statusPai;

    /**
     * @var string
     *
     * @ORM\Column(name="mae", type="string", length=100, nullable=true)
     */
    private $mae;

    /**
     * @var string
     *
     * @ORM\Column(name="status_mae", type="string", length=45, nullable=true)
     */
    private $statusMae;

    /**
     * @var string
     *
     * @ORM\Column(name="conjugue", type="string", length=100, nullable=true)
     */
    private $conjugue;

    /**
     * @var string
     *
     * @ORM\Column(name="status_conjugue", type="string", length=45, nullable=true)
     */
    private $statusConjugue;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf", type="string", length=15, nullable=true)
     */
    private $cpf;

    /**
     * @var string
     *
     * @ORM\Column(name="rg", type="string", length=15, nullable=true)
     */
    private $rg;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=15, nullable=true)
     */
    private $status = 'ATIVO';

    /**
     * @var string
     *
     * @ORM\Column(name="translado", type="string", length=100, nullable=true)
     */
    private $translado;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="text", nullable=true)
     */
    private $observacao;

    /**
     * @var string
     *
     * @ORM\Column(name="condicao", type="string", length=45, nullable=true)
     */
    private $condicao;

    /**
     * @var string
     *
     * @ORM\Column(name="vendedor", type="string", length=45, nullable=true)
     */
    private $vendedor;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_contrato", type="string", length=45, nullable=true)
     */
    private $tipoContrato;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_sogra", type="string", length=45, nullable=true)
     */
    private $nomeSogra;

    /**
     * @var string
     *
     * @ORM\Column(name="status_sogra", type="string", length=45, nullable=true)
     */
    private $statusSogra;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_sogro", type="string", length=45, nullable=true)
     */
    private $nomeSogro;

    /**
     * @var string
     *
     * @ORM\Column(name="status_sogro", type="string", length=45, nullable=true)
     */
    private $statusSogro;

    /**
     * @var string
     *
     * @ORM\Column(name="motivo_cancelamento", type="text", nullable=true)
     */
    private $motivoCancelamento;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_caixao", type="integer", nullable=true)
     */
    private $tipoCaixao;

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
     * Set cidadeAsso
     *
     * @param string $cidadeAsso
     * @return PaxAssociados
     */
    public function setCidadeAsso($cidadeAsso)
    {
        $this->cidadeAsso = $cidadeAsso;

        return $this;
    }

    /**
     * Get cidadeAsso
     *
     * @return string 
     */
    public function getCidadeAsso()
    {
        return $this->cidadeAsso;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return PaxAssociados
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
     * Set contrato
     *
     * @param string $contrato
     * @return PaxAssociados
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
     * Set dataContrato
     *
     * @param \DateTime $dataContrato
     * @return PaxAssociados
     */
    public function setDataContrato($dataContrato)
    {
        if(!$dataContrato):
            $this->dataContrato = null;
        else:
            $data = explode('/', $dataContrato);
            $dataContrato = $data[2] . '-'.$data[1].'-'.$data[0];
            $this->dataContrato = new \DateTime($dataContrato);
        endif;

        return $this;
    }

    /**
     * Get dataContrato
     *
     * @return \DateTime 
     */
    public function getDataContrato()
    {
        return $this->dataContrato;
    }

    /**
     * Set dataPedido
     *
     * @param \DateTime $dataPedido
     * @return PaxAssociados
     */
    public function setDataPedido($dataPedido)
    {
        if(!$dataPedido):
            $this->dataPedido = null;
        else:
            $data = explode('/', $dataPedido);
            $dataPedido = $data[2] . '-'.$data[1].'-'.$data[0];
            //var_dump($dataContrato);die("PaxAssociaodosEntidade L 448");
            $this->dataPedido = new \DateTime($dataPedido);
        endif;

        return $this;
    }

    /**
     * Get dataPedido
     *
     * @return \DateTime 
     */
    public function getDataPedido()
    {
        return $this->dataPedido;
    }

    /**
     * Set dataNascimento
     *
     * @param \DateTime $dataNascimento
     * @return PaxAssociados
     */
    public function setDataNascimento($dataNascimento)
    {
        if(!$dataNascimento):
            $this->dataNascimento = null;
        else:
            $data = explode('/', $dataNascimento);
            $dataNascimento = $data[2] . '-'.$data[1].'-'.$data[0];
            //var_dump($dataContrato);die("PaxAssociaodosEntidade L 448");
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
     * Set diaPagemento
     *
     * @param string $diaPagemento
     * @return PaxAssociados
     */
    public function setDiaPagemento($diaPagemento)
    {
        $this->diaPagemento = $diaPagemento;

        return $this;
    }

    /**
     * Get diaPagemento
     *
     * @return string 
     */
    public function getDiaPagemento()
    {
        return $this->diaPagemento;
    }

    /**
     * Set serie
     *
     * @param string $serie
     * @return PaxAssociados
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get serie
     *
     * @return string 
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Set porcento
     *
     * @param string $porcento
     * @return PaxAssociados
     */
    public function setPorcento($porcento)
    {
        $this->porcento = $porcento;

        return $this;
    }

    /**
     * Get porcento
     *
     * @return string 
     */
    public function getPorcento()
    {
        return $this->porcento;
    }

    /**
     * Set viajem
     *
     * @param string $viajem
     * @return PaxAssociados
     */
    public function setViajem($viajem)
    {
        $this->viajem = $viajem;

        return $this;
    }

    /**
     * Get viajem
     *
     * @return string 
     */
    public function getViajem()
    {
        return $this->viajem;
    }

    /**
     * Set estadoCivil
     *
     * @param string $estadoCivil
     * @return PaxAssociados
     */
    public function setEstadoCivil($estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;

        return $this;
    }

    /**
     * Get estadoCivil
     *
     * @return string 
     */
    public function getEstadoCivil()
    {
        return $this->estadoCivil;
    }

    /**
     * Set profissao
     *
     * @param string $profissao
     * @return PaxAssociados
     */
    public function setProfissao($profissao)
    {
        $this->profissao = $profissao;

        return $this;
    }

    /**
     * Get profissao
     *
     * @return string 
     */
    public function getProfissao()
    {
        return $this->profissao;
    }

    /**
     * Set religiao
     *
     * @param string $religiao
     * @return PaxAssociados
     */
    public function setReligiao($religiao)
    {
        $this->religiao = $religiao;

        return $this;
    }

    /**
     * Get religiao
     *
     * @return string 
     */
    public function getReligiao()
    {
        return $this->religiao;
    }

    /**
     * Set cep
     *
     * @param string $cep
     * @return PaxAssociados
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get cep
     *
     * @return string 
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return PaxAssociados
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set cidade
     *
     * @param string $cidade
     * @return PaxAssociados
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
     * Set bairro
     *
     * @param string $bairro
     * @return PaxAssociados
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Get bairro
     *
     * @return string 
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set endereco
     *
     * @param string $endereco
     * @return PaxAssociados
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get endereco
     *
     * @return string 
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set enderecoCobranca
     *
     * @param string $enderecoCobranca
     * @return PaxAssociados
     */
    public function setEnderecoCobranca($enderecoCobranca)
    {
        $this->enderecoCobranca = $enderecoCobranca;

        return $this;
    }

    /**
     * Get enderecoCobranca
     *
     * @return string 
     */
    public function getEnderecoCobranca()
    {
        return $this->enderecoCobranca;
    }

    /**
     * Set celular
     *
     * @param string $celular
     * @return PaxAssociados
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get celular
     *
     * @return string 
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set telefone
     *
     * @param string $telefone
     * @return PaxAssociados
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get telefone
     *
     * @return string 
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set local
     *
     * @param string $local
     * @return PaxAssociados
     */
    public function setLocal($local)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local
     *
     * @return string 
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Set pai
     *
     * @param string $pai
     * @return PaxAssociados
     */
    public function setPai($pai)
    {
        $this->pai = $pai;

        return $this;
    }

    /**
     * Get pai
     *
     * @return string 
     */
    public function getPai()
    {
        return $this->pai;
    }

    /**
     * Set statusPai
     *
     * @param string $statusPai
     * @return PaxAssociados
     */
    public function setStatusPai($statusPai)
    {
        $this->statusPai = $statusPai;

        return $this;
    }

    /**
     * Get statusPai
     *
     * @return string 
     */
    public function getStatusPai()
    {
        return $this->statusPai;
    }

    /**
     * Set mae
     *
     * @param string $mae
     * @return PaxAssociados
     */
    public function setMae($mae)
    {
        $this->mae = $mae;

        return $this;
    }

    /**
     * Get mae
     *
     * @return string 
     */
    public function getMae()
    {
        return $this->mae;
    }

    /**
     * Set statusMae
     *
     * @param string $statusMae
     * @return PaxAssociados
     */
    public function setStatusMae($statusMae)
    {
        $this->statusMae = $statusMae;

        return $this;
    }

    /**
     * Get statusMae
     *
     * @return string 
     */
    public function getStatusMae()
    {
        return $this->statusMae;
    }

    /**
     * Set conjugue
     *
     * @param string $conjugue
     * @return PaxAssociados
     */
    public function setConjugue($conjugue)
    {
        $this->conjugue = $conjugue;

        return $this;
    }

    /**
     * Get conjugue
     *
     * @return string 
     */
    public function getConjugue()
    {
        return $this->conjugue;
    }

    /**
     * Set statusConjugue
     *
     * @param string $statusConjugue
     * @return PaxAssociados
     */
    public function setStatusConjugue($statusConjugue)
    {
        $this->statusConjugue = $statusConjugue;

        return $this;
    }

    /**
     * Get statusConjugue
     *
     * @return string 
     */
    public function getStatusConjugue()
    {
        return $this->statusConjugue;
    }

    /**
     * Set cpf
     *
     * @param string $cpf
     * @return PaxAssociados
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
     * @return PaxAssociados
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
     * @return PaxAssociados
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
     * Set translado
     *
     * @param string $translado
     * @return PaxAssociados
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
     * Set observacao
     *
     * @param string $observacao
     * @return PaxAssociados
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    /**
     * Get observacao
     *
     * @return string 
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Set condicao
     *
     * @param string $condicao
     * @return PaxAssociados
     */
    public function setCondicao($condicao)
    {
        $this->condicao = $condicao;

        return $this;
    }

    /**
     * Get condicao
     *
     * @return string 
     */
    public function getCondicao()
    {
        return $this->condicao;
    }

    /**
     * Set vendedor
     *
     * @param string $vendedor
     * @return PaxAssociados
     */
    public function setVendedor($vendedor)
    {
        $this->vendedor = $vendedor;

        return $this;
    }

    /**
     * Get vendedor
     *
     * @return string 
     */
    public function getVendedor()
    {
        return $this->vendedor;
    }

    /**
     * Set tipoContrato
     *
     * @param string $tipoContrato
     * @return PaxAssociados
     */
    public function setTipoContrato($tipoContrato)
    {
        $this->tipoContrato = $tipoContrato;

        return $this;
    }

    /**
     * Get tipoContrato
     *
     * @return string 
     */
    public function getTipoContrato()
    {
        return $this->tipoContrato;
    }

    /**
     * Set nomeSogra
     *
     * @param string $nomeSogra
     * @return PaxAssociados
     */
    public function setNomeSogra($nomeSogra)
    {
        $this->nomeSogra = $nomeSogra;

        return $this;
    }

    /**
     * Get nomeSogra
     *
     * @return string 
     */
    public function getNomeSogra()
    {
        return $this->nomeSogra;
    }

    /**
     * Set statusSogra
     *
     * @param string $statusSogra
     * @return PaxAssociados
     */
    public function setStatusSogra($statusSogra)
    {
        $this->statusSogra = $statusSogra;

        return $this;
    }

    /**
     * Get statusSogra
     *
     * @return string 
     */
    public function getStatusSogra()
    {
        return $this->statusSogra;
    }

    /**
     * Set nomeSogro
     *
     * @param string $nomeSogro
     * @return PaxAssociados
     */
    public function setNomeSogro($nomeSogro)
    {
        $this->nomeSogro = $nomeSogro;

        return $this;
    }

    /**
     * Get nomeSogro
     *
     * @return string 
     */
    public function getNomeSogro()
    {
        return $this->nomeSogro;
    }

    /**
     * Set statusSogro
     *
     * @param string $statusSogro
     * @return PaxAssociados
     */
    public function setStatusSogro($statusSogro)
    {
        $this->statusSogro = $statusSogro;

        return $this;
    }

    /**
     * Get statusSogro
     *
     * @return string 
     */
    public function getStatusSogro()
    {
        return $this->statusSogro;
    }

    /**
     * Set motivoCancelamento
     *
     * @param string $motivoCancelamento
     * @return PaxAssociados
     */
    public function setMotivoCancelamento($motivoCancelamento)
    {
        $this->motivoCancelamento = $motivoCancelamento;

        return $this;
    }

    /**
     * Get motivoCancelamento
     *
     * @return string 
     */
    public function getMotivoCancelamento()
    {
        return $this->motivoCancelamento;
    }

    /**
     * Set tipoCaixao
     *
     * @param integer $tipoCaixao
     * @return PaxAssociados
     */
    public function setTipoCaixao($tipoCaixao)
    {
        $this->tipoCaixao = $tipoCaixao;

        return $this;
    }

    /**
     * Get tipoCaixao
     *
     * @return integer 
     */
    public function getTipoCaixao()
    {
        return $this->tipoCaixao;
    }

    /**
     * Set idFuncionarios
     *
     * @param \Pax\Entity\PaxFuncionarios $idFuncionarios
     * @return PaxAssociados
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
