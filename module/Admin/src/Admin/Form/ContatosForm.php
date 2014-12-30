<?php
/**
 * namespace para nosso modulo Admin\Form
 */

namespace Admin\Form;
use Zend\Form\Element\Button;
use Zend\Form\Element\Email;
use Zend\Form\Element\Text;
use Zend\Form\Element\Textarea;
use Zend\Form\Form;


/**
 * class ContatosForm
 * Formulario de intereção com a Entidade Contatos
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */

class ContatosForm extends Form
{
    public function __construct()
    {
        parent::__construct(null);
        $this->setAttributes(array(
            'method' => 'POST',
            'role' => 'form'
        ));
        //$this->setInputFilter(new AdminFilter());

        $nome = new Text('nome');
        $nome->setLabel('Entre com o Nome.: ')
            ->setAttributes(array(
                'maxlength' => 45,
                'class' => 'form-control',
                'id' => 'nome',
                'placeholder' => 'Entre com o Nome.:'
            ));
        $this->add($nome);

        // Input email
        $email = new Email('email');
        $email->setLabel('Entre com o seu Email.: ')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'email',
                'placeholder' => 'Entre com o Email.:',
            ));
        $this->add($email);

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

        // Input Assunto
        $assunto = new Text('assunto');
        $assunto->setLabel('Entre com o Assunto.: ')
            ->setAttributes(array(
                'maxlength' => 200,
                'class' => 'form-control',
                'id' => 'assunto',
                'placeholder' => 'Entre com o Assunto.:'
            ));
        $this->add($assunto);

        $conteudo = new Textarea('conteudo');
        $conteudo->setLabel('Entre com o Conteudo.: ')
            ->setAttributes(array(
                'class' => 'form-control ckeditor',
                'id' => 'assunto',
                'placeholder' => 'Entre com o Conteudo.:'
            ));
        $this->add($conteudo);

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