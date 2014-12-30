<?php

/**
 * namespace para nosso modulo Admin\Controller
 */
namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ArquivosController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }


}

