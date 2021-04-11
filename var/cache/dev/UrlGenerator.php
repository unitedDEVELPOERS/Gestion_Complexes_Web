<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], []],
    'base' => [[], ['_controller' => 'App\\Controller\\BaseController::contact'], [], [['text', '/contact']], [], []],
    'blog' => [[], ['_controller' => 'App\\Controller\\BlogController::index'], [], [['text', '/blog']], [], []],
    'club' => [[], ['_controller' => 'App\\Controller\\ClubController::index'], [], [['text', '/club']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], []],
    'front_office' => [[], ['_controller' => 'App\\Controller\\FrontOfficeController::terrains'], [], [['text', '/terrains']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], []],
    'joueurs' => [[], ['_controller' => 'App\\Controller\\JoueursController::index'], [], [['text', '/joueurs']], [], []],
    'matches' => [[], ['_controller' => 'App\\Controller\\MatchesController::index'], [], [['text', '/matches']], [], []],
    'terrain' => [[], ['_controller' => 'App\\Controller\\TerrainController::add'], [], [['text', '/terrain/add']], [], []],
    'AfficheTerrains' => [[], ['_controller' => 'App\\Controller\\TerrainController::Affiche'], [], [['text', '/AfficheTerrains/']], [], []],
    'd' => [['id'], ['_controller' => 'App\\Controller\\TerrainController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/terrain/supp']], [], []],
    'update' => [['id'], ['_controller' => 'App\\Controller\\TerrainController::Update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/classroom/update']], [], []],
];
