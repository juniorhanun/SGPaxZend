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
        $this->form = 'Pax\Form\MovimentoCaixaForm';
        $this->controller = 'MovimentoCaixa';
        $this->route = 'pax-move-caixa/default';
        $this->service = 'Pax\Service\MovimentoCaixaService';
        $this->entity = 'Pax\Entity\PaxMovimentoCaixa';
        $this->itemPorPaigina = 30;
        $this->orderCampo = "nome";
        $this->orderBy = "asc";
    }

    /**
     * Lista Resultados
     *
     * @return array|ViewModel
     */
    public function indexAction()
    {

        $list = $this->getEm()->getRepository($this->entity)->findAll();

        $debito = $this->getEm()->getRepository($this->entity)->totalDebito();
        $credito = $this->getEm()->getRepository($this->entity)->totalCredito();

        //var_dump($list);die("AssociadosController L 46");

        $page = $this->params()->fromRoute('page');

        $paginator = new Paginator(new ArrayAdapter($list));
        $paginator->setCurrentPageNumber($page)
            ->setDefaultItemCountPerPage($this->itemPorPaigina);

        if ($this->flashMessenger()->hasSuccessMessages()){
            return new ViewModel(array(
                'data' => $paginator, 'page' => $page,
                'success' => $this->flashMessenger()->getSuccessMessages()));
        }

        if ($this->flashMessenger()->hasErrorMessages()){
            return new ViewModel(array(
                'data' => $paginator, 'page' => $page,
                'error' => $this->flashMessenger()->getErrorMessages()));
        }


        return new ViewModel(array(
            'data' => $paginator,
            'page' => $page,
            'debito'=>$debito,
            'credito' => $credito));
    }




}

