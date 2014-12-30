<?php
/**
 * namespace para nosso modulo Pax\Controller
 */
namespace Pax\Controller;



use Core\Controller\AbstractController;
use Zend\View\Model\ViewModel;

/**
 * class FuncionariosController
 * Controller Responsavel por manipular os dados da Entidade Funcionarios
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */
class FuncionariosController extends AbstractController
{

    function __construct()
    {
        $this->form = 'Pax\Form\FuncionariosForm';
        $this->controller = 'pax';
        $this->route = 'pax-funcionarios/default';
        $this->service = 'Pax\Service\FuncionariosService';
        $this->entity = 'Pax\Entity\PaxFuncionarios';
        $this->itemPorPaigina = 20;
        $this->campoOrder = "nome";
        $this->order = "ASC";
        $this->campoPesquisa = "status";
        $this->dadoPesquisa = "ATIVO";
    }

    /* public function editarAction(){
         if($data['senha'] == null){
             unset($data['senha']);
         }
     }*/

    public function detalhesAction()
    {
        // filtra id passsado pela url
        $id = (int) $this->params()->fromRoute('id', 0);
        // se id = 0 ou não informado redirecione para contatos
        if (!$id) {
            // adicionar mensagem
            $this->flashMessenger()->addMessage("Funcionario não encotrado");

            // redirecionar para action index
            return $this->redirect()->toRoute('pax-funcionarios');
        }
        try {
            $list = $this->getEm()->getRepository("Pax\Entity\PaxFuncionarios")->findBy(array('id' => $id));
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


}

