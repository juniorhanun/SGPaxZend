<?php
/**
 * namespace para nosso modulo Pax\Form
 */
namespace Pax\Form;


use Zend\Form\Element\Button;
use Zend\Form\Element\Text;
use Zend\Form\Element\Textarea;
use Zend\Form\Form;

class UrnasForm extends Form
{
    public function __construct()
    {
        parent::__construct(null);
        $this->setAttributes(array(
            'method' => 'POST',
            'role' => 'form'
        ));

        //Input descricao
        $descricao = new Textarea('descricao');
        $descricao->setLabel('Descrição.: ')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'descricao',
                'placeholder' => 'Descrição.:',
            ));
        $this->add($descricao);

        //Input saldo
        $saldo = new Text('saldo');
        $saldo->setLabel('Saldo da Urnas.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'saldo',
                'placeholder' => 'Saldo da Urnas.:',
            ));
        $this->add($saldo);

        //Input compra
        $compra = new Text('compra');
        $compra->setLabel('Valor de Compra.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'compra',
                'placeholder' => 'Valor de Compra.:',
            ));
        $this->add($compra);

        //Input venda
        $venda = new Text('venda');
        $venda->setLabel('Valor de Venda.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'venda',
                'placeholder' => 'Valor de Venda.:',
            ));
        $this->add($venda);

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