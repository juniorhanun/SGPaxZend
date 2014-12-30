<?php
/**
 * namespace para nosso modulo Admin\Form
 */

namespace Admin\Form;

use Zend\Filter\StringTrim;
use Zend\Filter\StripTags;
use Zend\InputFilter\Input;
use Zend\InputFilter\InputFilter;
use Zend\Validator\NotEmpty;


/**
 * class AdminFilter
 * Filtro da classe AdminForm
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */

class AdminFilter extends InputFilter
{
    public function __construct()
    {
        $nome = new Input('nome');
        $nome->setRequired(true)
            ->getFilterChain()
            ->attach(new StringTrim())
            ->attach(new StripTags());
        $nome->getValidatorChain()->attach(new NotEmpty());
        $this->add($nome);
    }

} 