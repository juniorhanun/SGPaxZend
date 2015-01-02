<?php
/**
 * namespace para nosso modulo Pax\Controller
 */
namespace Pax\Controller;

use Core\Controller\AbstractController;
/**
 * class UrnasController
 * Controller Responsavel por manipular os dados da Entidade Urnas
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 * @package Pax\Controller
 */
class MaterialController extends AbstractController
{

    function __construct()
    {
        $this->form = 'Pax\Form\UrnasForm';
        $this->controller = 'material';
        $this->route = 'pax-material/default';
        $this->service = 'Pax\Service\MaterialService';
        $this->entity = 'Pax\Entity\PaxMaterial';
        $this->itemPorPaigina = 30;
        $this->orderCampo = "descricao";
    }


}

