<?php
namespace Pax;

use Pax\Form\AssociadosForm;
use Pax\Form\GrupoMensalidadeForm;
use Pax\Service\AssociadosService;
use Pax\Service\DependentesService;
use Pax\Service\FuncionariosService;
use Pax\Service\GeraMensalidadeService;
use Pax\Service\MaterialService;
use Pax\Service\MensalidadeService;
use Pax\Service\MovimentoCaixaService;
use Pax\Service\ObitosService;
use Pax\Service\UrnasService;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;


class Module
{

    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);

        /**
         * @var $sharedEvents \Zend\EventManager\SharedEventManager
         * @var $ev \Zend\Mvc\MvcEvent
         * @var $auth \Zend\Authentication\AuthenticationService
         */

        $sharedEvents = $eventManager->getSharedManager();
        $sharedEvents->attach('Zend\Mvc\Controller\AbstractActionController', 'dispatch', function($ev){


            $auth = $ev->getApplication()->getServiceManager()->get('Zend\Authentication\AuthenticationService');

            if($auth->hasIdentity()):
                return;
            endif;


            if(($ev->getRouteMatch()->getParam('controller') == 'Pax\Controller\Auth') && ($ev->getRouteMatch()->getParam('action') == 'index') ):
                //var_dump($ev->getRouteMatch());die("Module Pax deu certo ");
                return;
            endif;

            // Redireciona para a index do Controller
            //var_dump($ev->getTarget()->redirect()->toRoute("sonuser-auth"););die("Module Pax L 39");
            return $ev->getTarget()->redirect()->toRoute("pax-auth");

        }, 99   );
        //var_dump($sharedEvents);die("Module Pax");


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
                'Pax\Service\FuncionariosService' => function($em){
                        return new FuncionariosService($em->get('Doctrine\ORM\EntityManager'));
                    },
                'Pax\Service\AssociadosService' => function($em){
                        return new AssociadosService($em->get('Doctrine\ORM\EntityManager'));
                    },
                'Pax\Form\AssociadosForm' => function($em){
                        return new AssociadosForm($em->get('Doctrine\ORM\EntityManager'));
                    },
                'Pax\Form\GrupoMensalidadeForm' => function($em){
                    return new GrupoMensalidadeForm($em->get('Doctrine\ORM\EntityManager'));
                },
                'Pax\Service\DependentesService' => function($em){
                        return new DependentesService($em->get('Doctrine\ORM\EntityManager'));
                    },
                'Pax\Service\MensalidadeService' => function($em){
                        return new MensalidadeService($em->get('Doctrine\ORM\EntityManager'));
                    },
                'Pax\Service\UrnasService' => function($em){
                    return new UrnasService($em->get('Doctrine\ORM\EntityManager'));
                },
                'Pax\Service\ObitosService' => function($em){
                    return new ObitosService($em->get('Doctrine\ORM\EntityManager'));
                },
                'Pax\Service\MaterialService' => function($em){
                    return new MaterialService($em->get('Doctrine\ORM\EntityManager'));
                },
                'Pax\Service\MovimentoCaixaService' => function($em){
                    return new MovimentoCaixaService($em->get('Doctrine\ORM\EntityManager'));
                },
                'Pax\Service\GeraMensalidadeService' => function($em){
                    return new GeraMensalidadeService($em->get('Doctrine\ORM\EntityManager'));
                },
            ),

        );
    }
}
