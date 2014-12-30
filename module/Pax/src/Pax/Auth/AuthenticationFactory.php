<?php

namespace Pax\Auth;

use Zend\ServiceManager\FactoryInterface,
    Zend\ServiceManager\ServiceLocatorInterface,
    Zend\Authentication\AuthenticationService,
    Zend\Authentication\Storage\Session;
use Pax\Auth\AdapterPax as AuthPax;

/**
 * Class AuthenticationFactory
 * @package Pax\Auth
 */
class AuthenticationFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /**
         * @var $entityManager \Doctrine\ORM\EntityManager
         */
        $entityManager = $serviceLocator->get('Doctrine\ORM\EntityManager');
        return new AuthenticationService(new Session(), new AuthPax($entityManager));
    }
}