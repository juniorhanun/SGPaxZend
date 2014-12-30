<?php
/**
 * namespace para nosso modulo Admin\Form
 */

namespace Admin\Form;

use DoctrineModule\Form\Element\ObjectSelect;
use DoctrineModule\Persistence\ObjectManagerAwareInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Zend\Form\Element\Button;
use Zend\Form\Element\File;
use Zend\Form\Element\Select;
use Zend\Form\Element\Text;
use Zend\Form\Element\Textarea;
use Zend\Form\Form;


/**
 * class ServicosForm
 * 
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */

class ServicosForm extends Form implements ObjectManagerAwareInterface {

    protected $objectManager;

    public function __construct(ObjectManager $objectManager)
    {
        $this->setObjectManager($objectManager);

        parent::__construct(null);
        $this->setAttributes(array(
            'method' => 'POST',
            'role' => 'form'
        ));
       $this->setInputFilter(new ServicosFilter());

        // Select id_pai
        $id_pai = new ObjectSelect('id_pai');
        $id_pai->setLabel('Escolha o Serviço Pai.:')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'id_pai',
            ))
            ->setOptions(array(
                'object_manager' => $this->getObjectManager(),
                'target_class'   => 'Admin\Entity\Servicos',
                'property'       => 'titulo',
                'empty_option'   => '--Selecione--',
                'is_method'      => true,
                'find_method'    => array(
                    'name'   => 'findBy',
                    'params' => array(
                        'criteria' => array('idPai' => '0'),
                        'orderBy'  => array('titulo' => 'ASC'),
                    ),
                ),
            ));
        $this->add($id_pai);

        // Input titulo
        $titulo = new Text('titulo');
        $titulo->setLabel('Entre com o Titulo do Serviço.: ')
            ->setAttributes(array(
                'maxlength' => 200,
                'class' => 'form-control',
                'id' => 'nome',
                'placeholder' => 'Entre com o Titulo do Serviço.:'
            ));
        $this->add($titulo);

        // Textarea Conteudo
        $conteudo = new Textarea('conteudo');
        $conteudo->setLabel('Entre com o Conteudo.: ')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'palavras_chaves',
                'placeholder' => 'Entre com o Conteudo.:',
            ));
        $this->add($conteudo);

        $descricao = new Textarea('descricao');
        $descricao->setLabel('Entre com o Descrição.: ')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'palavras_chaves',
                'placeholder' => 'Entre com o Descrição.:',
            ));
        $this->add($descricao);

        $palavra_chaves = new Textarea('palavra_chaves');
        $palavra_chaves->setLabel('Entre com o Palavras Chaves.: ')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'palavras_chaves',
                'placeholder' => 'Entre com o Palavras Chaves.:',
            ));
        $this->add($palavra_chaves);

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

        // Input foto
        $foto = new File('foto');
        $foto->setLabel('Escolha o Foto do Serviço.: ')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'foto',
                'placeholder' => 'Escolha o Foto do Serviço.:',
            ));
        $this->add($foto);

        //Botao submit
        $button = new Button('submit');
        $button->setLabel('Enviar')
            ->setAttributes(array(
                'type' => 'submit',
                'class' => 'btn btn-success'
            ));
        $this->add($button);
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