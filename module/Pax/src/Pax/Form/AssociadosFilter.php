<?php
namespace Pax\Form;

use Zend\Filter\StringTrim;
use Zend\Filter\StripTags;
use Zend\InputFilter\Input;
use Zend\InputFilter\InputFilter;
use Zend\Validator\InArray;


class AssociadosFilter extends InputFilter
{
    protected $vendedor;
    public function __construct(Array $vendedor = array())
    {
        $this->vendedor = $vendedor;

        $inArray = new InArray();
        $inArray->setOptions(array('haystack' => $this->haystack($this->vendedor)));

        $vendedor = new Input('vendedor');
        $vendedor->setRequired(true)
            ->getFilterChain()->attach(new StripTags())->attach(new StringTrim());
        $vendedor->getValidatorChain()->attach($inArray);
        $this->add($vendedor);
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