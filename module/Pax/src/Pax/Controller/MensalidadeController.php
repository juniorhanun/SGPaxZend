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
        $this->route = 'pax-taxa/default';
        $this->service = 'Pax\Service\MensalidadeService';
        $this->entity = 'Pax\Entity\PaxMensalidade';
        $this->itemPorPaigina = 20;
        $this->campoOrder = "nome";
        $this->order = "ASC";
        $this->campoPesquisa = "status";
        $this->dadoPesquisa = "ATIVO";
    }

    public function indexAction()
    {
        $this->service = 'Pax\Service\GeraMensalidadeService';
        $this->entity = 'Pax\Entity\PaxGeraMensalidade';

        parent::indexAction();
    }


    public function grupoMensalidadeAction()
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
            // Passa os dados para a variavel $data
            $data = $request->getPost()->toArray();
            //var_dump($data);die("MensalidadeController L 87");

            // Verifica se o Formulario e Valido
            if ($form->isValid()){



                $associados = $this->getEm()->getRepository("Pax\Entity\PaxAssociados")->AssociadoMensalidade($data['cobrador']);
                //var_dump($associados);die("MensalidadeController L 91");

                $dados = array();
                $pdf = new FPDF("P", "mm", "A4");
                $pdf->AddPage();
                //$pdf->SetMargins(10, 10, 10);
                $pdf->SetFont('Arial','B',8);
                $linha = 1;
                foreach($associados as $ass):
                    $possicao = 1 + $linha;
                    $service = $this->getServiceLocator()->get($this->service);
                    $dados['id_associados'] = $ass['id'];
                    $dados['cobrador'] = $data['cobrador'];

                    $dados['idFuncionarios'] = 1;
                    $dados['mesReferencia'] = $data['mesReferencia'];
                    $dados['anoReferencia'] = $data['anoReferencia'];
                    $dados['valorMensalidade'] = (($ass['tipoContrato'] * $data['valorCobranca']) / 100);
                    $service->save($dados);
                    $id = $this->getEm()->getRepository($this->entity)->mensalidadeId();

                    //posiciona verticalmente
                    $pdf->SetY($possicao + 28);
                    //posiciona horizontalmente
                    $pdf->SetX(12);
                    //$pdf->Line(70, 48, 70, 23);
                    $pdf->Cell(15,5,$ass['contrato'],0,0,'L');
                    $pdf->Cell(2,5,'/',0,0,'L');
                    $pdf->Cell(15,5,$id[0][1],0,0,'L');
                    //posiciona verticalmente
                    $pdf->SetY($possicao + 45);
                    //posiciona horizontalmente
                    $pdf->SetX(12);
                    //$pdf->Line(70, 48, 70, 23);
                    $pdf->Cell(40,5,utf8_decode($ass['cidadeAsso']),0,0,'L');
                    //posiciona verticalmente
                    $pdf->SetY($possicao + 55);
                    //posiciona horizontalmente
                    $pdf->SetX(12);
                    //$pdf->Line(70, 48, 70, 23);
                    $pdf->Cell(40,5,utf8_decode($ass['serie']),0,0,'L');
                    //posiciona verticalmente
                    $pdf->SetY($possicao + 65);
                    //posiciona horizontalmente
                    $pdf->SetX(12);
                    //$pdf->Line(70, 48, 70, 23);
                    $pdf->Cell(40,5,utf8_decode($dados['valorMensalidade']),0,0,'L');

                    // Dados Clientes
                    //posiciona verticalmente
                    $pdf->SetY($possicao + 37);
                    //posiciona horizontalmente
                    $pdf->SetX(92);
                    //$pdf->Line(70, 48, 70, 23);
                    $pdf->Cell(40,5,utf8_decode($ass['nome']),0,0,'L');
                    //posiciona verticalmente
                    $pdf->SetY($possicao + 43);
                    //posiciona horizontalmente
                    $pdf->SetX(77);
                    //$pdf->Line(70, 48, 70, 23);
                    $pdf->Cell(40,5,utf8_decode($ass['enderecoCobranca']),0,0,'L');
                    //posiciona verticalmente
                    $pdf->SetY($possicao + 55);
                    $pdf->SetX(75);
                    //$pdf->Line(70, 48, 70, 23);
                    $pdf->Cell(50,5,utf8_decode($ass['contrato']),0,0,'L');
                    $pdf->Cell(30,5,utf8_decode($ass['serie']),0,0,'L');
                    $pdf->Cell(20,5,utf8_decode($ass['tipoContrato']),0,0,'L');
                    $pdf->Cell(40,5,utf8_decode($dados['valorMensalidade']),0,0,'L');
                    //posiciona verticalmente
                    $pdf->SetY($possicao + 68);
                    //posiciona horizontalmente
                    $pdf->SetX(92);
                    //$pdf->Line(70, 48, 70, 23);
                    switch($data['mesReferencia']){
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
                    $pdf->Cell(25,5,utf8_decode($mes),0,0,'L');
                    $pdf->Cell(20,5,utf8_decode($data['anoReferencia']),0,0,'L');
                    //posiciona verticalmente
                    $pdf->SetY($possicao + 49);
                    //posiciona horizontalmente
                    $pdf->SetX(72);
                    //$pdf->Line(70, 48, 70, 23);
                    $pdf->Cell(40,5,utf8_decode($ass['cidadeAsso']),0,0,'L');
                    $linha += 65;
                    $linha++;

                endforeach;

                $pdf->Output("arquivo.pdf","D");



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

    public function baixaAction(){

    }

    public function importAction()
    {
        // Pasta onde o arquivo vai ser salvo
        $_UP['pasta'] = './public_html/csv/';

        // Tamanho máximo do arquivo (em Bytes)
        $_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb

        // Array com as extensões permitidas
        $_UP['extensoes'] = array('csv');

        // Array com os tipos de erros de upload do PHP
        $_UP['erros'][0] = 'Não houve erro';
        $_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
        $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
        $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
        $_UP['erros'][4] = 'Não foi feito o upload do arquivo';


        // Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
        if ($_FILES['arquivo']['error'] != 0){
            die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['arquivo']['error']]);
            exit; // Para a execução do script
        }
        // Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar

        // Faz a verificação da extensão do arquivo
        $extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
        if (array_search($extensao, $_UP['extensoes']) === false) {
            echo "Por favor, envie arquivo com a seguinte extensões: csv";
        }
        // Faz a verificação do tamanho do arquivo
        else if ($_UP['tamanho'] < $_FILES['arquivo']['size']){
            echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
        }

        // O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
        else {
            //Modifica o nome do arquivo adicionando data e colocando uma id Unica
            $_FILES['arquivo']['name'];
            $data=date("dmY");
            $resultNome = uniqid($_FILES['name']);
            $nome_final =$data."#".$resultNome.".csv";

            // Depois verifica se é possível mover o arquivo para a pasta escolhida
            if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)){

                //conecta ao banco de dados
                $con = mysql_connect('localhost','root','Linux1009');//padrao localhost e mysql
                if(!$con)
                {
                    die('Erro de conexão:'.mysql_error());
                }
                mysql_select_db/*Nome do banco ->*/("paxvila_pax") or die('Erro de conexão:'.mysql_error()) ;

                // nome do arquivo
                $arquivo = "./public_html/csv/".$nome_final;

                // ponteiro para o arquivo
                $fp = fopen($arquivo, "r");

                //processa os dados do arquivo
                $contador = 0;

                while(($dados = fgetcsv($fp, 0, ";")) !== FALSE)
                {
                    //var_dump($dados);die();
                    $quant_campos = count($dados);
                    if($contador == 0)
                    {
                    }else{
                        for($i = 0; $i < 1; $i++)
                        {
                            $result = mysql_query("SELECT * FROM  pax_mensalidade WHERE id = $dados[0]");
                            if(!$result) {
                                die("Database query failed: " . mysql_error());
                            }
                            while ($row = mysql_fetch_array($result)) {
                                $diferenca = (double)$dados[1] - (double)$row["valor_mensalidade"];
                                $dataPag = date("Y-m-d");
                                mysql_query("UPDATE  pax_mensalidade SET  data_pagamento =  '$dataPag',paga =  '1',valor_pago =  '$dados[1]',
                                            diferenca =  '$diferenca' WHERE  pax_mensalidade.id = $dados[0];");
                            }


                            //echo $query;
                        }

                    }
                    $contador++;
                }

                fclose($fp);
                mysql_close($con);
                // Redireciona para a index do Controller
                return $this->redirect()
                    ->toRoute($this->route, array('controller' => $this->controller,));
            } else {

                // Não foi possível fazer o upload, provavelmente a pasta está incorreta
                echo "Não foi possível enviar o arquivo, tente novamente";
            }
        }
        return new ViewModel();
    }

    public function relatorioAction(){

    }


}

