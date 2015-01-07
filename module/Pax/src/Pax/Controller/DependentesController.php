<?php

namespace Pax\Controller;

use Core\Controller\AbstractController;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * class DependetesController
 * Controller Responsavel por manipular os dados da Entidade Dependetes
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */
class DependentesController extends AbstractController
{

    public function __construct()
    {
        $this->form = 'Pax\Form\DependentesForm';
        $this->controller = 'associados';
        $this->route = 'pax-associados/default';
        $this->service = 'Pax\Service\DependentesService';
        $this->entity = 'Pax\Entity\PaxDependentes';
        $this->itemPorPaigina = 20;
        $this->orderCampo = "nome";
    }

    /**
     * Inserir Registro
     */
    public function inserirAction()
    {
        if (is_string($this->form))
            $form = new $this->form;
        else
            $form = $this->form;
        $param = $this->params()->fromRoute('id', 0);
        if($param > 0):
            $form->setData(array("id_associado" => $param));
            //var_dump($form);die;
        endif;

        $request = $this->getRequest();

        if ($request->isPost()){

            $form->setData($request->getPost());

            if ($form->isValid()){

                $service = $this->getServiceLocator()->get($this->service);

                $datas = $request->getPost()->toArray();
                if(!$datas['data_obito']):
                    $datas['data_obito'] = null;
                endif;

                $datas['id_funcionarios'] = $this->getEm()->getRepository('Pax\Entity\PaxFuncionarios')->find(1);
                $id = $datas['id_associado'];
                $datas['id_associado'] = $this->getEm()->getRepository('Pax\Entity\PaxAssociados')->find($datas['id_associado']);

                //var_dump($datas);die("DependentesController L 67");


                if ($service->save($datas)){
                    $this->flashMessenger()->addSuccessMessage('Cadastrado com sucesso!');
                    //var_dump($id);die();
                    // Redireciona para o Página Editar do Controller, com os Dados ja Auterados
                    return $this->redirect()
                        ->toRoute('pax-associados/default',
                            array('controller' => 'associados',
                                'action' => 'dependentes',
                                'id' => $id));
                }else{
                    $this->flashMessenger()->addErrorMessage('Não foi possivel cadastrar! Tente mais tarde.');
                }


                //$this->url('pax-associados/default', array('action' => 'dependentes', 'id' => $entity->getId(),))

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

        return new ViewModel(array('form' => $form));
    }

    /**
     * Método Editar
     * Responsavel por realizar as Alterações nas Entidade
     * @return \Zend\Http\Response|ViewModel
     */
    public function editarAction()
    {
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
                            //var_dump($array['id_associado']->getId());die();
                            //$idAssociado = $array['id_associado']->getId();
                            //var_dump($array);die();
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

                                    if(!$data['data_obito']):
                                        $data['data_obito'] = null;
                                    endif;



                                    // Verifica se foi auterado os dados com sucesso na entidade
                                    if ($service->save($data)){
                                        $this->flashMessenger()->addSuccessMessage('Atualizado com sucesso!');
                                    }else{
                                        $this->flashMessenger()->addErrorMessage('Não foi possivel atualizar! Tente mais tarde.');
                                    }

                                    // Redireciona para o Página Editar do Controller, com os Dados ja Auterados
                                    return $this->redirect()
                                        ->toRoute('pax-associados/default',
                                            array('controller' => 'associados',
                                                'action' => 'dependentes',
                                                'id' => $data['id_associado']));
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
                        return new ViewModel(array('form' => $form, 'id' => $param,'idAssociado' => $idAssociado));
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



}

