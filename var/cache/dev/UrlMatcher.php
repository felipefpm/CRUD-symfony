<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'usuario_index', '_controller' => 'App\\Controller\\UsuariosController::index'], null, ['GET' => 0], null, false, false, null]],
        '/selecao' => [[['_route' => 'selecao', '_controller' => 'App\\Controller\\UsuariosController::selecao'], null, null, null, false, false, null]],
        '/pfisica' => [[['_route' => 'new-pfisica', '_controller' => 'App\\Controller\\UsuariosController::pfisica'], null, null, null, false, false, null]],
        '/pjuridica' => [[['_route' => 'new-pjuridica', '_controller' => 'App\\Controller\\UsuariosController::pjuridica'], null, null, null, false, false, null]],
        '/savepf' => [[['_route' => 'save_pf', '_controller' => 'App\\Controller\\UsuariosController::savepf'], null, null, null, false, false, null]],
        '/savepj' => [[['_route' => 'save_pj', '_controller' => 'App\\Controller\\UsuariosController::savepj'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/([^/]++)(?'
                    .'|(*:181)'
                    .'|/edit(*:194)'
                    .'|(*:202)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        181 => [[['_route' => 'show', '_controller' => 'App\\Controller\\UsuariosController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        194 => [[['_route' => 'edit', '_controller' => 'App\\Controller\\UsuariosController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        202 => [
            [['_route' => 'delete', '_controller' => 'App\\Controller\\UsuariosController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
