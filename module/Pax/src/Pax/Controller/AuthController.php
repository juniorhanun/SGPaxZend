<?php

namespace Pax\Controller;

use Core\Form\LoginForm;
//use Pax\Auth\AuthenticationFactory;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Pax\Auth\AdapterPax;

class AuthController extends AbstractActionController
{

    public function indexAction()
    {
        $form = new LoginForm();


        if($this->request->isPost()):
            $form->setData($this->request->getPost()->toArray());
            if($form->isValid()):

                $data = $form->getData();

                /**
                 * @var $auth \Zend\Authentication\AuthenticationService
                 * @var $adapter \Pax\Auth\AdapterPax
                 */

                $auth = $this->getServiceLocator()->get('Zend\Authentication\AuthenticationService');
                //$auth = new AuthenticationFactory();
                //var_dump($auth);die;

                $adapter = $auth->getAdapter();
                $adapter->setLogin($data['login'])
                    ->setSenha($data['senha']);
                if($auth->authenticate()->isValid()) :
                    // Redireciona para a index do Controller
                    return $this->redirect()
                        ->toRoute('pax', array('controller' => 'index',));
                endif;

                $mensagem = $auth->authenticate()->getMessages();
                $this->flashMessenger()->addErrorMessage($mensagem[0]);
                // Redireciona para a index do Controller
                return $this->redirect()
                    ->toRoute('pax-auth', array('controller' => 'auth',));

            endif;


        endif;

        return new ViewModel(array('form' => $form));
    }

    public function testeAction()
    {
        //var_dump($this->identity()->toArray()['id']);die;
        var_dump($this->identity());die("C-AuthController-L-59");
    }

    /**
     * Método logoutAction
     * Responsavel por efetuar o logout do sistema
     */
    public function logoutAction()
    {
        /**
         * @var $auth \Zend\Authentication\AuthenticationService
         */

        $auth = $this->getServiceLocator()->get('Zend\Authentication\AuthenticationService');
        $auth->clearIdentity();

        // Redireciona para a auth do Controller
        return $this->redirect()
            ->toRoute('pax-auth', array('controller' => 'auth',));
    }


}
