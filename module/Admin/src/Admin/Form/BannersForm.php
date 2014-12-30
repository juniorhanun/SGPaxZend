<?php
/**
 * namespace para nosso modulo Admin\Form
 */

namespace Admin\Form;
use Zend\Form\Element\Button;
use Zend\Form\Element\File;
use Zend\Form\Element\Select;
use Zend\Form\Element\Text;
use Zend\Form\Form;


/**
 * class BannersForm
 * Formulario de intereção com a Entidade Banners
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */

class BannersForm extends Form
{
    public function __construct()
    {
        parent::__construct(null);
        $this->setAttributes(array(
            'method' => 'POST',
            'role' => 'form'
        ));
        $this->setInputFilter(new BannersFilter());

        // Input url
        $url = new Text('url');
        $url->setLabel('Entre com o Endereço do Banner.: ')
            ->setAttributes(array(
                'maxlength' => 150,
                'class' => 'form-control',
                'id' => 'url',
                'placeholder' => 'Entre com o Endereço do Banner.:'
            ));
        $this->add($url);

        // Input foto
        $foto = new File('foto');
        $foto->setLabel('Escolha o Foto do Banners.: ')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'foto',
                'placeholder' => 'Escolha o Foto do Banners.:',
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