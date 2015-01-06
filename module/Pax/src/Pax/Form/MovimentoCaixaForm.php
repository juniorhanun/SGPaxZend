<?php
/**
 * namespace para nosso modulo Pax\Form
 */

namespace Pax\Form;


use Zend\Form\Element\Button;
use Zend\Form\Element\Select;
use Zend\Form\Element\Text;
use Zend\Form\Form;

class MovimentoCaixaForm extends Form
{
    public function __construct()
    {
        parent::__construct(null);
        $this->setAttributes(array(
            'method' => 'POST',
            'role' => 'form'
        ));
        //$this->setInputFilter(new FuncionariosFilter());

        //Input credor
        $credor = new Text('credor');
        $credor->setLabel('Nome.: ')
            ->setAttributes(array(
                'maxlength' => 45,
                'class' => 'form-control',
                'id' => 'credor',
                'placeholder' => 'Nome.:'
            ));
        $this->add($credor);

        //Input discriminacao
        $discriminacao = new Text('discriminacao');
        $discriminacao->setLabel('Discriminação.: ')
            ->setAttributes(array(
                'maxlength' => 250,
                'class' => 'form-control',
                'id' => 'discriminacao',
                'placeholder' => 'Discriminação.:'
            ));
        $this->add($discriminacao);

        //Input valorLancado
        $valorLancado = new Text('valorLancado');
        $valorLancado->setLabel('Valor Lançado.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'valorLancado',
                'placeholder' => 'Valor Lançado.:'
            ));
        $this->add($valorLancado);

        // Select tipo
        $tipo = new Select('tipo');
        $tipo->setLabel('Tipo.:')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'tipo',
            ));
        $tipo->setValueOptions(array(
            'D' => 'Debito',
            'C' => 'Credito'
        ));
        $this->add($tipo);

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