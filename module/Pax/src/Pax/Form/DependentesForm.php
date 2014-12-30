<?php
/**
 * Created by PhpStorm.
 * User: hanunjunior
 * Date: 20/05/14
 * Time: 07:12
 */

namespace Pax\Form;


use Zend\Form\Element\Button;
use Zend\Form\Element\Select;
use Zend\Form\Element\Text;
use Zend\Form\Form;

class DependentesForm extends Form
{
    public function __construct()
    {
        parent::__construct(null);
        $this->setAttributes(array(
            'method' => 'POST',
            'role' => 'form'
        ));
        //$this->setInputFilter(new FuncionariosFilter());


        //Input id
        $id = new Text('id');
        $id->setLabel('Entre com o Id.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'id',
                'placeholder' => 'Entre com o Id.:'
            ));
        $this->add($id);

        //Input id_associado
        $id_associado = new Text('id_associado');
        $id_associado->setLabel('Entre com o Id_associado.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'id_associado',
                'placeholder' => 'Código Associado.:'
            ));
        $this->add($id_associado);

        //Input nome
        $nome = new Text('nome');
        $nome->setLabel('Entre com o Nome.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'nome',
                'placeholder' => 'Nome.:'
            ));
        $this->add($nome);

        //Input cpf
        $cpf = new Text('cpf');
        $cpf->setLabel('Entre com o Cpf.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'cpf',
                'placeholder' => 'Entre com o Cpf.:',
                'data-mask' => '999.999.999-99'
            ));
        $this->add($cpf);

        //Input rg
        $rg = new Text('rg');
        $rg->setLabel('Entre com o Rg.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'rg',
                'placeholder' => 'Entre com o Rg.:'
            ));
        $this->add($rg);

        // Select status
        $status = new Select('status');
        $status->setLabel('Escolha o Status.:')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'status',
            ));
        $status->setValueOptions(array(
            'VIVO(A)' => 'VIVO(A)',
            'MORTO(A)' => 'MORTO(A)'
        ));
        $this->add($status);

        //Input tipo
        $tipo = new Text('tipo');
        $tipo->setLabel('Entre com o Tipo.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'tipo',
                'placeholder' => 'Entre com o Tipo.:'
            ));
        $this->add($tipo);

        //Input data_obito
        $data_obito = new Text('data_obito');
        $data_obito->setLabel('Data Obito.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'data_obito',
                'placeholder' => 'Data Obito.:',
                'data-mask' => '99/99/9999'
            ));
        $this->add($data_obito);

        //Input data_nascimento
        $data_nascimento = new Text('data_nascimento');
        $data_nascimento->setLabel('Data Nascimento.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'data_nascimento',
                'placeholder' => 'Data Nascimento.:',
                'data-mask' => '99/99/9999'
            ));
        $this->add($data_nascimento);



        //Botao submit
        $button = new Button('submit');
        $button->setLabel('Enviar')
            ->setAttributes(array(
                'type' => 'submit',
                'class' => 'btn btn-success'
            ));
        $this->add($button);
    }

} 