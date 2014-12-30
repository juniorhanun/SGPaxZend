<?php
/**
 * namespace para nosso modulo Admin\Form
 */

namespace Admin\Form;
use Zend\Form\Element\Button;
use Zend\Form\Element\Email;
use Zend\Form\Element\File;
use Zend\Form\Element\Text;
use Zend\Form\Element\Textarea;
use Zend\Form\Form;


/**
 * class ConfigForm
 *
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */

class ConfigForm extends Form
{
    public function __construct()
    {
        parent::__construct(null);
        $this->setAttributes(array(
            'method' => 'POST',
            'role' => 'form'
        ));

        // $this->setInputFilter(new AdminFilter());

        // Input Titulo
        $titulo = new Text('titulo');
        $titulo->setLabel('Entre com o Titulo.: ')
            ->setAttributes(array(
                'maxlength' => 15,
                'class' => 'form-control',
                'id' => 'titulo',
                'placeholder' => 'Entre com o Titulo.:',
            ));
        $this->add($titulo);

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

        $palavra_chaves = new Textarea('palavra_chaves');
        $palavra_chaves->setLabel('Entre com o Palavras Chaves.: ')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'palavras_chaves',
                'placeholder' => 'Entre com o Palavras Chaves.:',
            ));
        $this->add($palavra_chaves);

        $descricao = new Textarea('descricao');
        $descricao->setLabel('Entre com a Descrição.: ')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'descricao',
                'placeholder' => 'Entre com o Descriçãos.:',
            ));
        $this->add($descricao);

        // Input email
        $email = new Email('email');
        $email->setLabel('Entre com o seu Email.: ')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'email',
                'placeholder' => 'Entre com o Email.:',
            ));
        $this->add($email);

        // Input Endereço
        $endereco = new Text('endereco');
        $endereco->setLabel('Entre com o Endereço.: ')
            ->setAttributes(array(
                'maxlength' => 200,
                'class' => 'form-control',
                'id' => 'endereco',
                'placeholder' => 'Entre com o Endereço.:',
            ));
        $this->add($endereco);

        $icon = new File('icon');
        $icon->setLabel('Escolha o Icon do Site.: ')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'icon',
                'placeholder' => 'Escolha o Icon do Site.:',
            ));
        $this->add($icon);

        // Input Google Analytics
        $google_analytics = new Textarea('google_analytics');
        $google_analytics->setLabel('Entre com o Google Analytics.: ')
            ->setAttributes(array(
                'maxlength' => 200,
                'class' => 'form-control',
                'id' => 'google_analytics',
                'placeholder' => 'Entre com o Google Analytics.:',
            ));
        $this->add($google_analytics);

        // Input Saudações
        $saudacao = new Textarea('saudacao');
        $saudacao->setLabel('Entre com o Saudações.: ')
            ->setAttributes(array(
                'maxlength' => 200,
                'class' => 'form-control',
                'id' => 'saudacao',
                'placeholder' => 'Entre com o Saudações.:',
            ));
        $this->add($saudacao);

        // Input Google WebMaster
        $google_webmaster = new Textarea('google_webmaster');
        $google_webmaster->setLabel('Entre com o Google WebMaster.: ')
            ->setAttributes(array(
                'maxlength' => 200,
                'class' => 'form-control',
                'id' => 'google_webmaster',
                'placeholder' => 'Entre com o Google WebMaster.:',
            ));
        $this->add($google_webmaster);

        // Input Facebook
        $facebook = new Text('facebook');
        $facebook->setLabel('Entre com o seu Facebook.: ')
            ->setAttributes(array(
                'maxlength' => 100,
                'class' => 'form-control',
                'id' => 'facebook',
                'placeholder' => 'Entre com o seu Facebook.:',
            ));
        $this->add($facebook);

        // Input Twitter
        $twitter = new Text('twitter');
        $twitter->setLabel('Entre com o seu Twitter.: ')
            ->setAttributes(array(
                'maxlength' => 100,
                'class' => 'form-control',
                'id' => 'twitter',
                'placeholder' => 'Entre com o seu Twitter.:',
            ));
        $this->add($twitter);

        // Input Msn
        $msn = new Text('msn');
        $msn->setLabel('Entre com o seu Msn.: ')
            ->setAttributes(array(
                'maxlength' => 100,
                'class' => 'form-control',
                'id' => 'msn',
                'placeholder' => 'Entre com o seu Msn.:',
            ));
        $this->add($msn);

        // Input Google Plus
        $google_plus = new Text('google_plus');
        $google_plus->setLabel('Entre com o seu Google Plus.: ')
            ->setAttributes(array(
                'maxlength' => 100,
                'class' => 'form-control',
                'id' => 'google_plus',
                'placeholder' => 'Entre com o seu Google Plus.:',
            ));
        $this->add($google_plus);

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