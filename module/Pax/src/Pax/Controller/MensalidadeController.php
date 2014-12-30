<?php

namespace Pax\Controller;

use Core\Controller\AbstractController;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class MensalidadeController extends AbstractController
{

    public function __construct()
    {
        $this->form = 'Pax\Form\GrupoMensalidadeForm';
                $this->controller = 'pax';
                $this->route = 'pax-mesanlidade/default';
                $this->service = 'Pax\Service\FuncionariosService';
                $this->entity = 'Pax\Entity\PaxFuncionarios';
                $this->itemPorPaigina = 20;
                $this->campoOrder = "nome";
                $this->order = "ASC";
                $this->campoPesquisa = "status";
                $this->dadoPesquisa = "ATIVO";
    }

    public function indexAction()
    {
        return new ViewModel();
    }

    public function grupoAction()
    {
        // Verifica se foi passado um objeto Form, senão ele cria um objeto Form
                if (is_string($this->form))
                    $form = new $this->form;
                else
                    $form = $this->form;



                // Instancia o formulario na view
                return new ViewModel(array('form' => $form));
    }

    public function grupoMensalidadeAction()
    {

        // Verifica se foi passado um objeto Form, senão ele cria um objeto Form
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

                // Passa os dados para a variavel $data
                $data = $request->getPost()->toArray();
                //var_dump($data);die("MensalidadeController L 53");
                $associados = $this->getEm()->getRepository("Pax\Entity\PaxAssociados")->AssociadoMensalidade($data['codInicial'],$data['codFinal']);
                //var_dump($associados);die("MensalidadeController L 55");

                $dados = array();
                foreach($associados as $ass):
                    $service = $this->getServiceLocator()->get('Pax\Service\MensalidadeService');
                    $dados['idAssociado'] = $ass['id'];
                    $dados['idFuncionarios'] = 1;
                    $dados['mesReferencia'] = $data['mesReferencia'];
                    $dados['anoReferencia'] = $data['anoReferencia'];
                    $dados['valorMensalidade'] = (($ass['tipoContrato'] * $data['valorCobranca']) / 100);

                    $service->save($dados);

                endforeach;

                $viewModel = new ViewModel(array('dados' => $associados, 'data' => $data));
                $viewModel->setTerminal(true);
                return $viewModel;

                //return new ViewModel(array('dados' => $associados, 'data' => $data));

            }
        }

    }


}

