<?php
/**
 * namespace para nosso modulo Admin
 */

namespace Admin;
use Admin\Auth\Adapter;
use Admin\Form\ServicosForm;
use Admin\Service\AdminService;
use Admin\Service\BannersService;
use Admin\Service\ClientesService;
use Admin\Service\ConfigService;
use Admin\Service\ParceirosService;
use Admin\Service\ServicosService;
use Zend\Authentication\AuthenticationService,
    Zend\Authentication\Storage\Session as SessionStorage;
use Zend\Log\Logger;
use Zend\Log\Writer\FirePhp;
use Zend\ModuleManager\ModuleManager;
use Zend\Mvc\MvcEvent;



/**
 * Arquivo de configuração do modulo Admin
 * Respnsavel por gernciar configurar todo o modulo Admin
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */


class Module
{
    public function onBootstrap($e)
    {
        $e->getApplication()->getEventManager()->getSharedManager()->attach('Zend\Mvc\Controller\AbstractActionController', 'dispatch', function($e) {
            $controller      = $e->getTarget();
            $controllerClass = get_class($controller);
            $moduleNamespace = substr($controllerClass, 0, strpos($controllerClass, '\\'));
            $config          = $e->getApplication()->getServiceManager()->get('config');
            if (isset($config['module_layout'][$moduleNamespace])) {
                $controller->layout($config['module_layout'][$moduleNamespace]);
            }
        }, 100);
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
        
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    /**
     * Resitar os EntityManager dos Serviços
     */
    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'Admin\Service\AdminService' => function($em){
                        return new AdminService($em->get('Doctrine\ORM\EntityManager'));
                    },
                'Admin\Service\BannersService' => function($em){
                        return new BannersService($em->get('Doctrine\ORM\EntityManager'));
                    },
                'Admin\Service\ClientesService' => function($em){
                        return new ClientesService($em->get('Doctrine\ORM\EntityManager'));
                    },
                'Admin\Service\ConfigService' => function($em){
                        return new ConfigService($em->get('Doctrine\ORM\EntityManager'));
                    },
                'Admin\Service\ParceirosService' => function($em){
                        return new ParceirosService($em->get('Doctrine\ORM\EntityManager'));
                    },
                'Admin\Service\ServicosService' => function($em){
                        return new ServicosService($em->get('Doctrine\ORM\EntityManager'));
                    },
                'Admin\Form\ServicosForm' => function($em){
                        return new ServicosForm($em->get('Doctrine\ORM\EntityManager'));
                    },
                'Zend\Log\FirePhp' => function($sm) {
                        $writer_firebug = new FirePhp();
                        $logger = new Logger();
                        $logger->addWriter($writer_firebug);
                        return $logger;
                    },
                'Admin\Auth\Adapter' => function($em){
                        return new Adapter($em->get('Doctrine\ORM\EntityManager'));
                    },
            )
        );
    }

    public function init(ModuleManager $moduleManager)
    {
        $sharedEvents = $moduleManager->getEventManager()->getSharedManager();

        $sharedEvents->attach("Zend\Mvc\Controller\AbstractActionController",
            MvcEvent::EVENT_DISPATCH,
            array($this,'validaAuth'),100);
    }

    public function validaAuth($e)
    {
        $auth = new AuthenticationService;
        $auth->setStorage(new SessionStorage("Admin"));

        $controller = $e->getTarget();
        $matchedRoute = $controller->getEvent()->getRouteMatch()->getMatchedRouteName();

        //echo $matchedRoute;die;
        if(!$auth->hasIdentity() and ($matchedRoute == "/app-admin" OR $matchedRoute == "admin/paginator"))
            return $controller->redirect()->toRoute("admin-auth");
    }




}