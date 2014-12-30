<?php

/**
 * namespace para nosso modulo Admin\Controller
 */
namespace Admin\Controller;


use Core\Controller\AbstractController;

/**
 * class NewsController
 * Controller Responsavel por manipular os dados da Entidade News
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */


class NewsController extends AbstractController
{

    function __construct()
    {
        $this->form = 'Admin\Form\NewsForm';
        $this->controller = 'news';
        $this->route = 'admin-news/default';
        $this->service = 'Admin\Service\NewsService';
        $this->entity = 'Admin\Entity\News';
    }


}

