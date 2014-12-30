<?php
/**
 * namespace para nosso modulo Pax\Form
 */
namespace Pax\Form;


use Zend\Form\Element\Button;
use Zend\Form\Element\Password;
use Zend\Form\Element\Select;
use Zend\Form\Element\Text;
use Zend\Form\Form;

class FuncionariosForm extends Form
{
    public function __construct()
    {
        parent::__construct(null);
        $this->setAttributes(array(
            'method' => 'POST',
            'role' => 'form'
        ));
        //$this->setInputFilter(new FuncionariosFilter());

        //Input nome
        $nome = new Text('nome');
        $nome->setLabel('nome.: ')
        ->setAttributes(array(
            'maxlength' => 40,
            'class' => 'form-control',
            'id' => 'nome',
            'placeholder' => 'nome.:',
        ));
        $this->add($nome);

        //Input login
        $login = new Text('login');
        $login->setLabel('login.: ')
        ->setAttributes(array(
            'maxlength' => 40,
            'class' => 'form-control',
            'id' => 'login',
            'placeholder' => 'login.:',
        ));
        $this->add($login);

        //Input senha
        $senha = new Password('senha');
        $senha->setLabel('senha.: ')
        ->setAttributes(array(
            'maxlength' => 40,
            'class' => 'form-control',
            'id' => 'senha',
            'placeholder' => 'senha.:',
        ));
        $this->add($senha);

        //Input cep
        $cep = new Text('cep');
        $cep->setLabel('cep.: ')
        ->setAttributes(array(
            'maxlength' => 40,
            'class' => 'form-control',
            'id' => 'cep',
            'placeholder' => 'cep.:',
        ));
        $this->add($cep);

        //Input estado
        $estado = new Text('estado');
        $estado->setLabel('estado.: ')
        ->setAttributes(array(
            'maxlength' => 40,
            'class' => 'form-control',
            'id' => 'estado',
            'placeholder' => 'estado.:',
        ));
        $this->add($estado);

        //Input cidade
        $cidade = new Text('cidade');
        $cidade->setLabel('cidade.: ')
        ->setAttributes(array(
            'maxlength' => 40,
            'class' => 'form-control',
            'id' => 'cidade',
            'placeholder' => 'cidade.:',
        ));
        $this->add($cidade);

        //Input endereco
        $endereco = new Text('endereco');
        $endereco->setLabel('endereco.: ')
        ->setAttributes(array(
            'maxlength' => 40,
            'class' => 'form-control',
            'id' => 'endereco',
            'placeholder' => 'endereco.:',
        ));
        $this->add($endereco);

        //Input rg
        $rg = new Text('rg');
        $rg->setLabel('rg.: ')
        ->setAttributes(array(
            'maxlength' => 40,
            'class' => 'form-control',
            'id' => 'rg',
            'placeholder' => 'rg.:',
        ));
        $this->add($rg);

        //Input cpf
        $cpf = new Text('cpf');
        $cpf->setLabel('cpf.: ')
        ->setAttributes(array(
            'maxlength' => 40,
            'class' => 'form-control',
            'id' => 'cpf',
            'placeholder' => 'cpf.:',
            'data-mask' => '999.999.999-99'
        ));
        $this->add($cpf);

        //Input comissao
        $comissao = new Text('comissao');
        $comissao->setLabel('comissao.: ')
        ->setAttributes(array(
            'maxlength' => 40,
            'class' => 'form-control',
            'id' => 'comissao',
            'placeholder' => 'comissao.:',
        ));
        $this->add($comissao);

        //Input data_adm
        $data_adm = new Text('data_adm');
        $data_adm->setLabel('Entre com o Data admissão.: ')
            ->setAttributes(array(
                'maxlength' => 45,
                'class' => 'form-control textUpper',
                'id' => 'data_adm',
                'placeholder' => 'Entre com o Data admissão.:',
                'data-mask' => '99/99/9999'

            ));
        $this->add($data_adm);

        // Select status
        $status = new Select('status');
        $status->setLabel('Condição.:')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'status',
            ));
        $status->setValueOptions(array(
            'ATIVO' => 'ATIVO',
            'DESATIVADO' => 'DESATIVADO'
        ));
        $this->add($status);



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