<?php
/**
 * namespace para nosso modulo Site
 */
namespace Site;

/**
 * Arquivo de configuração do modulo Site
 * Respnsavel por gerenciar as configurações de:
 * Rotas, layout padrão, translator, Doctrine
 * controllers, views, translate, layouts etc.
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */


return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Site\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Site\Controller\Index' => 'Site\Controller\IndexController'
        ),
    ),
    //Configurando qual Layout vai ser o padrão mo modelo
    'module_layout' => array(
        'Site' => 'layout/layout_site.phtml'
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout_site.phtml',
            'error/404'               => __DIR__ . '/../../Core/view/error/404.phtml',
            'error/index'             => __DIR__ . '/../../Core/view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
