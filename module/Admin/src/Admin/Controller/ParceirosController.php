<?php
/**
 * namespace para nosso modulo Admin
 */

namespace Admin\Controller;


use Core\Controller\AbstractController;

/**
 * class AdminController
 * Controller Responsavel por manipular os dados da Entidade Parceiros
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */


class ParceirosController extends AbstractController
{

    function __construct()
    {
        $this->form = 'Admin\Form\ParceirosForm';
        $this->controller = 'parceiros';
        $this->route = 'admin-parceiros/default';
        $this->service = 'Admin\Service\ParceirosService';
        $this->entity = 'Admin\Entity\Parceiros';
    }


}

