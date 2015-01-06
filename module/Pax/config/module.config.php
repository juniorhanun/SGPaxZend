<?php
/**
 * namespace para nosso modulo Pax
 */
namespace Pax;

/**
 * Arquivo de configuração do modulo Pax
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
            'pax' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/app-pax',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Pax\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '[/:action]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
            'pax-associados' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/app-pax/associados',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Pax\Controller',
                        'controller'    => 'Associados',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '[/:action[/:id]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                    'paginator' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '[/page/:page]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'page' => '\d+'
                            ),
                            'defaults' => array(
                                'action' => 'index',
                                'page' => 1
                            )
                        )
                    ),
                    'pesquisa-associado' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '[?sidx/:page]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'page' => '\d+'
                            ),
                            'defaults' => array(
                                'action' => 'index',
                                'page' => 1
                            )
                        )
                    )
                ),
            ),
            'pax-obitos' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/app-pax/obitos',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Pax\Controller',
                        'controller'    => 'Obitos',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '[/:action[/:id]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                    'paginator' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '[/page/:page]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'page' => '\d+'
                            ),
                            'defaults' => array(
                                'action' => 'index',
                                'page' => 1
                            )
                        )
                    ),
                    'pesquisa-associado' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '[?sidx/:page]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'page' => '\d+'
                            ),
                            'defaults' => array(
                                'action' => 'index',
                                'page' => 1
                            )
                        )
                    )
                ),
            ),
            'pax-auth' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'=>'/app-pax/auth',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Pax\Controller',
                        'controller' => 'Auth',
                        'action' => 'index'
                    )
                )
            ),
            'pax-logout' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'=>'/app-pax/logout',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Pax\Controller',
                        'controller' => 'Auth',
                        'action' => 'logout'
                    )
                )
            ),
            'pax-funcionarios' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/app-pax/funcionarios',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Pax\Controller',
                        'controller'    => 'Funcionarios',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '[/:action[/:id]]',
                            'constraints' => array(
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'         => '\d+'
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                    'paginator' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '[/page/:page]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'page' => '\d+'
                            ),
                            'defaults' => array(
                                'action' => 'index',
                                'page' => 1
                            )
                        )
                    )
                ),
            ),
            'pax-geraFor' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/app-pax/geraFor',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Pax\Controller',
                        'controller'    => 'GeraFor',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '[/:action[/:id]]',
                            'constraints' => array(
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'         => '\d+'
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                    'paginator' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '[/page/:page]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'page' => '\d+'
                            ),
                            'defaults' => array(
                                'action' => 'index',
                                'page' => 1
                            )
                        )
                    )
                ),
            ),
            'pax-taxa' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/app-pax/taxa',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Pax\Controller',
                        'controller'    => 'Mensalidade',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '[/:action[/:id]]',
                            'constraints' => array(
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'         => '\d+'
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                    'paginator' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '[/page/:page]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'page' => '\d+'
                            ),
                            'defaults' => array(
                                'action' => 'index',
                                'page' => 1
                            )
                        )
                    )
                ),
            ),
            'pax-notas' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/app-pax/notas',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Pax\Controller',
                        'controller'    => 'Notas',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '[/:action[/:id]]',
                            'constraints' => array(
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'         => '\d+'
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                    'paginator' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '[/page/:page]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'page' => '\d+'
                            ),
                            'defaults' => array(
                                'action' => 'index',
                                'page' => 1
                            )
                        )
                    )
                ),
            ),
            'pax-dependente' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/app-pax/dependente',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Pax\Controller',
                        'controller'    => 'Dependentes',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '[/:action[/:id]]',
                            'constraints' => array(
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'         => '\d+'
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                    'paginator' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '[/page/:page]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'page' => '\d+'
                            ),
                            'defaults' => array(
                                'action' => 'index',
                                'page' => 1
                            )
                        )
                    )
                ),
            ),
            'pax-cancelamento' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/app-pax/cancelamento',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Pax\Controller',
                        'controller'    => 'Cancelamento',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '[/:action[/:id]]',
                            'constraints' => array(
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'         => '\d+'
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                    'paginator' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '[/page/:page]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'page' => '\d+'
                            ),
                            'defaults' => array(
                                'action' => 'index',
                                'page' => 1
                            )
                        )
                    )
                ),
            ),
            'pax-empresas' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/app-pax/empresas',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Pax\Controller',
                        'controller'    => 'Empresas',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '[/:action[/:id]]',
                            'constraints' => array(
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'         => '\d+'
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                    'paginator' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '[/page/:page]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'page' => '\d+'
                            ),
                            'defaults' => array(
                                'action' => 'index',
                                'page' => 1
                            )
                        )
                    )
                ),
            ),
            'pax-moedas' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/app-pax/moedas',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Pax\Controller',
                        'controller'    => 'Moedas',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '[/:action[/:id]]',
                            'constraints' => array(
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'         => '\d+'
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
            'pax-urnas' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/app-pax/urnas',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Pax\Controller',
                        'controller'    => 'Urnas',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '[/:action[/:id]]',
                            'constraints' => array(
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'         => '\d+'
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                    'paginator' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '[/page/:page]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'page' => '\d+'
                            ),
                            'defaults' => array(
                                'action' => 'index',
                                'page' => 1
                            )
                        )
                    )
                ),
            ),
            'pax-material' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/app-pax/material',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Pax\Controller',
                        'controller'    => 'Material',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '[/:action[/:id]]',
                            'constraints' => array(
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'         => '\d+'
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                    'paginator' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '[/page/:page]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'page' => '\d+'
                            ),
                            'defaults' => array(
                                'action' => 'index',
                                'page' => 1
                            )
                        )
                    )
                ),
            ),
            'pax-servicos' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/app-pax/servicos',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Pax\Controller',
                        'controller'    => 'Servicos',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '[/:action[/:id]]',
                            'constraints' => array(
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'         => '\d+'
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                    'paginator' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '[/page/:page]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'page' => '\d+'
                            ),
                            'defaults' => array(
                                'action' => 'index',
                                'page' => 1
                            )
                        )
                    )
                ),
            ),
            'pax-move-caixa' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/app-pax/move-caixa',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Pax\Controller',
                        'controller'    => 'MovimentoCaixa',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '[/:action[/:id]]',
                            'constraints' => array(
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'         => '\d+'
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                    'paginator' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '[/page/:page]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'page' => '\d+'
                            ),
                            'defaults' => array(
                                'action' => 'index',
                                'page' => 1
                            )
                        )
                    )
                ),
            ),
            'pax-asso-cancelado' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/app-pax/pax-asso-cancelado',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Pax\Controller',
                        'controller'    => 'Associados',
                        'action'        => 'cancelados',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '[/:action[/:id]]',
                            'constraints' => array(
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'         => '\d+'
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                    'paginator' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '[/page/:page]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'page' => '\d+'
                            ),
                            'defaults' => array(
                                'action' => 'cancelados',
                                'page' => 1
                            )
                        )
                    )
                ),
            ),
            'pax-asso-paralisado' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/app-pax/pax-asso-paralisado',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Pax\Controller',
                        'controller'    => 'Associados',
                        'action'        => 'paralisado',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '[/:action[/:id]]',
                            'constraints' => array(
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'         => '\d+'
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                    'paginator' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '[/page/:page]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'page' => '\d+'
                            ),
                            'defaults' => array(
                                'action' => 'paralisado',
                                'page' => 1
                            )
                        )
                    )
                ),
            ),
            'pax-backup' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/app-pax/backup',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Pax\Controller',
                        'controller'    => 'Backup',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '[/:action[/:id]]',
                            'constraints' => array(
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'         => '\d+'
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                )
            )
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Pax\Controller\Index' => 'Pax\Controller\IndexController',
            'Pax\Controller\Auth' => 'Pax\Controller\AuthController',
            'Pax\Controller\Funcionarios' => 'Pax\Controller\FuncionariosController',
            'Pax\Controller\Associados' => 'Pax\Controller\AssociadosController',
            'Pax\Controller\Obitos' => 'Pax\Controller\ObitosController',
            'Pax\Controller\Dependentes' => 'Pax\Controller\DependentesController',
            'Pax\Controller\Cancelamento' => 'Pax\Controller\CancelamentoController',
            'Pax\Controller\Empresas' => 'Pax\Controller\EmpresasController',
            'Pax\Controller\Moedas' => 'Pax\Controller\MoedasController',
            'Pax\Controller\Urnas' => 'Pax\Controller\UrnasController',
            'Pax\Controller\Servicos' => 'Pax\Controller\ServicosController',
            'Pax\Controller\Material' => 'Pax\Controller\MaterialController',
            'Pax\Controller\Notas' => 'Pax\Controller\NotasController',
            'Pax\Controller\MovimentoCaixa' => 'Pax\Controller\MovimentoCaixaController',
            'Pax\Controller\Caixa' => 'Pax\Controller\CaixaController',
            'Pax\Controller\GeraFor' => 'Pax\Controller\GeraForController',
            'Pax\Controller\Mensalidade' => 'Pax\Controller\MensalidadeController',
            'Pax\Controller\Backup' => 'Pax\Controller\BackupController',
        ),
    ),
    // Chama a Autenticação
    'service_manager' => array(
        'factories' => array(
            'Zend\Authentication\AuthenticationService' => 'Pax\Auth\AuthenticationFactory',
        ),
    ),
    //Configurando qual Layout vai ser o padrão mo modelo
    'module_layout' => array(
        'Pax' => 'layout/layout_pax.phtml'
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout_pax.phtml',
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
    'doctrine' => array(
        'driver' => array(
            __NAMESPACE__ . '_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
                ),
            ),
        ),
    ),

);
