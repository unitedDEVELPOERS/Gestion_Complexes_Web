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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admint' => [[['_route' => 'admint', '_controller' => 'App\\Controller\\AdminController::terrains'], null, null, null, false, false, null]],
        '/aboutus' => [[['_route' => 'aboutus', '_controller' => 'App\\Controller\\BaseController::index'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'blog', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, false, false, null]],
        '/shop' => [[['_route' => 'shop', '_controller' => 'App\\Controller\\BlogController::shop'], null, null, null, false, false, null]],
        '/club' => [[['_route' => 'club', '_controller' => 'App\\Controller\\ClubController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/equipe' => [[['_route' => 'equipe', '_controller' => 'App\\Controller\\EquipeController::index'], null, null, null, false, false, null]],
        '/calender' => [[['_route' => 'calender', '_controller' => 'App\\Controller\\EquipeController::match'], null, null, null, false, false, null]],
        '/AfficheEquipe' => [[['_route' => 'AfficheEquipe', '_controller' => 'App\\Controller\\EquipeController::Affiche'], null, null, null, false, false, null]],
        '/equipe/Add' => [[['_route' => 'app_equipe_add', '_controller' => 'App\\Controller\\EquipeController::Add'], null, null, null, false, false, null]],
        '/fixture' => [[['_route' => 'fixture', '_controller' => 'App\\Controller\\EquipeController::fixture'], null, null, null, false, false, null]],
        '/rechercherequipe' => [[['_route' => 'equiperecherche', '_controller' => 'App\\Controller\\EquipeController::home'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/invitation' => [[['_route' => 'invitation', '_controller' => 'App\\Controller\\InvitationController::index'], null, null, null, false, false, null]],
        '/AfficheInvitation' => [[['_route' => 'AfficheInvitation', '_controller' => 'App\\Controller\\InvitationController::Affiche'], null, null, null, false, false, null]],
        '/invitation/Add' => [[['_route' => 'app_invitation_add', '_controller' => 'App\\Controller\\InvitationController::Add'], null, null, null, false, false, null]],
        '/joueurs' => [[['_route' => 'joueurs', '_controller' => 'App\\Controller\\JoueursController::index'], null, null, null, false, false, null]],
        '/matches' => [[['_route' => 'matches', '_controller' => 'App\\Controller\\MatchesController::index'], null, null, null, false, false, null]],
        '/AffichePenalite' => [[['_route' => 'AffichePenalites', '_controller' => 'App\\Controller\\PenaliteController::Affiche'], null, null, null, true, false, null]],
        '/penalite/joueur' => [[['_route' => 'penalite_joueur', '_controller' => 'App\\Controller\\PenaliteJoueurController::index'], null, null, null, false, false, null]],
        '/penalite/add' => [[['_route' => 'penalite', '_controller' => 'App\\Controller\\PenaliteJoueurController::add'], null, null, null, false, false, null]],
        '/AffichePenaliteJoueur' => [[['_route' => 'AffichePenalitesJoueur', '_controller' => 'App\\Controller\\PenaliteJoueurController::Affiche'], null, null, null, true, false, null]],
        '/Porp/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\Prop_complexe\\LoginController::index'], null, null, null, false, false, null]],
        '/Prop_complexe/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\Prop_complexe\\ProfileController::index'], null, null, null, false, false, null]],
        '/terrains' => [[['_route' => 'front_office', '_controller' => 'App\\Controller\\Prop_complexe\\ProfileController::terrains'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'reservation', '_controller' => 'App\\Controller\\ReservationController::index'], null, null, null, false, false, null]],
        '/AfficheReservations' => [[['_route' => 'AfficheReservations', '_controller' => 'App\\Controller\\ReservationController::Affiche'], null, null, null, true, false, null]],
        '/Admin/terrain/add' => [[['_route' => 'terrain', '_controller' => 'App\\Controller\\TerrainController::add'], null, null, null, false, false, null]],
        '/AfficheTerrains' => [[['_route' => 'AfficheTerrains', '_controller' => 'App\\Controller\\TerrainController::Affiche'], null, null, null, true, false, null]],
        '/Terrains' => [[['_route' => 'TerrainsClient', '_controller' => 'App\\Controller\\TerrainController::AfficheClient'], null, null, null, false, false, null]],
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
                    .'|/([^/]++)(*:186)'
                    .'|Invitation/([^/]++)(*:213)'
                .')'
                .'|/update(?'
                    .'|/([^/]++)(*:241)'
                    .'|invitation/([^/]++)(*:268)'
                .')'
                .'|/penalite/(?'
                    .'|update/([^/]++)(*:305)'
                    .'|supp/([^/]++)(*:326)'
                .')'
                .'|/terrain/(?'
                    .'|supp/([^/]++)(*:360)'
                    .'|update/([^/]++)(*:383)'
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
        186 => [[['_route' => 'deleteequipe', '_controller' => 'App\\Controller\\EquipeController::Delete'], ['id'], null, null, false, true, null]],
        213 => [[['_route' => 'deleteinvitation', '_controller' => 'App\\Controller\\InvitationController::Delete'], ['id'], null, null, false, true, null]],
        241 => [[['_route' => 'updateequipe', '_controller' => 'App\\Controller\\EquipeController::update'], ['id'], null, null, false, true, null]],
        268 => [[['_route' => 'updateinvitation', '_controller' => 'App\\Controller\\InvitationController::update'], ['id'], null, null, false, true, null]],
        305 => [[['_route' => 'updatePenalite', '_controller' => 'App\\Controller\\PenaliteController::Update'], ['id'], null, null, false, true, null]],
        326 => [[['_route' => 'dp', '_controller' => 'App\\Controller\\PenaliteController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        360 => [[['_route' => 'd', '_controller' => 'App\\Controller\\TerrainController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        383 => [
            [['_route' => 'update', '_controller' => 'App\\Controller\\TerrainController::Update'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
