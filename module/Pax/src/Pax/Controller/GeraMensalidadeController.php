<?php

namespace Pax\Controller;

use Core\Controller\AbstractController;
use fpdf\FPDF;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Paginator\Adapter\ArrayAdapter;
use Zend\Paginator\Paginator;
use Zend\View\Model\ViewModel;

/**
 * class GeraMensalidadeController
 * Controller Responsavel por manipular os dados da Entidade GeraMensalidade
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 * @package Pax\Controller
 */
class GeraMensalidadeController extends AbstractController
{

    public function __construct()
    {
        $this->form = 'Pax\Form\GrupoMensalidadeForm';
        $this->controller = 'GeraMensalidade';
        $this->route = 'pax-geraMensalidade/default';
        $this->service = 'Pax\Service\GeraMensalidadeService';
        $this->entity = 'Pax\Entity\PaxGeraMensalidade';
        $this->itemPorPaigina = 30;
        $this->orderCampo = "nome";
        $this->orderBy = "asc";
    }

    public function inserirAction()
    {
        // Verifica se foi passado um objeto Form, senão ele cria um objeto Form
        $this->form = $this->getServiceLocator()->get($this->form);
        if (is_string($this->form))
            $form = new $this->form;
        else
            $form = $this->form;

        // Recebe os dados vendo pela Request(POST,GET)
        $request = $this->getRequest();
        //var_dump($request->getPost()->toArray());die("aqui");

        // Verifica se o Request veio pelo método Post
        if ($request->isPost()){

            // Passa os dados vindo pelo post para o Form
            $form->setData($request->getPost());

            // Verifica se o Formulario e Valido
            if ($form->isValid()){

                // Pega a Instancia do serviço "Entidade"
                $service = $this->getServiceLocator()->get($this->service);
                $datas = $request->getPost()->toArray();
                $datas['id_cobrador'] = $this->getEm()->getRepository('Pax\Entity\PaxFuncionarios')->find($datas['cobrador']);

                // Verifica se foi inserido os dados com sucesso na entidade
                if ($service->save($datas)){
                    $this->flashMessenger()->addSuccessMessage('Cadastrado com sucesso!');
                }else{
                    $this->flashMessenger()->addErrorMessage('Não foi possivel cadastrar! Tente mais tarde.');
                }

                // Redireciona para a index do Controller
                return $this->redirect()
                    ->toRoute($this->route, array('controller' => $this->controller,));
            }

        }

        // Instancia o formulario na view
        return new ViewModel(array('form' => $form));
    }




}

