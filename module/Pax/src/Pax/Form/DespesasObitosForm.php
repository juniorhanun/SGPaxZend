<?php
/**
 * Created by PhpStorm.
 * User: hanunjunior
 * Date: 19/05/14
 * Time: 17:01
 */

namespace Pax\Form;


use Zend\Form\Element\Button;
use Zend\Form\Element\Text;
use Zend\Form\Form;

class DespesasObitosForm extends Form
{
    public function __construct()
    {
        parent::__construct(null);
        $this->setAttributes(array(
            'method' => 'POST',
            'role' => 'form'
        ));
        //$this->setInputFilter(new FuncionariosFilter());

        //Input cod_obitos
        $cod_obitos = new Text('cod_obitos');
        $cod_obitos->setLabel('Cód Obitos.: ')
        ->setAttributes(array(
        'maxlength' => 40,
        'class' => 'form-control',
        'id' => 'cod_obitos',
        'readonly' => 'readonly',
    ));
        $this->add($cod_obitos);

        //Input sepulta
        $sepulta = new Text('sepulta');
        $sepulta->setLabel('Entre com o Sepulta.: ')
        ->setAttributes(array(
        'maxlength' => 40,
        'class' => 'form-control',
        'id' => 'sepulta',
        'placeholder' => 'Entre com o Sepulta.:'
    ));
        $this->add($sepulta);

        //Input valor_sep
        $valor_sep = new Text('valor_sep');
        $valor_sep->setLabel('Entre com o da Valor Sepultura.: ')
        ->setAttributes(array(
        'maxlength' => 40,
        'class' => 'form-control',
        'id' => 'valor_sep',
        'placeholder' => 'Entre com o Valor Sepultura.:'
    ));
        $this->add($valor_sep);

        //Input paramento
        $paramento = new Text('paramento');
        $paramento->setLabel('Entre com o Paramento.: ')
        ->setAttributes(array(
        'maxlength' => 40,
        'class' => 'form-control',
        'id' => 'paramento',
        'placeholder' => 'Entre com o Paramento.:'
    ));
        $this->add($paramento);

        //Input valor_par
        $valor_par = new Text('valor_par');
        $valor_par->setLabel('Entre com o Valor do Paramento.: ')
        ->setAttributes(array(
        'maxlength' => 40,
        'class' => 'form-control',
        'id' => 'valor_par',
        'placeholder' => 'Entre com o Valor do Paramento.:'
    ));
        $this->add($valor_par);

        //Input ornamento
        $ornamento = new Text('ornamento');
        $ornamento->setLabel('Entre com o Ornamento.: ')
        ->setAttributes(array(
        'maxlength' => 40,
        'class' => 'form-control',
        'id' => 'ornamento',
        'placeholder' => 'Entre com o Ornamento.:'
    ));
        $this->add($ornamento);

        //Input valor_orn
        $valor_orn = new Text('valor_orn');
        $valor_orn->setLabel('Entre com o Valor do Ornamento.: ')
        ->setAttributes(array(
        'maxlength' => 40,
        'class' => 'form-control',
        'id' => 'valor_orn',
        'placeholder' => 'Entre com o Valor do Ornamento.:'
    ));
        $this->add($valor_orn);

        //Input velas
        $velas = new Text('velas');
        $velas->setLabel('Entre com o Velas.: ')
        ->setAttributes(array(
        'maxlength' => 40,
        'class' => 'form-control',
        'id' => 'velas',
        'placeholder' => 'Entre com o Velas.:'
    ));
        $this->add($velas);

        //Input valor_vela
        $valor_vela = new Text('valor_vela');
        $valor_vela->setLabel('Entre com o Valor das Velas.: ')
        ->setAttributes(array(
        'maxlength' => 40,
        'class' => 'form-control',
        'id' => 'valor_vela',
        'placeholder' => 'Entre com o Valor das Velas.:'
    ));
        $this->add($valor_vela);

        //Input veu
        $veu = new Text('veu');
        $veu->setLabel('Entre com o Veu.: ')
        ->setAttributes(array(
        'maxlength' => 40,
        'class' => 'form-control',
        'id' => 'veu',
        'placeholder' => 'Entre com o Veu.:'
    ));
        $this->add($veu);

        //Input valor_veu
        $valor_veu = new Text('valor_veu');
        $valor_veu->setLabel('Entre com o Valor do Veu.: ')
        ->setAttributes(array(
        'maxlength' => 40,
        'class' => 'form-control',
        'id' => 'valor_veu',
        'placeholder' => 'Entre com o Valor do Veu.:'
    ));
        $this->add($valor_veu);

        //Input nota_fal
        $nota_fal = new Text('nota_fal');
        $nota_fal->setLabel('Entre com o Nota de Falecimento.: ')
        ->setAttributes(array(
        'maxlength' => 40,
        'class' => 'form-control',
        'id' => 'nota_fal',
        'placeholder' => 'Entre com o Nota de Falecimento.:'
    ));
        $this->add($nota_fal);

        //Input valor_nota
        $valor_nota = new Text('valor_nota');
        $valor_nota->setLabel('Entre com o Valor da Nota de Falecimento.: ')
        ->setAttributes(array(
        'maxlength' => 40,
        'class' => 'form-control',
        'id' => 'valor_nota',
        'placeholder' => 'Entre com o Valor da Nota de Falecimento.:'
    ));
        $this->add($valor_nota);

        //Input valor_ser
        $valor_ser = new Text('valor_ser');
        $valor_ser->setLabel('Entre com o Valor Serviço.: ')
        ->setAttributes(array(
        'maxlength' => 40,
        'class' => 'form-control',
        'id' => 'valor_ser',
        'placeholder' => 'Entre com o Valor Serviço.:'
    ));
        $this->add($valor_ser);



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