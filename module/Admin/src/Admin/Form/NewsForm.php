<?php
/**
 * namespace para nosso modulo Admin\Form
 */

namespace Admin\Form;
use Zend\Form\Element\Button;
use Zend\Form\Element\Email;
use Zend\Form\Element\Text;
use Zend\Form\Form;


/**
 * class NewsForm
 * 
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */

class NewsForm extends Form
{
    public function __construct()
    {
        parent::__construct(null);
        $this->setAttributes(array(
            'method' => 'POST',
            'role' => 'form'
        ));
        //$this->setInputFilter(new AdminFilter());

        //Input nome
        $nome = new Text('nome');
        $nome->setLabel('Entre com o Nome.: ')
            ->setAttributes(array(
                'maxlength' => 100,
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