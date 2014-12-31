<?php
/**
 * namespace para nosso modulo Pax\Form
 */

namespace Pax\Form;


use Zend\Form\Element\Button;
use Zend\Form\Element\Select;
use Zend\Form\Element\Text;
use Zend\Form\Form;

class ObitosForm extends Form
{
    public function __construct()
    {
        parent::__construct(null);
        $this->setAttributes(array(
            'method' => 'POST',
            'role' => 'form'
        ));
        //$this->setInputFilter(new FuncionariosFilter());


        // Select situacao
        $situacao = new Select('situacao');
        $situacao->setLabel('Escolha o Situação.:')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'situacao',
            ));
        $situacao->setValueOptions(array(
            'ASSOCIADO' => 'ASSOCIADO',
            'PARTICULAR' => 'PARTICULAR',
            'PREFEITURA' => 'PREFEITURA',
        ));
        $this->add($situacao);
        
        //Input codigo_ass
        $codigo_ass = new Text('codigo_ass');
        $codigo_ass->setLabel('Código do Associado.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'codigo_ass',
                'placeholder' => 'Código do Associado.:'
            ));
        $this->add($codigo_ass);

        //Input nome_associado
        $nome_associado = new Text('nome_associado');
        $nome_associado->setLabel('Nome Associado.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'nome_associado',
                'placeholder' => 'Nome.:'
            ));
        $this->add($nome_associado);

        //Input data_obito
        $data_obito = new Text('data_obito');
        $data_obito->setLabel('Data Obito.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'data_obito',
                'placeholder' => 'Data Obito.:',
                'data-mask' => '99/99/9999',
            ));
        $this->add($data_obito);

        //Input nome
        $nome = new Text('nome');
        $nome->setLabel('Nome.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'nome',
                'placeholder' => 'Nome.:'
            ));
        $this->add($nome);

        //Input velorio
        $velorio = new Text('velorio');
        $velorio->setLabel('Local do Velorio.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'velorio',
                'placeholder' => 'Local Velorio.:'
            ));
        $this->add($velorio);

        //Input cidade
        $cidade = new Text('cidade');
        $cidade->setLabel('Cidade do Velorio.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'cidade',
                'placeholder' => 'Cidade do Velorio.:'
            ));
        $this->add($cidade);

        //Input tipo_pagamento
        $tipo_pagamento = new Text('tipo_pagamento');
        $tipo_pagamento->setLabel('Tipo de Pagamento.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'tipo_pagamento',
                'placeholder' => 'tipo de Pagamento.:'
            ));
        $this->add($tipo_pagamento);

        //Input contrato
        $contrato = new Text('contrato');
        $contrato->setLabel('Contrato.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'contrato',
                'placeholder' => 'Contrato.:'
            ));
        $this->add($contrato);

        //Input groupo
        $groupo = new Text('groupo');
        $groupo->setLabel('Groupo.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'groupo',
                'placeholder' => 'Groupo.:'
            ));
        $this->add($groupo);

        //Input translado
        $translado = new Text('translado');
        $translado->setLabel('Translado.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'translado',
                'placeholder' => 'Translado.:'
            ));
        $this->add($translado);

        //Input responsavel
        $responsavel = new Text('responsavel');
        $responsavel->setLabel('Responsavel.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'responsavel',
                'placeholder' => 'Responsavel.:'
            ));
        $this->add($responsavel);

        //Input data_pagamento
        $data_pagamento = new Text('data_pagamento');
        $data_pagamento->setLabel('Data do Pagamento.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'data_pagamento',
                'placeholder' => 'Data do Pagamento.:',
                'data-mask' => '99/99/9999',
            ));
        $this->add($data_pagamento);

        //Input cod_urna
        $cod_urna = new Text('cod_urna');
        $cod_urna->setLabel('Cód da Urna.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'cod_urna',
                'placeholder' => 'Cód da Urna.:'
            ));
        $this->add($cod_urna);

        //Input valor_urna
        $valor_urna = new Text('valor_urna');
        $valor_urna->setLabel('Valor Urna.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'valor_urna',
                'placeholder' => 'Valor Urna.:'
            ));
        $this->add($valor_urna);

        //Input diferenca_urna
        $diferenca_urna = new Text('diferenca_urna');
        $diferenca_urna->setLabel('Diferença de Urna.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'diferenca_urna',
                'placeholder' => 'Diferença de Urna.:'
            ));
        $this->add($diferenca_urna);

        //Input atendente
        $atendente = new Text('atendente');
        $atendente->setLabel('Atendente.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'atendente',
                'placeholder' => 'Atendente.:'
            ));
        $this->add($atendente);

        //Input horario_sepultamento
        $horario_sepultamento = new Text('horario_sepultamento');
        $horario_sepultamento->setLabel('Horario Sepultamento.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'horario_sepultamento',
                'placeholder' => 'Horario Sepultamento.:',
                'data-mask' => '99:99',
            ));
        $this->add($horario_sepultamento);

        //Input valor_total
        $valor_total = new Text('valor_total');
        $valor_total->setLabel('Valor Total.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'valor_total',
                'placeholder' => 'Valor Total.:'
            ));
        $this->add($valor_total);

        //Input descricao
        $descricao = new Text('descricao');
        $descricao->setLabel('Descrição.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'descricao',
                'placeholder' => 'Descrição.:'
            ));
        $this->add($descricao);

        //Input valor_tran
        $valor_tran = new Text('valor_tran');
        $valor_tran->setLabel('Valor Translado.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'valor_tran',
                'placeholder' => 'Valor Translado.:'
            ));
        $this->add($valor_tran);

        //Input data_velorio
        $data_velorio = new Text('data_velorio');
        $data_velorio->setLabel('Data Velorio.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'data_velorio',
                'placeholder' => 'Data Velorio.:',
                'data-mask' => '99/99/9999',
            ));
        $this->add($data_velorio);


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