<?php

namespace Pax\Controller;

use Pax\Entity\PaxFuncionarios;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{

    public function indexAction()
    {
        /**
         * @var $em \Doctrine\ORM\EntityManager
         */
        /*
        $em = $this->getServiceLocator()->get("Doctrine\ORM\EntityManager");
        $fun = $em->getRepository('Pax\Entity\PaxFuncionarios')
                  ->findByLogin(new PaxFuncionarios(), 'hanunjunior', 'Linux1009');
        var_dump($fun);die;
        */
        //var_dump($this->identity());die("IndexController L 23");
        return new ViewModel();
    }


}

