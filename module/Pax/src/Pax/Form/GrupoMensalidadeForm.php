<?php
/**
 * namespace para nosso modulo Pax\Form
 * Created by PhpStorm.
 * User: junior
 * Date: 23/09/14
 * Time: 07:10
 */
namespace Pax\Form;


use Zend\Form\Element\Button;
use Zend\Form\Element\Text;
use Zend\Form\Element\Textarea;
use Zend\Form\Form;

class GrupoMensalidadeForm  extends Form
{
    public function __construct()
    {
        parent::__construct(null);
        $this->setAttributes(array(
            'method' => 'POST',
            'role' => 'form'
        ));

        //Input codInicial
        $codInicial = new Text('codInicial');
        $codInicial->setLabel('codInicial.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'codInicial',
                'placeholder' => 'codInicial.:',
            ));
        $this->add($codInicial);

        //Input codFinal
        $codFinal = new Textarea('codFinal');
        $codFinal->setLabel('codFinal.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'codFinal',
                'placeholder' => 'codFinal.:',
            ));
        $this->add($codFinal);

        //Input mensagem
        $mensagem = new Text('mensagem');
        $mensagem->setLabel('mensagem.: ')
            ->setAttributes(array(
                'maxlength' => 250,
                'class' => 'form-control',
                'id' => 'mensagem',
                'placeholder' => 'mensagem.:',
            ));
        $this->add($mensagem);

        //Input valorCobranca
        $valorCobranca = new Text('valorCobranca');
        $valorCobranca->setLabel('valorCobranca.: ')
            ->setAttributes(array(
                'maxlength' => 250,
                'class' => 'form-control',
                'id' => 'valorCobranca',
                'placeholder' => 'valorCobranca.:',
            ));
        $this->add($valorCobranca);

        //Input mesReferencia
        $mesReferencia = new Text('mesReferencia');
        $mesReferencia->setLabel('mesReferencia.: ')
            ->setAttributes(array(
                'maxlength' => 250,
                'class' => 'form-control',
                'id' => 'mesReferencia',
                'placeholder' => 'mesReferencia.:',
            ));
        $this->add($mesReferencia);

        //Input anoReferencia
        $anoReferencia = new Text('anoReferencia');
        $anoReferencia->setLabel('Ano de Referencia.: ')
            ->setAttributes(array(
                'maxlength' => 250,
                'class' => 'form-control',
                'id' => 'anoReferencia',
                'placeholder' => 'anoReferencia.:',
            ));
        $this->add($anoReferencia);

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