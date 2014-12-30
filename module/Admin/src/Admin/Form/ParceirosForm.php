<?php
/**
 * namespace para nosso modulo Admin\Form
 */

namespace Admin\Form;
use Zend\Form\Element\Button;
use Zend\Form\Element\Email;
use Zend\Form\Element\File;
use Zend\Form\Element\Select;
use Zend\Form\Element\Text;
use Zend\Form\Form;


/**
 * class ParceirosForm
 * Formulario de intereção com a Entidade Parceiros
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */

class ParceirosForm extends Form {

    public function __construct()
    {
        parent::__construct(null);
        $this->setAttributes(array(
            'method' => 'POST',
            'role' => 'form'
        ));
        //$this->setInputFilter(new AdminFilter());

        //Input contato
        $contato = new Text('contato');
        $contato->setLabel('Entre com o Nome do Contato.: ')
            ->setAttributes(array(
                'maxlength' => 45,
                'class' => 'form-control',
                'id' => 'contato',
                'placeholder' => 'Entre com o Nome do Contato.:'
            ));
        $this->add($contato);

        // Input email
        // Input email
        $email = new Email('email');
        $email->setLabel('Entre com o seu Email.: ')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'email',
                'placeholder' => 'Entre com o Email.:',
            ));
        $this->add($email);

        //Input Telefone
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

        // Input Links
        $links = new Text('links');
        $links->setLabel('Entre com o Link.: ')
            ->setAttributes(array(
                'maxlength' => 100,
                'class' => 'form-control',
                'id' => 'rg',
                'placeholder' => 'Entre com o Link.:',
            ));
        $this->add($links);
        
        // Input foto
        $foto = new File('foto');
        $foto->setLabel('Escolha o Foto do Parceiro.: ')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'foto',
                'placeholder' => 'Escolha o Foto do Parceiro.:',
            ));
        $this->add($foto);

        // Input Clicks
        $clicks = new Text('clicks');
        $clicks->setLabel('Quantidade de Clicks.: ')
            ->setAttributes(array(
                'maxlength' => 200,
                'class' => 'form-control',
                'id' => 'clicks',
                'placeholder' => 'Quantidade de Clicks.:',
                'readonly' => 'readonly',
            ));
        $this->add($clicks);

        // Input Views
        $views = new Text('views');
        $views->setLabel('Quantidade de Views.: ')
            ->setAttributes(array(
                'maxlength' => 200,
                'class' => 'form-control',
                'id' => 'views',
                'placeholder' => 'Quantidade de Views.:',
                'readonly' => 'readonly',
            ));
        $this->add($views);

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

        // Input Submit
        $button = new Button('submit');
        $button->setLabel('Enviar')
            ->setAttributes(array(
                'type' => 'submit',
                'class' => 'btn btn-success'
            ));
        $this->add($button);
        


    }

} 