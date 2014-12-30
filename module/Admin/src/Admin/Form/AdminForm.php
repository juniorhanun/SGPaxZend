<?php
/**
 * namespace para nosso modulo Admin\Form
 */
namespace Admin\Form;

use Zend\Form\Element\Button;
use Zend\Form\Element\Email;
use Zend\Form\Element\Password;
use Zend\Form\Element\Select;
use Zend\Form\Element\Text;
use Zend\Form\Form;
use Admin\Form\AdminFilter;


/**
 * class AdminForm
 * Formulario de intereção com a Entidade Administradores
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */

class AdminForm extends Form {

    public function __construct()
    {
        parent::__construct(null);
        $this->setAttributes(array(
            'method' => 'POST',
            'role' => 'form'
        ));
        $this->setInputFilter(new AdminFilter());

        //Input nome
        $nome = new Text('nome');
        $nome->setLabel('Entre com o Nome.: ')
        ->setAttributes(array(
                'maxlength' => 45,
                'class' => 'form-control',
                'id' => 'nome',
                'placeholder' => 'Entre com o Nome.:'
            ));
        $this->add($nome);

        //Input login
        $login = new Text('login');
        $login->setLabel('Entre com o Login.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'login',
                'placeholder' => 'Entre com o Login.:',
            ));
        $this->add($login);

        //Input senha
        $senha = new Password('senha');
        $senha->setLabel('Entre com a Senha.: ')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'senha',
                'placeholder' => 'Entre com o Login.:'
            ));
        $this->add($senha);

        //Input Celular
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

        //Input cpf
        $cpf = new Text('cpf');
        $cpf->setLabel('Entre com o Cpf.: ')
            ->setAttributes(array(
                'maxlength' => 15,
                'class' => 'form-control',
                'id' => 'cpf',
                'placeholder' => 'Entre com o Cpf.:',
                'data-mask' => '999.999.999-99'
            ));
        $this->add($cpf);

        //Input Rg
        $rg = new Text('rg');
        $rg->setLabel('Entre com o Rg.: ')
            ->setAttributes(array(
                'maxlength' => 15,
                'class' => 'form-control',
                'id' => 'rg',
                'placeholder' => 'Entre com o Rg.:',
            ));
        $this->add($rg);

        // Select tipo
        $tipo = new Select('tipo');
        $tipo->setLabel('Escolha o Tipo.:')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'tipo',
            ));
        $tipo->setValueOptions(array(
            '1' => 'Administrador',
            '2' => 'Vendedor'
        ));
        $this->add($tipo);

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