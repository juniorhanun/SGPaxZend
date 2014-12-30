<?php

namespace Pax\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ObitusController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }


}

