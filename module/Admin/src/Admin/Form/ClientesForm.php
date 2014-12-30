<?php
/**
 * namespace para nosso modulo Admin\Form
 */

namespace Admin\Form;
use Zend\Form\Element\Button;
use Zend\Form\Element\Email;
use Zend\Form\Element\Select;
use Zend\Form\Element\Text;
use Zend\Form\Form;


/**
 * class ClientesForm
 * 
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */

class ClientesForm extends Form
{
    public function __construct()
    {
        parent::__construct(null);
        $this->setAttributes(array(
            'method' => 'POST',
            'role' => 'form'
        ));
        //$this->setInputFilter(new AdminFilter());

        //Input nome_fantasia
        $nome_fantasia = new Text('nome_fantasia');
        $nome_fantasia->setLabel('Entre com o Nome Fantasia.: ')
            ->setAttributes(array(
                'maxlength' => 100,
                'class' => 'form-control',
                'id' => 'nome_fantasia',
                'placeholder' => 'Entre com o Nome Fantasia.:'
            ));
        $this->add($nome_fantasia);

        //Input razao_social
        $razao_social = new Text('razao_social');
        $razao_social->setLabel('Entre com o Razão Social.: ')
            ->setAttributes(array(
                'maxlength' => 45,
                'class' => 'form-control',
                'id' => 'razao_social',
                'placeholder' => 'Entre com o Razão Social.:'
            ));
        $this->add($razao_social);

        //Input cpf_cnpj
        $cpf_cnpj = new Text('cpf_cnpj');
        $cpf_cnpj->setLabel('Entre com o Cpf / Cnpj.: ')
            ->setAttributes(array(
                'maxlength' => 45,
                'class' => 'form-control',
                'id' => 'cpf_cnpj',
                'placeholder' => 'Entre com o Cpf / Cnpj.:'
            ));
        $this->add($cpf_cnpj);

        //Input rg_ie
        $rg_ie = new Text('rg_ie');
        $rg_ie->setLabel('Entre com o Rg / Ie.: ')
            ->setAttributes(array(
                'maxlength' => 45,
                'class' => 'form-control',
                'id' => 'rg_ie',
                'placeholder' => 'Entre com o Rg / Ie.:'
            ));
        $this->add($rg_ie);

        //Input site
        $site = new Text('site');
        $site->setLabel('Entre com o Site.: ')
            ->setAttributes(array(
                'maxlength' => 100,
                'class' => 'form-control',
                'id' => 'site',
                'placeholder' => 'Entre com o Site.:'
            ));
        $this->add($site);

        // Input Telefone
        $telefone = new Text('telefone');
        $telefone->setLabel('Entre com o Telefone.: ')
            ->setAttributes(array(
                'maxlength' => 15,
                'class' => 'form-control',
                'id' => 'telefone',
                'placeholder' => 'Entre com o Telefone.:',
                'data-mask' => '(999) 9999-999'
            ));
        $this->add($telefone);

        // Input Celular
        $celular = new Text('celular');
        $celular->setLabel('Entre com o Celular.: ')
            ->setAttributes(array(
                'maxlength' => 15,
                'class' => 'form-control',
                'id' => 'celular',
                'placeholder' => 'Entre com o Celular.:',
                'data-mask' => '(999) 9999-999'
            ));
        $this->add($celular);

        // Select status
        $status = new Select('status');
        $status->setLabel('Escolha o Status.:')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'status',
            ));
        $status->setValueOptions(array(
            '1' => 'Ativado',
            '2' => 'Desativado'
        ));
        $this->add($status);

        // Input email
        $email = new Email('email');
        $email->setLabel('Entre com o seu Email.: ')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'email',
                'placeholder' => 'Entre com o Email.:',
            ));
        $this->add($email);

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