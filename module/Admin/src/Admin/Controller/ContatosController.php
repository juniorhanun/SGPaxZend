<?php

/**
 * namespace para nosso modulo Admin\Controller
 */
namespace Admin\Controller;

use Core\Controller\AbstractController;

/**
 * class ContatosController
 * Controller Responsavel por manipular os dados da Entidade Contatos
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */

class ContatosController extends AbstractController
{

    function __construct()
    {
        $this->form = 'Admin\Form\ContatosForm';
        $this->controller = 'contatos';
        $this->route = 'admin-contatos/default';
        //$this->service = 'Admin\Service\ContatosService';
        $this->entity = 'Admin\Entity\AdminContatos';
    }


}

