<?php

namespace Admin\Entity;

use Core\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Conteudos
 *
 * @ORM\Table(name="conteudos")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Admin\Entity\ConteudosRepository")
 */
class Conteudos extends AbstractEntity
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
     * @ORM\Column(name="titulo", type="string", length=250, nullable=true)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="conteudo", type="text", nullable=true)
     */
    private $conteudo;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text", nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="palavra_chaves", type="text", nullable=true)
     */
    private $palavraChaves;

    /**
     * @var string
     *
     * @ORM\Column(name="fontes", type="string", length=100, nullable=true)
     */
    private $fontes;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_cadastro", type="datetime", nullable=true)
     */
    private $dataCadastro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_alteracao", type="datetime", nullable=true)
     */
    private $dataAlteracao;

    /**
     * @var integer
     *
     * @ORM\Column(name="views", type="integer", nullable=true)
     */
    private $views;

    /**
     * @var integer
     *
     * @ORM\Column(name="clicks", type="integer", nullable=true)
     */
    private $clicks;

    /**
     * @var string
     *
     * @ORM\Column(name="autor", type="string", length=100, nullable=true)
     */
    private $autor;



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
     * Set titulo
     *
     * @param string $titulo
     * @return Conteudos
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set conteudo
     *
     * @param string $conteudo
     * @return Conteudos
     */
    public function setConteudo($conteudo)
    {
        $this->conteudo = $conteudo;

        return $this;
    }

    /**
     * Get conteudo
     *
     * @return string 
     */
    public function getConteudo()
    {
        return $this->conteudo;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     * @ORM\PrePersist
     * @return Conteudos
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
     * Set palavraChaves
     *
     * @param string $palavraChaves
     * @return Conteudos
     */
    public function setPalavraChaves($palavraChaves)
    {
        $this->palavraChaves = $palavraChaves;

        return $this;
    }

    /**
     * Get palavraChaves
     *
     * @return string 
     */
    public function getPalavraChaves()
    {
        return $this->palavraChaves;
    }

    /**
     * Set fontes
     *
     * @param string $fontes
     * @return Conteudos
     */
    public function setFontes($fontes)
    {
        $this->fontes = $fontes;

        return $this;
    }

    /**
     * Get fontes
     *
     * @return string 
     */
    public function getFontes()
    {
        return $this->fontes;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Conteudos
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

    /**
     * Set dataCadastro
     *
     * @param \DateTime $dataCadastro
     * @return Conteudos
     */
    public function setDataCadastro()
    {
        $this->dataCadastro = new \DateTime('now');

        return $this;
    }

    /**
     * Get dataCadastro
     *
     * @return \DateTime 
     */
    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }

    /**
     * Set dataAlteracao
     *
     * @param \DateTime $dataAlteracao
     * @ORM\PreUpdate
     * @return Conteudos
     */
    public function setDataAlteracao()
    {
        $this->dataAlteracao = new \DateTime('now');

        return $this;
    }

    /**
     * Get dataAlteracao
     *
     * @return \DateTime 
     */
    public function getDataAlteracao()
    {
        return $this->dataAlteracao;
    }

    /**
     * Set views
     *
     * @param integer $views
     * @return Conteudos
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get views
     *
     * @return integer 
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set clicks
     *
     * @param integer $clicks
     * @return Conteudos
     */
    public function setClicks($clicks)
    {
        $this->clicks = $clicks;

        return $this;
    }

    /**
     * Get clicks
     *
     * @return integer 
     */
    public function getClicks()
    {
        return $this->clicks;
    }

    /**
     * Set autor
     *
     * @param string $autor
     * @return Conteudos
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor
     *
     * @return string 
     */
    public function getAutor()
    {
        return $this->autor;
    }
}
