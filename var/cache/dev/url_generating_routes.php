<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\AuthenticatorController::login'], [], [['text', '/connexion']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\AuthenticatorController::logout'], [], [['text', '/logout']], [], [], []],
    'app_404' => [[], ['_controller' => 'App\\Controller\\ErrorController::error404'], [], [['text', '/404']], [], [], []],
    'app_figure' => [['slug'], ['_controller' => 'App\\Controller\\FigureController::liste'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/figure']], [], [], []],
    'app_figure_liste' => [['max_result'], ['_controller' => 'App\\Controller\\FigureController::print'], [], [['variable', '/', '[^/]++', 'max_result', true], ['text', '/figure/liste']], [], [], []],
    'app_message' => [['slug'], ['_controller' => 'App\\Controller\\FigureController::message'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/message']], [], [], []],
    'app_supression_figure' => [['slug'], ['_controller' => 'App\\Controller\\FigureController::suppressionFigure'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/figure-suppression']], [], [], []],
    'app_edition_figure' => [['slug'], ['_controller' => 'App\\Controller\\FigureController::editionFigure'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/edition-figure']], [], [], []],
    'app_creation_figure' => [[], ['_controller' => 'App\\Controller\\FigureController::creationFigure'], [], [['text', '/creation-figure']], [], [], []],
    'app_forget_password' => [[], ['_controller' => 'App\\Controller\\ForgetPasswordController::index'], [], [['text', '/recuperation-mot-de-passe']], [], [], []],
    'app_edit_password' => [['code_recup'], ['_controller' => 'App\\Controller\\ForgetPasswordController::editPassword'], [], [['variable', '/', '[^/]++', 'code_recup', true], ['text', '/modifier-le-mot-de-passe']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/inscription']], [], [], []],
    'app_verif_email' => [['code_verification'], ['_controller' => 'App\\Controller\\RegistrationController::verification'], [], [['variable', '/', '[^/]++', 'code_verification', true], ['text', '/verifier-email']], [], [], []],
    'error404' => [['wildcard'], ['_controller' => 'App\\Controller\\ErrorController::error404'], ['wildcard' => '.*'], [['variable', '/', '.*', 'wildcard', true]], [], [], []],
];
