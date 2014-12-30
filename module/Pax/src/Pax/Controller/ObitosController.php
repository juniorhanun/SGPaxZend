<?php

namespace Pax\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ObitosController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }


}

