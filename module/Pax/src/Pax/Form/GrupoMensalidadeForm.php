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
use DoctrineModule\Form\Element\ObjectSelect;
use DoctrineModule\Persistence\ObjectManagerAwareInterface;
use Doctrine\Common\Persistence\ObjectManager;

class GrupoMensalidadeForm extends Form implements ObjectManagerAwareInterface
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

        //Input cobrador
        $cobrador = new ObjectSelect('cobrador');
        $cobrador->setLabel('Vendedor')
            ->setAttributes(array(
                'class' => 'form-control',
                'id' => 'cobrador',))
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
        $this->add($cobrador);

        //Botao submit
        $button = new Button('submit');
        $button->setLabel('Enviar')
            ->setAttributes(array(
                'type' => 'submit',
                'class' => 'btn btn-success'
            ));
        $this->add($button);
        $this->setInputFilter(new MensalidadeFilter($cobrador->getValueOptions()));
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