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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\AuthenticatorController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\AuthenticatorController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/creation-figure' => [[['_route' => 'app_creation_figure', '_controller' => 'App\\Controller\\FigureController::creationFigure'], null, null, null, false, false, null]],
        '/recuperation-mot-de-passe' => [[['_route' => 'app_forget_password', '_controller' => 'App\\Controller\\ForgetPasswordController::index'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/figure(?'
                    .'|/(?'
                        .'|([^/]++)(*:191)'
                        .'|liste/([^/]++)(*:213)'
                    .')'
                    .'|\\-suppression/([^/]++)(*:244)'
                .')'
                .'|/edition\\-figure/([^/]++)(*:278)'
                .'|/m(?'
                    .'|odifier\\-le\\-mot\\-de\\-passe/([^/]++)(*:327)'
                    .'|essage/([^/]++)(*:350)'
                .')'
                .'|/verifier\\-email/([^/]++)(*:384)'
                .'|/(.*)(*:397)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        191 => [[['_route' => 'app_figure', '_controller' => 'App\\Controller\\FigureController::liste'], ['slug'], null, null, false, true, null]],
        213 => [[['_route' => 'app_figure_liste', '_controller' => 'App\\Controller\\FigureController::print'], ['max_result'], ['GET' => 0], null, false, true, null]],
        244 => [[['_route' => 'app_supression_figure', '_controller' => 'App\\Controller\\FigureController::suppressionFigure'], ['slug'], ['DELETE' => 0], null, false, true, null]],
        278 => [[['_route' => 'app_edition_figure', '_controller' => 'App\\Controller\\FigureController::editionFigure'], ['slug'], null, null, false, true, null]],
        327 => [[['_route' => 'app_edit_password', '_controller' => 'App\\Controller\\ForgetPasswordController::editPassword'], ['code_recup'], ['POST' => 0], null, false, true, null]],
        350 => [[['_route' => 'app_message', '_controller' => 'App\\Controller\\MessageController::message'], ['slug'], ['GET' => 0], null, false, true, null]],
        384 => [[['_route' => 'app_verif_email', '_controller' => 'App\\Controller\\RegistrationController::verification'], ['code_verification'], ['GET' => 0], null, false, true, null]],
        397 => [
            [['_route' => 'error404', '_controller' => 'App\\Controller\\ErrorController::error404'], ['wildcard'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
