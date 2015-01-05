<?php

namespace Pax\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class GeraForController extends AbstractActionController
{

    public function indexAction()
    {
        $dbname = 'paxvila_pax';

                        if (!mysql_connect('localhost', 'root', 'Linux1009')) {
                            echo 'Could not connect to mysql';
                            exit;
                        }
                        mysql_select_db($dbname) or die("Can not connect.");

                        $table = "pax_associados";


                        $sql = "SHOW COLUMNS FROM $table";
                        $result = mysql_query($sql);

                        if (!$result) {
                            echo "DB Error, could not list tables\n";
                            echo 'MySQL Error: ' . mysql_error();
                            exit;
                        }
                /*
                        echo "<pre>";
                        while ($row = mysql_fetch_row($result)) {
                            echo "
                        //Input {$row[0]}
                        1{$row[0]} = new Text('{$row[0]}');
                        1{$row[0]}->setLabel('{$row[0]}.: ')
                            ->setAttributes(array(
                                'maxlength' => 40,
                                'class' => 'form-control',
                                'id' => '{$row[0]}',
                                'placeholder' => ' ". ucfirst($row[0]) ." .:',
                            ));
                        1this->add(1{$row[0]});<br>";
                        }
                        echo "</pre><br><br>";
                */
                /*

                        $sql = "SHOW COLUMNS FROM $table";
                        $result = mysql_query($sql);
                        echo "<pre>";
                        while ($row = mysql_fetch_row($result)) {
                            echo "

                            1div class='row'>
                                1div class='form-group'>
                                1label for='inputTelefonePrincipal' class='col-md-2 control-label label_right'>" . ucfirst($row[0]) .".:1/label>
                                1div class='col-lg-4  col-md-4'>
                                    1?php
                                    // renderiza html input
                                    echo 6this->formInput(6form->get('{$row[0]}'));

                                    // renderiza elemento de erro
                                    echo 6this->formElementErrors()
                                        ->setMessageOpenFormat(51small class='text-danger'>5)
                                        ->setMessageSeparatorString(51/small>1br/>1small class='text-danger'>5)
                                        ->setMessageCloseString(51/small>5)
                                        ->render(6form->get('{$row[0]}'));
                                    ?>
                                1/div>
                            1/div>
                        1/div>
                            ";

                        }
                        echo "</pre><br><br><br><br>";*/



                        echo "<pre>";

                        $sql = "SHOW COLUMNS FROM $table";
                        $result = mysql_query($sql);
                        echo "<pre>";
                        while ($row = mysql_fetch_row($result)) {
                            echo "

                            1div class='row'>
                                1div class='form-group'>
                                1label for='inputTelefonePrincipal' class='col-md-2 control-label label_right'>" . ucfirst($row[0]) ." .:1/label>
                                1div class='col-lg-4  col-md-4'>
                                    1?=6entity->get" . ucfirst($row[0]) ."() ?>
                                1/div>
                            1/div>
                        1/div>
                            ";

                        }
                        echo "</pre><br><br><br><br>";die;



                        mysql_free_result($result);
                        return new ViewModel();
    }

    public function cvsAction()
    {
        return new ViewModel();
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
                    var_dump($dados);die();
                    $quant_campos = count($dados);
                    if($contador == 0)
                    {
                    }else{
                        for($i = 0; $i < 1; $i++)
                        {
                            $query = mysql_query("Insert into socios(nome, titulo, estadocivil, datanascimento, profissao, rua, bairro, cidade, estado, cep, fone, celular, fonecontato, proposto, aceito, cpf, rg, dependente, email, tipo) values('".$nomes."','".$titulo."','".$estCivil."','".$dataNasc."','".$profissao."','".$endereco."','".$bairro."','".$cidade."','".$estado."','".$cep."','".$fone."','".$celular."','".$fonecontato."','".$proposto."','".$aceito."','".$cpf."','".$rg."','".$dependencia."','".$email."','".$tipo."')");
                            echo $query;
                        }
                        echo "</tr>";
                    }
                    $contador++;
                }
                fclose($fp);
                mysql_close($con);
            } else {

                // Não foi possível fazer o upload, provavelmente a pasta está incorreta
                echo "Não foi possível enviar o arquivo, tente novamente";
            }
        }
        return new ViewModel();
    }


}

