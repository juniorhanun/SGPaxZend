<?php
/**
 * namespace para nosso modulo Pax\Controller
 */
namespace Pax\Controller;



use Core\Controller\AbstractController;
use Zend\Paginator\Adapter\ArrayAdapter;
use Zend\Paginator\Paginator;
use Zend\View\Model\ViewModel;

/**
 * class FuncionariosController
 * Controller Responsavel por manipular os dados da Entidade Funcionarios
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */
class ObitosController  extends AbstractController
{

    function __construct()
    {
        $this->form = 'Pax\Form\ObitosForm';
        $this->controller = 'obitos';
        $this->route = 'pax-obitos/default';
        $this->service = 'Pax\Service\ObitosService';
        $this->entity = 'Pax\Entity\PaxObitos';
        $this->itemPorPaigina = 30;
        $this->orderCampo = "id";

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

        $request = $this->getRequest();

        if ($request->isPost()){

            $datas = $request->getPost()->toArray();
            $datas['valor_total'] = $datas['valor_urna'] + $datas['diferenca_urna'] + $datas['valor_tran'];
            $form->setData($datas);

            if ($form->isValid()){

                $service = $this->getServiceLocator()->get($this->service);

                $datas['id_funcionarios'] = $this->getEm()->getRepository('Pax\Entity\PaxFuncionarios')->find(1);


                if ($service->save($datas)){
                    $this->flashMessenger()->addSuccessMessage('Cadastrado com sucesso!');
                }else{
                    $this->flashMessenger()->addErrorMessage('Não foi possivel cadastrar! Tente mais tarde.');
                }

                return $this->redirect()
                    ->toRoute($this->route, array('controller' => $this->controller, 'action' => 'inserir'));
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
     * Edita um registro
     */
    public function editarAction()
    {
        if (is_string($this->form))
            $form = new $this->form;
        else
            $form = $this->form;

        $request = $this->getRequest();
        $param = $this->params()->fromRoute('id', 0);

        $repository = $this->getEm()->getRepository($this->entity)->find($param);

        if ($repository){

            $array = array();
            foreach($repository->toArray() as $key => $value){
                if ($value instanceof \DateTime)
                    $array[$key] = $value->format('d/m/Y');
                else
                    $array[$key] = $value;
            }

            $form->setData($array);

            if ($request->isPost()){

                $form->setData($request->getPost());

                if ($form->isValid()){

                    $service = $this->getServiceLocator()->get($this->service);

                    $data = $request->getPost()->toArray();
                    $data['valor_total'] = $data['valor_urna'] + $data['diferenca_urna'] + $data['valor_tran'];
                    $data['id'] = (int) $param;

                    if ($service->save($data)){
                        $this->flashMessenger()->addSuccessMessage('Atualizado com sucesso!');
                    }else{
                        $this->flashMessenger()->addErrorMessage('Não foi possivel atualizar! Tente mais tarde.');
                    }

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

        if ($this->flashMessenger()->hasSuccessMessages()){
            return new ViewModel(array(
                'form' => $form,
                'success' => $this->flashMessenger()->getSuccessMessages(),
                'id' => $param
            ));
        }

        if ($this->flashMessenger()->hasErrorMessages()){
            return new ViewModel(array(
                'form' => $form,
                'error' => $this->flashMessenger()->getErrorMessages(),
                'id' => $param
            ));
        }

        if ($this->flashMessenger()->hasInfoMessages()){
            return new ViewModel(array(
                'form' => $form,
                'warning' => $this->flashMessenger()->getInfoMessages(),
                'id' => $param
            ));
        }

        $this->flashMessenger()->clearMessages();

        return new ViewModel(array('form' => $form, 'id' => $param));
    }


    public function pesquisasAction(){
        $page = $_GET['page']; // get the requested page
        $limit = $_GET['rows']; // get how many rows we want to have into the grid
        $sidx = $_GET['sidx']; // get index row - i.e. user click to sort
        $sord = $_GET['sord']; // get the direction
        $searchTerm = $_GET['searchTerm'];

        $obitus = $this->getEm()->getRepository($this->entity)->findByObitusLike($searchTerm);

        $count = count($obitus);

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
        foreach($obitus as $obitu):
            $response->rows[$i]['id']=$obitu['id'];
            $response->rows[$i]['nome']=$obitu['nome'];
            $response->rows[$i]['contrato']=$obitu['contrato'];
            $i++;
        endforeach;
        echo json_encode($response);
        return $this->response;


    }

    public function pesquisaAction(){
        $request = $this->getRequest()->getPost()->toArray();
        $nomePesquisa = $request['localizar'];

        $list = $this->getEm()->getRepository($this->entity)->findBy(array('nome' =>  $nomePesquisa),array($this->orderCampo => $this->orderBy));

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

    public function detalhesAction()
    {
        // filtra id passsado pela url
        $id = (int) $this->params()->fromRoute('id', 0);
        // se id = 0 ou não informado redirecione para contatos
        if (!$id) {
            // adicionar mensagem
            $this->flashMessenger()->addMessage("Obito não encotrado");

            // redirecionar para action index
            return $this->redirect()->toRoute('pax-obitos');
        }
        try {
            $list = $this->getEm()->getRepository("Pax\Entity\PaxObitos")->findBy(array('id' => $id));
            $despesas = $this->getEm()->getRepository("Pax\Entity\PaxObitosDespesa")->findBy(array('id' => $id));

        } catch (\Exception $exc) {
            // adicionar mensagem
            $this->flashMessenger()->addErrorMessage($exc->getMessage());

            // redirecionar para action index
            return $this->redirect()->toRoute('pax-obitos');
        }

        // dados eviados para detalhes.phtml
        return new ViewModel(array('data' => $list,'despesas' => $despesas));
    }

    public function despesasAction(){
        $this->form = 'Pax\Form\DespesasObitosForm';
        $this->controller = 'obitos';
        $this->route = 'pax-obitos/default';
        $this->service = 'Pax\Service\DespesasObitosService';
        $this->entity = 'Pax\Entity\PaxObitosDespesa';

        if (is_string($this->form))
            $form = new $this->form;
        else
            $form = $this->form;
        $param = $this->params()->fromRoute('id', 0);


        $obitus = $this->getEm()->getRepository("Pax\Entity\PaxObitosDespesa")->findByDespesa($param);
        //
        if(!$obitus):
            $form->setData(array("cod_obitos" => $param));
        else:
            foreach($obitus as $despesa):
                $form->setData(array(
                    "cod_obitos" => $param,
                    "sepulta" => $despesa['sepulta'],
                    "valor_sep" => $despesa['valorSep'],
                    "paramento" => $despesa['paramento'],
                    "valor_par" => $despesa['valorPar'],
                    "ornamento" => $despesa['ornamento'],
                    "valor_orn" => $despesa['valorOrn'],
                    "velas" => $despesa['velas'],
                    "valor_vela" => $despesa['valorVela'],
                    "veu" => $despesa['veu'],
                    "valor_veu" => $despesa['valorVeu'],
                    "nota_fal" => $despesa['notaFal'],
                    "valor_nota" => $despesa['valorNota'],
                    "valor_ser" => $despesa['valorSer'],
                ));
            endforeach;
            $form->setData($obitus);

        endif;
        $request = $this->getRequest();

        if ($request->isPost()){

            $form->setData($request->getPost());
            $id = $request->getPost()->toArray();

            if ($form->isValid()){

                /**
                 * Método responsavel por busca os dados do obitos para pegar os valores passados
                 */
                $valoObitus = $this->getEm()->getRepository("Pax\Entity\PaxObitos")->findByValorTotal($id['cod_obitos']);
                // Soma o valor da urna mais valor translado, para saber o valor total do obito
                $valor = $valoObitus[0]['valorUrna'] + $valoObitus[0]['valorTran'];
                $datas = $request->getPost()->toArray();
                $valorDespesas = $datas['valor_sep'] + $datas['valor_par'] + $datas['valor_orn'] + $datas['valor_vela']
                    + $datas['valor_veu'] + $datas['valor_nota'] + $datas['valor_ser'];
                // Somatori do valor do obito mais despesas
                $valorTotal = $valor + $valorDespesas;
                $servicoObitos = $this->getServiceLocator()->get("Pax\Service\ObitosService");
                $valoObitus[0]['valorTotal'] = (int) $valorTotal;

                // Remove os atributos date.
                unset($valoObitus[0]['dataObito']);
                unset($valoObitus[0]['dataPagamento']);
                unset($valoObitus[0]['dataVelorio']);
                $servicoObitos->save($valoObitus[0]);


                $service = $this->getServiceLocator()->get($this->service);

                $obitus = $this->getEm()->getRepository("Pax\Entity\PaxObitosDespesa")->findByDespesa($valoObitus[0]['id']);
                if($obitus[0]){
                    $datas['id'] = $obitus[0]['id'];
                }


                if ($service->save($datas)){
                    $this->flashMessenger()->addSuccessMessage('Cadastrado com sucesso!');
                }else{
                    $this->flashMessenger()->addErrorMessage('Não foi possivel cadastrar! Tente mais tarde.');
                }

                return $this->redirect()
                    ->toRoute($this->route, array('controller' => $this->controller,));
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




}
