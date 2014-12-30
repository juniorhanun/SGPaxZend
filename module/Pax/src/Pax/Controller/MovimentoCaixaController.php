<?php

namespace Pax\Controller;

use Core\Controller\AbstractController;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Paginator\Adapter\ArrayAdapter;
use Zend\Paginator\Paginator;
use Zend\View\Model\ViewModel;

/**
 * class MovimentoCaixaController
 * Controller Responsavel por manipular os dados da Entidade MovimentoCaixa
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 * @package Pax\Controller
 */
class MovimentoCaixaController extends AbstractController
{

    public function __construct()
    {
        $this->form = 'Pax\Form\AssociadosForm';
        $this->controller = 'pax-associados';
        $this->route = 'pax-associados/default';
        $this->service = 'Pax\Service\AssociadosService';
        $this->entity = 'Pax\Entity\PaxAssociados';
        $this->itemPorPaigina = 30;
        $this->orderCampo = "nome";
        $this->orderBy = "asc";
    }


}

