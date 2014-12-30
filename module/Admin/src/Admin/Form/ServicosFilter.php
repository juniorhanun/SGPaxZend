<?php
/**
 * namespace para nosso modulo Admin\Form
 */

namespace Admin\Form;
use Zend\Filter\StringTrim;
use Zend\Filter\StripTags;
use Zend\InputFilter\Input;
use Zend\InputFilter\InputFilter;
use Zend\Validator\InArray;


/**
 * class ServicosFilter
 * 
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */

class ServicosFilter extends InputFilter
{
    protected $id_pai;

    public function __construct(Array $id_pai = array())
    {
        $this->id_pai = $id_pai;

        $inArray = new InArray();
        $inArray->setOptions(array('haystack' => $this->haystack($this->id_pai)));

        $id_pai = new Input('id_pai');
        $id_pai->setRequired(true)
            ->getFilterChain()->attach(new StripTags())->attach(new StringTrim());
        $id_pai->getValidatorChain()->attach($inArray);
        $this->add($id_pai);
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