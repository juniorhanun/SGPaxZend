<?php

namespace Pax\Controller;

use Core\Controller\AbstractController;
use fpdf\FPDF;
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

    public function pesquisaAction(){
        // Recebe os dados vendo pela Request(POST,GET)
        $request = $this->getRequest();
        $data = $request->getPost()->toArray();

        //var_dump($data);die();

        $list = $this->getEm()->getRepository($this->entity)->moviData($data['dataInicial'],$data['dataFinal']);
        $debito = $this->getEm()->getRepository($this->entity)->totalDebito();
        $credito = $this->getEm()->getRepository($this->entity)->totalCredito();
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetMargins(10, 10, 10);
        $pdf->SetFont('Arial','B',8);
        // Nome Coluna
        //posiciona verticalmente
        $pdf->SetY(1);
        $pdf->Cell(50,5,'Movimento do Caixa do Periodo.:',0,0,'L');
        $datas = explode('-', $data['dataInicial']);
        $dataInicio = $datas[2] . '/'.$datas[1].'/'.$datas[0];
        $dataInicioP = $datas[2] . '-'.$datas[1].'-'.$datas[0];
        $pdf->Cell(18 ,5,$dataInicio,0,0,'L');
        $pdf->Cell(5,5,'à',0,0,'L');
        $datas = explode('-', $data['dataFinal']);
        $dataFinal = $datas[2] . '/'.$datas[1].'/'.$datas[0];
        $dataFinalP = $datas[2] . '-'.$datas[1].'-'.$datas[0];
        $pdf->Cell(18 ,5,$dataFinal,0,0,'L');


        $pdf->SetY("10");
        //posiciona horizontalmente
        $pdf->SetX("1");
        $pdf->Cell(10,5,'Id.:',0,0,'L');
        $pdf->Cell(70,5,'Nome.:',0,0,'L');
        $pdf->Cell(70,5,'Discriminação.:',0,0,'L');
        $pdf->Cell(20,5,'Valor.:',0,0,'L');
        $pdf->Cell(20,5,'Tipo.:',0,0,'L');
        //$pdf->Line(70, 48, 70, 23);

        // Valore das Colunas
        /**
         * @var $entity \Pax\Entity\PaxMovimentoCaixa
         */
        $linha = 1;
        //$pdf->SetY(10);
        foreach($list as $entity):
            $possicao = 15 + $linha;
            //posiciona verticalmente
            $pdf->SetY($possicao);
            //posiciona horizontalmente
            $pdf->SetX("1");
            $pdf->Cell(10,5,$entity->getId(),0,0,'L');
            //$pdf->SetX(20);
            $pdf->Cell(70,5,$entity->getCredor(),0,0,'L');
            $pdf->Cell(70,5,$entity->getDiscriminacao(),0,0,'L');
            $pdf->Cell(20,5,$entity->getValorLancado(),0,0,'L');
            $pdf->Cell(20,5,($entity->getTipo() == 'D')? 'Debito' : 'Credito',0,0,'L');
            $linha += 5;
            $linha++;
        endforeach;

        $linha = $possicao + 10;
        //posiciona verticalmente
        $pdf->SetY($linha);
        //posiciona horizontalmente
        $pdf->SetX("1");
        $pdf->Cell(15,5,'Debito.:',0,0,'L');
        $pdf->Cell(30,5,$debito[0][1],0,0,'L');
        $pdf->Cell(15,5,'Credito.:',0,0,'L');
        $pdf->Cell(15,5,$credito[0][1],0,0,'L');
        $total = $debito[0][1] - $credito[0][1];
        $pdf->Cell(10,5,'Total.:',0,0,'C');
        $pdf->Cell(15,5,$total,0,0,'C');
        $nome = "Movimento do Caixa_".$dataInicioP.'_'.$dataFinalP.'.pdf';
        //var_dump($nome);die();
        $pdf->Output($nome, "D");
        // To set view variables

        //die();

        return new ViewModel(array('data' => $list) );

    }




}

