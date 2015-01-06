<?php
namespace Pax\Form;

use Zend\Filter\StringTrim;
use Zend\Filter\StripTags;
use Zend\InputFilter\Input;
use Zend\InputFilter\InputFilter;
use Zend\Validator\InArray;
use Zend\Validator\NotEmpty;

class MensalidadeFilter extends InputFilter
{
    protected $cobrador;
    public function __construct(Array $cobrador = array())
    {
        $this->cobrador = $cobrador;

        $inArray = new InArray();
        $inArray->setOptions(array('haystack' => $this->haystack($this->cobrador)));

        $cobrador = new Input('cobrador');
        $cobrador->setRequired(true)
            ->getFilterChain()->attach(new StripTags())->attach(new StringTrim());
        $cobrador->getValidatorChain()->attach($inArray);
        $this->add($cobrador);
    }

    /**
     * @param array $haystack
     *
     * @return array
     */
    public function haystack(Array $haystack = array())
    {
        $array = array();
        foreach($haystack as $value){
            if ($value)
                $array[$value['value']] = $value['label'];
        }


        return array_keys($array);
    }

}