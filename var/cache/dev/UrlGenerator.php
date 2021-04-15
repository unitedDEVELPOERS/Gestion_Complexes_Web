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
    'aboutus' => [[], ['_controller' => 'App\\Controller\\BaseController::index'], [], [['text', '/aboutus']], [], []],
    'blog' => [[], ['_controller' => 'App\\Controller\\BlogController::index'], [], [['text', '/blog']], [], []],
    'reservation' => [[], ['_controller' => 'App\\Controller\\BlogController::reservation'], [], [['text', '/reservation']], [], []],
    'shop' => [[], ['_controller' => 'App\\Controller\\BlogController::shop'], [], [['text', '/shop']], [], []],
    'club' => [[], ['_controller' => 'App\\Controller\\ClubController::index'], [], [['text', '/club']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], []],
    'equipe' => [[], ['_controller' => 'App\\Controller\\EquipeController::index'], [], [['text', '/equipe']], [], []],
    'AfficheEquipe' => [[], ['_controller' => 'App\\Controller\\EquipeController::Affiche'], [], [['text', '/AfficheEquipe']], [], []],
    'deleteequipe' => [['id'], ['_controller' => 'App\\Controller\\EquipeController::Delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/Supp']], [], []],
    'app_equipe_add' => [[], ['_controller' => 'App\\Controller\\EquipeController::Add'], [], [['text', '/equipe/Add']], [], []],
    'updateequipe' => [['id'], ['_controller' => 'App\\Controller\\EquipeController::update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/update']], [], []],
    'fixture' => [[], ['_controller' => 'App\\Controller\\EquipeController::fixture'], [], [['text', '/fixture']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], []],
    'invitation' => [[], ['_controller' => 'App\\Controller\\InvitationController::index'], [], [['text', '/invitation']], [], []],
    'AfficheInvitation' => [[], ['_controller' => 'App\\Controller\\InvitationController::Affiche'], [], [['text', '/AfficheInvitation']], [], []],
    'deleteinvitation' => [['id'], ['_controller' => 'App\\Controller\\InvitationController::Delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/SuppInvitation']], [], []],
    'app_invitation_add' => [[], ['_controller' => 'App\\Controller\\InvitationController::Add'], [], [['text', '/invitation/Add']], [], []],
    'updateinvitation' => [['id'], ['_controller' => 'App\\Controller\\InvitationController::update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/updateinvitation']], [], []],
    'joueurs' => [[], ['_controller' => 'App\\Controller\\JoueursController::index'], [], [['text', '/joueurs']], [], []],
    'matches' => [[], ['_controller' => 'App\\Controller\\MatchesController::index'], [], [['text', '/matches']], [], []],
    'terrain' => [[], ['_controller' => 'App\\Controller\\TerrainController::index'], [], [['text', '/terrain']], [], []],
];
