<?php
/**
 * namespace para nosso modulo Admin\Auth
 */

namespace Admin\Auth;

use Zend\Authentication\Adapter\AdapterInterface,
    Zend\Authentication\Result;

use Doctrine\ORM\EntityManager;

/**
 * Class Adapter
 * @package Admin\Adapter
 * Classe Responsável pela autenticação do usuario no sistema
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1

 */

class Adapter implements AdapterInterface
{
    protected $em;
    protected $login;
    protected $senha;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function authenticate()
    {
        $repository = $this->em->getRepository("Admin\Entity\Administradores");
        $admin = $repository->findByLogin($this->getLogin(),$this->getSenha());

        if($admin)
            return new Result(Result::SUCCESS, array('admin'=>$admin),array('OK'));
        else
            return new Result(Result::FAILURE_CREDENTIAL_INVALID, null, array());
    }


}