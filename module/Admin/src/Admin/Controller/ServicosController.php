<?php

/**
 * namespace para nosso modulo Admin\Controller
 */
namespace Admin\Controller;


use Core\Controller\AbstractController;

/**
 * class AdminController
 * Controller Responsavel por manipular os dados da Entidade Administradores
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */
class ServicosController extends AbstractController
{

    function __construct()
    {
        $this->form = 'Admin\Form\ServicosForm';
        $this->controller = 'servicos';
        $this->route = 'admin-servicos/default';
        $this->service = 'Admin\Service\ServicosService';
        $this->entity = 'Admin\Entity\Servicos';
    }

    public function inserirAction(){

        $this->form = $this->getServiceLocator()->get($this->form);

        return parent::inserirAction();
    }

    public function editarAction()
    {
        $this->form = $this->getServiceLocator()->get($this->form);

        return parent::editarAction();
    }


}

