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

class BannersController extends AbstractController
{

    function __construct()
    {
        $this->form = 'Admin\Form\BannersForm';
        $this->controller = 'banners';
        $this->route = 'admin-banners/default';
        $this->service = 'Admin\Service\BannersService';
        $this->entity = 'Admin\Entity\Banners';
    }


}

