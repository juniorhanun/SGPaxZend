<?php

namespace Pax\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;
use Zend\Crypt\Password\Bcrypt;
use Zend\Math\Rand;
use Zend\Stdlib\Hydrator\ClassMethods;

/**
 * PaxFuncionarios
 *
 * @ORM\Table(name="pax_funcionarios")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Pax\Entity\PaxFuncionariosRepository")
 */
class PaxFuncionarios extends AbstractEntity
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
     * @ORM\Column(name="nome", type="string", length=100, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=20, nullable=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="senha", type="string", length=255, nullable=true)
     */
    private $senha;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=10, nullable=true)
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
     * @ORM\Column(name="cidade", type="string", length=45, nullable=true)
     */
    private $cidade;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco", type="string", length=100, nullable=true)
     */
    private $endereco;

    /**
     * @var string
     *
     * @ORM\Column(name="rg", type="string", length=20, nullable=true)
     */
    private $rg;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf", type="string", length=15, nullable=true)
     */
    private $cpf;

    /**
     * @var float
     *
     * @ORM\Column(name="comissao", type="float", precision=5, scale=2, nullable=true)
     */
    private $comissao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_adm", type="datetime", nullable=true)
     */
    private $dataAdm;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=true)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=true)
     */
    private $status = 'ATIVO';

    /**
     * Método Construtor
     * Responsavel por Construir os Métodos Gets and Sets
     * @param array $options
     */
    public function __construct(Array $options = array())
    {
        $this->setSalt(Rand::getString(128, $this->login, true));
        $hydrator = new ClassMethods();
        $hydrator->hydrate($options, $this);

    }

    /**
     * Método toArray
     * Responsabel por montar todos os métodos gets
     * @return array
     */
    public function toArray()
    {
        $hydrator = new ClassMethods();
        return $hydrator->extract($this);
    }



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
     * @return PaxFuncionarios
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
     * Set login
     *
     * @param string $login
     * @return PaxFuncionarios
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set senha
     *
     * @param string $senha
     * @return PaxFuncionarios
     */
    public function setSenha($senha)
    {
        $this->senha = $this->encryptSenha($senha);

        return $this;
    }

    public function encryptSenha($senha)
    {
        $bcrypt = new Bcrypt();
        $bcrypt->setSalt($this->salt);
        return $bcrypt->create($senha);
    }

    /**
     * Get senha
     *
     * @return string 
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set cep
     *
     * @param string $cep
     * @return PaxFuncionarios
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
     * @return PaxFuncionarios
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
     * @return PaxFuncionarios
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
     * Set endereco
     *
     * @param string $endereco
     * @return PaxFuncionarios
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
     * Set rg
     *
     * @param string $rg
     * @return PaxFuncionarios
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
     * Set cpf
     *
     * @param string $cpf
     * @return PaxFuncionarios
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
     * Set comissao
     *
     * @param float $comissao
     * @return PaxFuncionarios
     */
    public function setComissao($comissao)
    {
        $this->comissao = $comissao;

        return $this;
    }

    /**
     * Get comissao
     *
     * @return float 
     */
    public function getComissao()
    {
        return $this->comissao;
    }

    /**
     * Set dataAdm
     *
     * @param \DateTime $dataAdm
     * @return PaxFuncionarios
     */
    public function setDataAdm($dataAdm)
    {
        if(!$dataAdm):
            $this->dataAdm = null;
        else:
            $data = explode('/', $dataAdm);
            $dataAdm = $data[2] . '-'.$data[1].'-'.$data[0];
            $this->dataAdm = new \DateTime($dataAdm);
        endif;

        return $this;
    }

    /**
     * Get dataAdm
     *
     * @return \DateTime 
     */
    public function getDataAdm()
    {
        return $this->dataAdm;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return PaxFuncionarios
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return PaxFuncionarios
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
}
