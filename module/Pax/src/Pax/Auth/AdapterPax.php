<?php
/**
 * namespace para nosso modulo Pax\Auth
 */

namespace Pax\Auth;

use Pax\Entity\PaxFuncionarios;
use Zend\Authentication\Adapter\AdapterInterface,
    Zend\Authentication\Result;

use Doctrine\ORM\EntityManager;

/**
 * Class Adapter
 * @package Pax\AdapterPax
 * Classe Responsável pela autenticação do usuario no sistema
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 * @package Pax\Auth
 */
class AdapterPax implements AdapterInterface
{
    protected $em;
    protected $login;
    protected $senha;

    /**
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * @return mixed
     */
    public function getLogin() {
        return $this->login;
    }

    /**
     * @param $login
     * @return $this
     */
    public function setLogin($login) {
        $this->login = $login;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSenha() {
        return $this->senha;
    }

    /**
     * @param $senha
     * @return $this
     */
    public function setSenha($senha) {
        $this->senha = $senha;
        return $this;
    }

    /**
     * Performs an authentication attempt
     *
     * @return \Zend\Authentication\Result
     * @throws \Zend\Authentication\Adapter\Exception\ExceptionInterface If authentication cannot be performed
     */
    public function authenticate()
    {
        $repository = $this->em->getRepository("Pax\Entity\PaxFuncionarios");
        $pax = $repository->findByLogin(new PaxFuncionarios(), $this->getLogin(),$this->getSenha());
        //var_dump($pax);die("AdapterPax");

        if($pax)
            return new Result(Result::SUCCESS, $pax,array());
        else
            return new Result(Result::FAILURE_CREDENTIAL_INVALID, null, array("Não foi possivel conectar ao banco \n login ou seja não conferem"));
    }
}