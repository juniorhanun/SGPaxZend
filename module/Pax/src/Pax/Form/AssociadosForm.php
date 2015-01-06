<?php
/**
 * namespace para nosso modulo Pax\Form
 */
namespace Pax\Form;

use DoctrineModule\Form\Element\ObjectSelect;
use DoctrineModule\Persistence\ObjectManagerAwareInterface;
use Doctrine\Common\Persistence\ObjectManager;


use Zend\Form\Element\Button;
use Zend\Form\Element\Select;
use Zend\Form\Element\Text;
use Zend\Form\Element\Textarea;
use Zend\Form\Form;

class AssociadosForm extends Form implements ObjectManagerAwareInterface
{
    protected $objectManager;

    public function __construct(ObjectManager $objectManager)
    {
        $this->setObjectManager($objectManager);
        parent::__construct(null);
        $this->setAttributes(array(
            'method' => 'POST',
            'role' => 'form'
        ));


        // Select cidade_asso
        $cidade_asso = new Select('cidade_asso');
        $cidade_asso->setLabel('Cidade Associado.:')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'cidade_asso',
            ));
        $cidade_asso->setValueOptions(array(
            'CIDAE DE GOIÁS' => 'CIDAE DE GOIÁS',
            'ITABERAI' => 'ITABERAI',
            'ITAPIRAPUÃ' => 'ITAPIRAPUÃ',
            'MOSSÂMEDES' => 'MOSSÂMEDES'
        ));
        $this->add($cidade_asso);

            //Input nome
            $nome = new Text('nome');
            $nome->setLabel('nome.: ')
                ->setAttributes(array(
                    'maxlength' => 40,
                    'class' => 'form-control',
                    'id' => 'nome',
                    'placeholder' => 'Nome.:',
                ));
            $this->add($nome);

        //Input contrato
        $contrato = new Text('contrato');
        $contrato->setLabel('contrato.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'contrato',
                'placeholder' => 'Contrato.:',
            ));
        $this->add($contrato);

        //Input data_contrato
        $data_contrato = new Text('data_contrato');
        $data_contrato->setLabel('data_contrato.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'data_contrato',
                'placeholder' => 'Data Contrato.:',
                'data-mask' => '99/99/9999'
            ));
        $this->add($data_contrato);

        //Input data_pedido
        $data_pedido = new Text('data_pedido');
        $data_pedido->setLabel('data_pedido.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'data_pedido',
                'placeholder' => 'Data Pedido.:',
                'data-mask' => '99/99/9999'
            ));
        $this->add($data_pedido);

        //Input data_nascimento
        $data_nascimento = new Text('data_nascimento');
        $data_nascimento->setLabel('data_nascimento.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'data_nascimento',
                'placeholder' => 'Data Nascimento.:',
                'data-mask' => '99/99/9999'
            ));
        $this->add($data_nascimento);

        //Input dia_pagemento
        $dia_pagemento = new Text('dia_pagemento');
        $dia_pagemento->setLabel('dia_pagemento.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'dia_pagemento',
                'placeholder' => 'Pagemento.:',
            ));
        $this->add($dia_pagemento);

        //Input serie
        $serie = new Text('serie');
        $serie->setLabel('serie.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'serie',
                'placeholder' => 'Grupo.:',
            ));
        $this->add($serie);

        //Input porcento
        $porcento = new Text('porcento');
        $porcento->setLabel('porcento.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'porcento',
                'placeholder' => 'Porcento.:',
                'data-mask' => '99,99'
            ));
        $this->add($porcento);

        // Select viajem
        $viajem = new Select('viajem');
        $viajem->setLabel('Viajem.:')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'viajem',
            ));
        $viajem->setValueOptions(array(
            'SIM' => 'SIM',
            'NÃO' => 'NÃO'
        ));
        $this->add($viajem);

        //Input estado_civil
        $estado_civil = new Text('estado_civil');
        $estado_civil->setLabel('Etado Civil.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'estado_civil',
                'placeholder' => 'Estado Civil.:',
            ));
        $this->add($estado_civil);

        //Input profissao
        $profissao = new Text('profissao');
        $profissao->setLabel('Profissão.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'profissao',
                'placeholder' => 'Profissão.:',
            ));
        $this->add($profissao);

        //Input religiao
        $religiao = new Text('religiao');
        $religiao->setLabel('Religião.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'religiao',
                'placeholder' => 'Religião.:',
            ));
        $this->add($religiao);

        //Input cep
        $cep = new Text('cep');
        $cep->setLabel('cep.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'cep',
                'placeholder' => 'Cep.:',
                'data-mask' => '99999999'
            ));
        $this->add($cep);

        //Input estado
        $estado = new Text('estado');
        $estado->setLabel('estado.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'estado',
                'placeholder' => 'Estado.:',
            ));
        $this->add($estado);

        //Input cidade
        $cidade = new Text('cidade');
        $cidade->setLabel('cidade.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'cidade',
                'placeholder' => 'Cidade.:',
            ));
        $this->add($cidade);

        //Input bairro
        $bairro = new Text('bairro');
        $bairro->setLabel('bairro.: ')
            ->setAttributes(array(
                'maxlength' => 100,
                'class' => 'form-control',
                'id' => 'bairro',
                'placeholder' => ' Bairro .:',
            ));
        $this->add($bairro);

        //Input endereco
        $endereco = new Text('endereco');
        $endereco->setLabel('Endereco.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'endereco',
                'placeholder' => 'Endereço.:',
            ));
        $this->add($endereco);

        //Input endereco_cobranca
        $endereco_cobranca = new Text('endereco_cobranca');
        $endereco_cobranca->setLabel('endereco_cobranca.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'endereco_cobranca',
                'placeholder' => 'Endereço Cobrança.:',
            ));
        $this->add($endereco_cobranca);

        //Input celular
        $celular = new Text('celular');
        $celular->setLabel('celular.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'celular',
                'placeholder' => 'Celular.:',
                'data-mask' => '(999) 9999-9999',
            ));
        $this->add($celular);

        //Input telefone
        $telefone = new Text('telefone');
        $telefone->setLabel('telefone.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'telefone',
                'placeholder' => 'Telefone.:',
                'data-mask' => '(999) 9999-9999',
            ));
        $this->add($telefone);

        // Select local
        $local = new Select('local');
        $local->setLabel('Condição.:')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'local',
            ));
        $local->setValueOptions(array(
            'INTERNO' => 'INTERNO',
            'EXTERNO' => 'EXTERNO'
        ));
        $this->add($local);

        //Input pai
        $pai = new Text('pai');
        $pai->setLabel('pai.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'pai',
                'placeholder' => 'Pai.:',
            ));
        $this->add($pai);

        // Select status_pai
        $status_pai = new Select('status_pai');
        $status_pai->setLabel('Condição.:')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'status_pai',
            ));
        $status_pai->setValueOptions(array(
            'VIVO(A)' => 'VIVO(A)',
            'MORTO(A)' => 'MORTO(A)'
        ));
        $this->add($status_pai);

        //Input mae
        $mae = new Text('mae');
        $mae->setLabel('mae.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'mae',
                'placeholder' => 'Mãe.:',
            ));
        $this->add($mae);

        // Select status_mae
        $status_mae = new Select('status_mae');
        $status_mae->setLabel('Condição.:')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'status_mae',
            ));
        $status_mae->setValueOptions(array(
            'VIVO(A)' => 'VIVO(A)',
            'MORTO(A)' => 'MORTO(A)'
        ));
        $this->add($status_mae);

        //Input conjugue
        $conjugue = new Text('conjugue');
        $conjugue->setLabel('conjugue.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'conjugue',
                'placeholder' => 'Conjugue.:',
            ));
        $this->add($conjugue);

        // Select status_conjugue
        $status_conjugue = new Select('status_conjugue');
        $status_conjugue->setLabel('Condição.:')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'status_conjugue',
            ));
        $status_conjugue->setValueOptions(array(
            'VIVO(A)' => 'VIVO(A)',
            'MORTO(A)' => 'MORTO(A)'
        ));
        $this->add($status_conjugue);

        //Input cpf
        $cpf = new Text('cpf');
        $cpf->setLabel('cpf.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'cpf',
                'placeholder' => 'Cpf.:',
                'data-mask' => '999.999.999-99'
            ));
        $this->add($cpf);

        //Input rg
        $rg = new Text('rg');
        $rg->setLabel('rg.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'rg',
                'placeholder' => 'Rg.:',
            ));
        $this->add($rg);

        //Input translado
        $translado = new Text('translado');
        $translado->setLabel('translado.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'translado',
                'placeholder' => 'Translado.:',
            ));
        $this->add($translado);

        $vendedor = new ObjectSelect('vendedor');
        $vendedor->setLabel('Vendedor')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'vendedor',))
            ->setOptions(array(
                'object_manager' => $this->getObjectManager(),
                'target_class'   => 'Pax\Entity\PaxFuncionarios',
                'property'       => 'nome',
                'empty_option'   => '--Selecione--',
                'is_method'      => true,
                'find_method'    => array(
                    'name'   => 'findBy',
                    'params' => array(
                        'criteria' => array(),
                        'orderBy'  => array('nome' => 'ASC'),
                    ),
                ),
            ));
        $this->add($vendedor);

        // Select tipo_contrato
        $tipo_contrato = new Select('tipo_contrato');
        $tipo_contrato->setLabel('Condição.:')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'tipo_contrato',
            ));
        $tipo_contrato->setValueOptions(array(
            '2' => '2%',
            '2,5' => '2,5%',
            '3' => '3%',
            '3,5' => '3,5%',
            '4' => '4%',
            '4,5' => '4,5%',
            '5' => '5%',
            '5,5' => '5,5%',
            '6' => '6%',
            '7' => '7%',

        ));
        $this->add($tipo_contrato);

        //Input nome_sogra
        $nome_sogra = new Text('nome_sogra');
        $nome_sogra->setLabel('nome_sogra.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'nome_sogra',
                'placeholder' => 'Nome Sogra.:',
            ));
        $this->add($nome_sogra);

        // Select status_sogra
        $status_sogra = new Select('status_sogra');
        $status_sogra->setLabel('Condição.:')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'status_sogra',
            ));
        $status_sogra->setValueOptions(array(
            'VIVO(A)' => 'VIVO(A)',
            'MORTO(A)' => 'MORTO(A)'
        ));
        $this->add($status_sogra);

        //Input nome_sogro
        $nome_sogro = new Text('nome_sogro');
        $nome_sogro->setLabel('nome_sogro.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'nome_sogro',
                'placeholder' => 'Nome Sogro.:',
            ));
        $this->add($nome_sogro);

        // Select status_sogro
        $status_sogro = new Select('status_sogro');
        $status_sogro->setLabel('Condição.:')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'status_sogro',
            ));
        $status_sogro->setValueOptions(array(
            'VIVO(A)' => 'VIVO(A)',
            'MORTO(A)' => 'MORTO(A)'
        ));
        $this->add($status_sogro);

        //Input observacao
        $observacao = new Textarea('observacao');
        $observacao->setLabel('observacao.: ')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'observacao',
                'placeholder' => 'Observação.:',
            ));
        $this->add($observacao);

        //Input motivo_cancelamento
        $motivo_cancelamento = new Textarea('motivo_cancelamento');
        $motivo_cancelamento->setLabel('motivo_cancelamento.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => 'motivo_cancelamento',
                'placeholder' => 'Motivo Cancelamento.:',
            ));
        $this->add($motivo_cancelamento);

        // Select tipo_caixao
        $tipo_caixao = new Select('tipo_caixao');
        $tipo_caixao->setLabel('Tipo Caixão.:')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'tipo_caixao',
            ));
        $tipo_caixao->setValueOptions(array(
            '0' => '0',
            '1' => '1',
            '2' => '2',
            '3' => '3'
        ));
        $this->add($tipo_caixao);

        //Botao submit
        $button = new Button('submit');
        $button->setLabel('Enviar')
            ->setAttributes(array(
                'type' => 'submit',
                'class' => 'btn btn-success'
            ));
        $this->add($button);

        $this->setInputFilter(new AssociadosFilter($vendedor->getValueOptions()));


    }

    /**
     * Set the object manager
     *
     * @param ObjectManager $objectManager
     */
    public function setObjectManager(ObjectManager $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
     * Get the object manager
     *
     * @return ObjectManager
     */
    public function getObjectManager()
    {
        return $this->objectManager;
    }

}