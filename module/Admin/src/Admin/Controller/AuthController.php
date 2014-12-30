<?php

/**
 * namespace para nosso modulo Admin\Controller
 */
namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Authentication\AuthenticationService,
    Zend\Authentication\Storage\Session as SessionStorage;
use Core\Form\LoginForm;


/**
 * class AuthController
 * Responsavel por instanciar o formulario LoginForm
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */
class AuthController extends AbstractActionController
{

    public function indexAction()
    {
        $form = new LoginForm();
        $error = false;

        $request = $this->getRequest();

        if($request->isPost())
        {
            $form->setData($request->getPost());
            if($form->isValid())
            {
                $data = $request->getPost()->toArray();

                // Criando Storage para gravar sessão da authtenticação
                $sessionStorage = new SessionStorage("Admin");

                $auth = new AuthenticationService();
                $auth->setStorage($sessionStorage); // Definindo o SessionStorage para a auth

                $authAdapter = $this->getServiceLocator()->get("Admin\Auth\Adapter");
                $authAdapter->setLogin($data['login']);
                $authAdapter->setSenha($data['senha']);

                $result = $auth->authenticate($authAdapter);

                if($result->isValid())
                {
                    $sessionStorage->write($auth->getIdentity()['admin'],null);
                    return $this->redirect()->toRoute('admin/default',array('controller'=>'index'));
                }
                else
                    $error = true;
            }
        }
        return new ViewModel(array('form'=>$form,'error'=>$error));
    }

    public function logoutAction()
    {
        $auth = new AuthenticationService();
        $auth->setStorage(new SessionStorage("Admin"));
        $auth->clearIdentity();

        return $this->redirect()->toRoute('admin-auth');
    }


}

