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
        '/contact' => [
            [['_route' => 'base', '_controller' => 'App\\Controller\\BaseController::contact'], null, null, null, false, false, null],
            [['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null],
        ],
        '/blog' => [[['_route' => 'blog', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'categorie', '_controller' => 'App\\Controller\\CategorieController::index'], null, null, null, false, false, null]],
        '/AfficheCategorie' => [[['_route' => 'AfficheCategorie', '_controller' => 'App\\Controller\\CategorieController::Affiche'], null, null, null, false, false, null]],
        '/Categorie/Add' => [[['_route' => 'adc', '_controller' => 'App\\Controller\\CategorieController::Add'], null, null, null, false, false, null]],
        '/club' => [[['_route' => 'club', '_controller' => 'App\\Controller\\ClubController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/joueurs' => [[['_route' => 'joueurs', '_controller' => 'App\\Controller\\JoueursController::index'], null, null, null, false, false, null]],
        '/matches' => [[['_route' => 'matches', '_controller' => 'App\\Controller\\MatchesController::index'], null, null, null, false, false, null]],
        '/terrain' => [[['_route' => 'terrain', '_controller' => 'App\\Controller\\TerrainController::index'], null, null, null, false, false, null]],
        '/utilisateur' => [[['_route' => 'utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, null, null, false, false, null]],
        '/AfficheUtilisateur' => [[['_route' => 'AfficheUtilisateur', '_controller' => 'App\\Controller\\UtilisateurController::Affiche'], null, null, null, false, false, null]],
        '/utilisateur/Add' => [[['_route' => 'ad', '_controller' => 'App\\Controller\\UtilisateurController::Add'], null, null, null, false, false, null]],
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
                .'|/Supp(?'
                    .'|Categorie/([^/]++)(*:195)'
                    .'|Utilisateur/([^/]++)(*:223)'
                .')'
                .'|/Update(?'
                    .'|Categorie/([^/]++)(*:260)'
                    .'|Utilisateur/([^/]++)(*:288)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        195 => [[['_route' => 'df', '_controller' => 'App\\Controller\\CategorieController::Delete'], ['id'], null, null, false, true, null]],
        223 => [[['_route' => 'd', '_controller' => 'App\\Controller\\UtilisateurController::Delete'], ['id'], null, null, false, true, null]],
        260 => [[['_route' => 'af', '_controller' => 'App\\Controller\\CategorieController::update'], ['id'], null, null, false, true, null]],
        288 => [
            [['_route' => 'a', '_controller' => 'App\\Controller\\UtilisateurController::update'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
