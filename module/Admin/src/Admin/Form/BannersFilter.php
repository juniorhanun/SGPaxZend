<?php
/**
 * namespace para nosso modulo Admin\Form
 */

namespace Admin\Form;
use Zend\Filter\File\RenameUpload;
use Zend\InputFilter\FileInput;
use Zend\InputFilter\InputFilter;
use Zend\Validator\File\MimeType;
use Zend\Validator\File\Size;


/**
 * class BannersFilter
 * Filtro de Validação do Formulario Banners
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */

class BannersFilter extends InputFilter
{
    public function __construct()
    {

        $foto = new FileInput('foto');
        $foto->setRequired(true);
        $foto->getFilterChain()->attach(new RenameUpload(array(
            'target' => './public_html/media/banners/ban_',
            'use_upload_extension' => true,
            'randomize' => true,
        )));
        $foto->getValidatorChain()->attach(new Size(array(
            'max' => substr(ini_get('upload_max_filesize'), 0 , -1).'MB')));
        $foto->getValidatorChain()
            ->attach(new MimeType(array(
                'image/gif',
                'image/jpeg',
                'image/png',
                'enableHeaderCheck' => true
            )));

        $this->add($foto);
        //var_dump($foto);die;

    }

} 