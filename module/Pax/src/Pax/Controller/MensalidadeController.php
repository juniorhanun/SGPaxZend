<?php

namespace Pax\Controller;

use Core\Controller\AbstractController;
use fpdf\FPDF;
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


    public function grupoMensalidadeAction()
    {
        /*
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetMargins(10, 10, 10);
        $pdf->SetFont('Arial','B',12);
        //posiciona verticalmente
        $pdf->SetY("1");
        //posiciona horizontalmente
        $pdf->SetX("1");
        //$pdf->Line(70, 48, 70, 23);
        $pdf->Cell(90,10,'Nome',1,0,'L');
        //posiciona verticalmente
        $pdf->SetY("10");
        //posiciona horizontalmente
        $pdf->SetX("1");
        $pdf->Cell(60,20,'Nascimento',0,0,'L');
        $pdf->Cell(40,30,'Departamento',0,1,'C');
        $pdf->Output();
        /*$pdf = new PdfModel();
        $pdf->setOption('filename', 'monthly-report'); // Triggers PDF download, automatically appends ".pdf"
        $pdf->setOption('paperSize', 'a4'); // Defaults to "8x11"
        $pdf->setOption('paperOrientation', 'landscape'); // Defaults to "portrait"

        // To set view variables
        $pdf->setVariables(array(
            'message' => 'Hello'
        ));
        //die();

        return $pdf;*/

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
            // Passa os dados para a variavel $data
            $data = $request->getPost()->toArray();
            //var_dump($data);die("MensalidadeController L 87");

            // Verifica se o Formulario e Valido
            if ($form->isValid()){



                $associados = $this->getEm()->getRepository("Pax\Entity\PaxAssociados")->AssociadoMensalidade($data['cobrador']);
                //var_dump($associados);die("MensalidadeController L 91");

                $dados = array();
                foreach($associados as $ass):
                    $service = $this->getServiceLocator()->get('Pax\Service\MensalidadeService');
                    $dados['id_associados'] = $ass['id'];
                    $dados['cobrador'] = $data['cobrador'];

                    $dados['idFuncionarios'] = 1;
                    $dados['mesReferencia'] = $data['mesReferencia'];
                    $dados['anoReferencia'] = $data['anoReferencia'];
                    $dados['valorMensalidade'] = (($ass['tipoContrato'] * $data['valorCobranca']) / 100);
                    //var_dump($dados);die();

                    $service->save($dados);

                endforeach;


                //$viewModel = new ViewModel(array('dados' => $associados, 'data' => $data));
                //$viewModel->setTerminal(true);
                //return $viewModel;

                //return new ViewModel(array('dados' => $associados, 'data' => $data));

            }
        }

    }

    public function geraTaxaAction(){
        // Verifica se foi passado um objeto Form, senão ele cria um objeto Form
        $this->form = $this->getServiceLocator()->get($this->form);
        if (is_string($this->form))
            $form = new $this->form;
        else
            $form = $this->form;

        // Instancia o formulario na view
        return new ViewModel(array('form' => $form));
    }


}

