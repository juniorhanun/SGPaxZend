<?php

namespace Pax\Controller;

use Core\Controller\AbstractController;
use fpdf\FPDF;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Paginator\Adapter\ArrayAdapter;
use Zend\Paginator\Paginator;
use Zend\View\Model\ViewModel;

/**
 * class AssociadosController
 * Controller Responsavel por manipular os dados da Entidade Associados
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 * @package Pax\Controller
 */
class AssociadosController extends AbstractController
{

    public function __construct()
    {
        $this->form = 'Pax\Form\AssociadosForm';
                $this->controller = 'associados';
                $this->route = 'pax-associados/default';
                $this->service = 'Pax\Service\AssociadosService';
                $this->entity = 'Pax\Entity\PaxAssociados';
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
        $id = (int) $this->params()->fromRoute('id', 0);
        if($id > 0){
            $list = $this->getEm()->getRepository($this->entity)->findBy(array('id' => '60'),array($this->orderCampo => $this->orderBy));
        }
        else {
            $list = $this->getEm()->getRepository($this->entity)->findBy(array('status' => 'ATIVO'),array($this->orderCampo => $this->orderBy));
        }

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


                return new ViewModel(array('data' => $paginator, 'page' => $page));
    }

    /**
     * Método Inserir Registro
     * Resposavel por realizar as inclusões nas entidades
     * @return \Zend\Http\Response|ViewModel
     */
    public function inserirAction()
    {
        // Verifica se foi passado um objeto Form, senão ele cria um objeto Form
        $this->form = $this->getServiceLocator()->get($this->form);
        if (is_string($this->form))
            $form = new $this->form;
        else
            $form = $this->form;

        $idFuncionario = $this->identity()['id'];
        $nomeFuncionario = $this->getEm()->getRepository('Pax\Entity\PaxFuncionarios')->findBy(array('id' => 1),array());
        $request = $this->getRequest();

        if ($request->isPost()){

            $form->setData($request->getPost());


            if ($form->isValid()){

                $service = $this->getServiceLocator()->get($this->service);
                $datas = $request->getPost()->toArray();
                $datas['id_funcionarios'] = $this->getEm()->getRepository('Pax\Entity\PaxFuncionarios')->find(1);


                if ($service->save($datas)){

                    $id = $this->getEm()->getRepository($this->entity)->findIdAssociado($datas['nome']);

                    $dependente = array();
                    $dependente['id_associado'] = $id;

                    $serviceDependente = $this->getServiceLocator()->get("Pax\Service\DependentesService");
                    //die("ali");
                    if(!$datas['pai'] == ""){
                        //$dependente['id_associado'] = $id;
                        $dependente['nome'] = $datas['pai'];
                        $dependente['tipo'] = "Pai";
                        $dependente['status'] = $datas["status_pai"];
                        //var_dump($dependente);die();
                        $serviceDependente->save($dependente);
                        //die("pai");

                    }
                    if(!$datas['mae'] == ""){
                        $dependente['nome'] = $datas['mae'];
                        $dependente['tipo'] = "Mae";
                        $dependente['status'] = $datas["status_mae"];
                        $serviceDependente->save($dependente);
                    }
                    if(!$datas['conjugue'] == ""){
                        $dependente['nome'] = $datas['conjugue'];
                        $dependente['tipo'] = "CONJUGUE";
                        $dependente['status'] = $datas["status_conjugue"];
                        $serviceDependente->save($dependente);
                    }
                    if(!$datas['nome_sogra'] == ""){
                        $dependente['nome'] = $datas['nome_sogra'];
                        $dependente['tipo'] = "SOGRA";
                        $dependente['status'] = $datas["status_sogra"];
                        $serviceDependente->save($dependente);
                    }
                    if(!$datas['nome_sogro'] == ""){
                        $dependente['nome'] = $datas['nome_sogro'];
                        $dependente['tipo'] = "SOGRO";
                        $dependente['status'] = $datas["status_sogro"];
                        $serviceDependente->save($dependente);
                    }

                    return $this->redirect()
                        ->toRoute($this->route, array('controller' => "associados", 'action' => 'dependentes','id'=>$id));

                    $this->flashMessenger()->addSuccessMessage('Cadastrado com sucesso');
                }else{
                    $this->flashMessenger()->addErrorMessage('Não foi possivel cadastrar! Tente mais tarde.');
                }

                return $this->redirect()
                    ->toRoute($this->route, array('controller' => $this->controller, 'action' => 'index'));
            }
        }

        if ($this->flashMessenger()->hasSuccessMessages()){
            return new ViewModel(array(
                'form' => $form,
                'success' => $this->flashMessenger()->getSuccessMessages()));
        }

        if ($this->flashMessenger()->hasErrorMessages()){
            return new ViewModel(array(
                'form' => $form,
                'error' => $this->flashMessenger()->getErrorMessages()));
        }

        $this->flashMessenger()->clearMessages();

        return new ViewModel(array('form' => $form,'nomeFuncionario' => $nomeFuncionario));
}

    /**
     * Método Editar
     * Responsavel por realizar as Alterações nas Entidade
     * @return \Zend\Http\Response|ViewModel
     */
    public function editarAction()
    {
        $this->form = $this->getServiceLocator()->get($this->form);
        // Verifica se foi passado um objeto Form, senão ele cria um objeto Form
                if (is_string($this->form))
                    $form = new $this->form;
                else
                    $form = $this->form;

                // Recebe os dados vendo pela Request(POST,GET)
                $request = $this->getRequest();
                // Recebe o Id do Registro
                $param = $this->params()->fromRoute('id', 0);

                // Retorna os dados da entidade atravez da pesquisa do Id
                $repository = $this->getEm()->getRepository($this->entity)->find($param);

                // Verifica se foi retornado dados validos da pesquisa
                if ($repository){

                    $array = array();
                    foreach($repository->toArray() as $key => $value){
                        // Verifica se algum dos dados e do tipo DateTime
                        if ($value instanceof \DateTime)
                            $array[$key] = $value->format('d/m/Y');
                        else
                            $array[$key] = $value;
                    }

                    // Passa os dados para o Formulario
                    $form->setData($array);

                    // Verifica se os dados vieram atravez do Post
                    if ($request->isPost()){

                        // Passa os dados para o Formulario
                        $form->setData($request->getPost());

                        // Verifica o formulario
                        if ($form->isValid()){

                            // Pega a Instancia do Serviço "Entidade"
                            $service = $this->getServiceLocator()->get($this->service);

                            // Passa os dados para a variavel $data
                            $data = $request->getPost()->toArray();

                            // Passa o Id
                            $data['id'] = (int) $param;
                            $data['id_funcionarios'] = $this->getEm()->getRepository('Pax\Entity\PaxFuncionarios')->find(1);

                            // Verifica se foi auterado os dados com sucesso na entidade
                            if ($service->save($data)){
                                $this->flashMessenger()->addSuccessMessage('Atualizado com sucesso,');
                            }else{
                                $this->flashMessenger()->addErrorMessage('Não foi possivel atualizar! Tente mais tarde.');
                            }

                            // Redireciona para o Página Editar do Controller, com os Dados ja Auterados
                            return $this->redirect()
                                ->toRoute($this->route,
                                    array('controller' => $this->controller,
                                        'action' => 'editar', 'id' => $param));
                        }

                    }

                }else{
                    $this->flashMessenger()->addInfoMessage('Registro não foi encontrado!');
                    return $this->redirect()->toRoute($this->route, array('controller' => $this->controller));
                }

                // Verifica se foi retornado alguma mensagem de Sucessos
                if ($this->flashMessenger()->hasSuccessMessages()){
                    return new ViewModel(array(
                        'form' => $form,
                        'success' => $this->flashMessenger()->getSuccessMessages(),
                        'id' => $param
                    ));
                }

                // Verifica se foi retornado alguma mensagem de Error
                if ($this->flashMessenger()->hasErrorMessages()){
                    return new ViewModel(array(
                        'form' => $form,
                        'error' => $this->flashMessenger()->getErrorMessages(),
                        'id' => $param
                    ));
                }

                // Verifica se foi retornado alguma mensagem de Informações
                if ($this->flashMessenger()->hasInfoMessages()){
                    return new ViewModel(array(
                        'form' => $form,
                        'warning' => $this->flashMessenger()->getInfoMessages(),
                        'id' => $param
                    ));
                }

                // Limpa as Mensagens
                $this->flashMessenger()->clearMessages();

                // Instancia o Formulario na View
                return new ViewModel(array('form' => $form, 'id' => $param));
    }

    public function detalhesAction()
    {
        //die("AssocidadosController L 243");
                // filtra id passsado pela url
                $id = (int) $this->params()->fromRoute('id', 0);
                // se id = 0 ou n達o informado redirecione para contatos
                if (!$id) {
                    // adicionar mensagem
                    $this->flashMessenger()->addMessage("Funcionario não encotrado");

                    // redirecionar para action index
                    return $this->redirect()->toRoute('pax-funcionarios');
                }
                try {
                    $list = $this->getEm()->getRepository("Pax\Entity\PaxAssociados")->findBy(array('id' => $id));
                    //var_dump($list);die;
                } catch (\Exception $exc) {
                    // adicionar mensagem
                    $this->flashMessenger()->addErrorMessage($exc->getMessage());

                    // redirecionar para action index
                    return $this->redirect()->toRoute('pax-funcionarios');
                }

                // dados eviados para detalhes.phtml
                return new ViewModel(array('data' => $list));
    }

    public function canceladosAction()
    {
        $list = $this->getEm()->getRepository($this->entity)->findBy(array('status' => 'CANCELADO'),array("nome" => "asc"));
                //var_dump($list);die("list L65");

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


                return new ViewModel(array('data' => $paginator, 'page' => $page));
    }

    public function dependentesAction()
    {
        $list = $this->getEm()->getRepository('Pax\Entity\PaxDependentes')->findBy(array('idAssociado' => $this->params()->fromRoute('id')),array('id' => 'ASC'));
                $associado = $this->getEm()->getRepository($this->entity)->findBy(array('id' => $this->params()->fromRoute('id')));
                return new ViewModel(array('associado' => $associado,'data' => $list));
    }

    public function pesquisasAction()
    {
        $page = $_GET['page']; // get the requested page
                $limit = $_GET['rows']; // get how many rows we want to have into the grid
                $sidx = $_GET['sidx']; // get index row - i.e. user click to sort
                $sord = $_GET['sord']; // get the direction
                $searchTerm = $_GET['searchTerm'];

                $associados = $this->getEm()->getRepository($this->entity)->findByNomeLike($searchTerm);

                $count = count($associados);

                if( $count >0 ) {
                    $total_pages = ceil($count/$limit);
                } else {
                    $total_pages = 0;
                }

                if ($page > $total_pages) $page=$total_pages;
                $start = $limit*$page - $limit; // do not put $limit*($page - 1)

                $response = null;
                @$response->page = $page;
                @$response->total = $total_pages;
                @$response->records = $count;
                $i = 0;
                foreach($associados as $ass):
                    @$response->rows[$i]['id']=$ass['id'];
                    @$response->rows[$i]['nome']=$ass['nome'];
                    @$response->rows[$i]['contrato']=$ass['contrato'];
                    @$response->rows[$i]['cod_associado']=$ass['codAssociado'];
                    //var_dump($response);die;
                    $i++;
                endforeach;
                echo json_encode($response);
                return $this->response;
    }

    public function pesquisaAction()
    {
        $request = $this->getRequest()->getPost()->toArray();
        $nomePesquisa = $request['localizar'];

        /**
         * @var $entityManager \Doctrine\ORM\EntityManager
         */
        $associados = $this->getEm()->getRepository($this->entity)->findByPesquisas($nomePesquisa);

        $list = $this->getEm()->getRepository($this->entity)->findByPesquisas($nomePesquisa);

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


        return new ViewModel(array('data' => $paginator, 'page' => $page));
    }

    public function mensalidadeAction()
    {
        $id = $this->params()->fromRoute('id');
        $anos = $this->getEm()->getRepository('Pax\Entity\PaxMensalidade')->findByAno($id);
        $list = $this->getEm()->getRepository('Pax\Entity\PaxMensalidade')->findBy(array('idAssociado' => $id),array('anoReferencia' => 'DESC'));
        //var_dump($list);die("AssociadosController L 380");
        $associado = $this->getEm()->getRepository($this->entity)->findBy(array('id' => $id));
        return new ViewModel(array('data' => $list,'associado' => $associado,'anos' => $anos));
    }

    public function contratoAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        //var_dump($id);die("AssociadosController L 385");
        $list = $this->getEm()->getRepository($this->entity)->findBy(array('id' => $id));
        $dependente = $this->getEm()->getRepository("Pax\Entity\PaxDependentes")->dependente(array($this->getEm()->getRepository($this->entity)->findBy(array('id' => $id))));
        //var_dump($dependente);die();
        $pdf = new FPDF("P", "mm", "Legal");
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',8);
        /**
         * @var $entity \Pax\Entity\PaxAssociados
         */
        foreach($list as $entity):
            //var_dump($entity->getNome());die();
            //posiciona verticalmente
            $pdf->SetY(82);
            //posiciona horizontalmente
            $pdf->SetX(15);
            $pdf->Cell(100,5,utf8_decode($entity->getNome()),0,0,'L');
            //posiciona verticalmente
            $pdf->SetY(90);
            //posiciona horizontalmente
            $pdf->SetX(20);
            $pdf->Cell(87,5,utf8_decode($entity->getCpf()),0,0,'L');
            $pdf->Cell(75,5,utf8_decode($entity->getSerie()),0,0,'L');
            $pdf->Cell(10,5,utf8_decode($entity->getContrato()),0,0,'L');
            //posiciona verticalmente
            $pdf->SetY(96);
            //posiciona horizontalmente
            $pdf->SetX(33);
            $pdf->Cell(150,5,utf8_decode($entity->getEndereco()),0,0,'L');
            $pdf->Cell(75,5,utf8_decode($entity->getBairro()),0,0,'L');
            //posiciona verticalmente
            $pdf->SetY(145);
            //posiciona horizontalmente
            $pdf->SetX(8);
            $pdf->Cell(150,5,utf8_decode($entity->getObservacao()),0,0,'L');
            //posiciona verticalmente
            $pdf->SetY(165);
            //posiciona horizontalmente
            $pdf->SetX(8);
            $pdf->Cell(150,5,utf8_decode($entity->getTipoContrato()),0,0,'L');
            //posiciona verticalmente
            $pdf->SetY(296);
            //posiciona horizontalmente
            $pdf->SetX(148);
            $pdf->Cell(10,5,utf8_decode($entity->getTranslado()),0,0,'L');
            //posiciona verticalmente
            $pdf->SetY(334);
            //posiciona horizontalmente
            $pdf->SetX(148);
            $pdf->Cell(10,5,"",0,0,'L');
            //posiciona verticalmente
            $pdf->SetY(0);
            //posiciona horizontalmente
            $pdf->SetX(139);
            $pdf->Cell(10,5,utf8_decode($entity->getCidadeAsso()),0,0,'L');
            //posiciona verticalmente
            $pdf->SetY(16);
            //posiciona horizontalmente
            $pdf->SetX(58);
            $pdf->Cell(10,5,utf8_decode($entity->getTranslado()),0,0,'L');
            //posiciona verticalmente
            $pdf->SetY(18);
            //posiciona horizontalmente
            $pdf->SetX(128);
            $pdf->Cell(10,5,utf8_decode($entity->getTranslado()),0,0,'L');
            //posiciona verticalmente
            $pdf->SetY(90);
            //posiciona horizontalmente
            $pdf->SetX(85);
            $pdf->Cell(10,5,utf8_decode($entity->getContrato()),0,0,'L');
            //posiciona verticalmente
            $pdf->SetY(103);
            //posiciona horizontalmente
            $pdf->SetX(105);
            $pdf->Cell(10,5,utf8_decode($entity->getTranslado()),0,0,'L');
            //posiciona verticalmente
            $pdf->SetY(180);
            //posiciona horizontalmente
            $pdf->SetX(55);
            $pdf->Cell(80,5,utf8_decode($entity->getConjugue()),0,0,'L');
            $filhos = "";
            foreach($dependente as $dep):
                /**
                 * @var $dep \Pax\Entity\PaxDependentes
                 */
                $filhos .= $dep->getNome().", ";
            endforeach;
            //posiciona verticalmente
            $pdf->SetY(188);
            //posiciona horizontalmente
            $pdf->SetX(50);
            $pdf->Cell(80,5,utf8_decode($filhos),0,0,'L');
            //posiciona verticalmente
            $pdf->SetY(228);
            //posiciona horizontalmente
            $pdf->SetX(45);
            $pdf->Cell(80,5,utf8_decode($entity->getPai()),0,0,'L');
            //posiciona verticalmente
            $pdf->SetY(236);
            //posiciona horizontalmente
            $pdf->SetX(45);
            $pdf->Cell(80,5,utf8_decode($entity->getMae()),0,0,'L');
            //posiciona verticalmente
            $pdf->SetY(243);
            //posiciona horizontalmente
            $pdf->SetX(45);
            $pdf->Cell(80,5,utf8_decode($entity->getNomeSogro()),0,0,'L');
            //posiciona verticalmente
            $pdf->SetY(252);
            //posiciona horizontalmente
            $pdf->SetX(45);
            $pdf->Cell(80,5,utf8_decode($entity->getNomeSogra()),0,0,'L');
            //posiciona verticalmente
            $pdf->SetY(260);
            //posiciona horizontalmente
            $pdf->SetX(110);
            $pdf->Cell(10,5,date('d'),0,0,'L');
            switch(date('m')){
                case 01: $mes = "Janeiro";break;
                case 02: $mes = "Fevereiro";break;
                case 03: $mes = "Março";break;
                case 04: $mes = "Abril";break;
                case 05: $mes = "Maio";break;
                case 06: $mes = "Junho";break;
                case 07: $mes = "Julho";break;
                case 08: $mes = "Agosto";break;
                case 09: $mes = "Setembro";break;
                case 10: $mes = "Outubro";break;
                case 11: $mes = "Novenbro";break;
                case 12: $mes = "Dezenbro";break;

            }
            $pdf->Cell(40,5,$mes,0,0,'L');
            $pdf->Cell(10,5,date('Y'),0,0,'L');


        endforeach;


        $pdf->Output("contrato.pdf","D");
        //var_dump($list);die("AssociadosController L 387");
        $viewModel = new ViewModel(array('dados' => $list));
        $viewModel->setTerminal(true);
        return $viewModel;
    }

    public function associadoAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        //var_dump($id);die("AssociadosController L 385");
        $list = $this->getEm()->getRepository($this->entity)->findBy(array('id' => '60'),array($this->orderCampo => $this->orderBy));
        var_dump($list);die();
        return new ViewModel();
    }


}

