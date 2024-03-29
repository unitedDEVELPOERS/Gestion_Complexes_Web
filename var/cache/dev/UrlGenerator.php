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
    'admint' => [[], ['_controller' => 'App\\Controller\\AdminController::terrains'], [], [['text', '/admint']], [], []],
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
    'AffichePenalites' => [[], ['_controller' => 'App\\Controller\\PenaliteController::Affiche'], [], [['text', '/AffichePenalite/']], [], []],
    'updatePenalite' => [['id'], ['_controller' => 'App\\Controller\\PenaliteController::Update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/penalite/update']], [], []],
    'dp' => [['id'], ['_controller' => 'App\\Controller\\PenaliteController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/penalite/supp']], [], []],
    'penalite_joueur' => [[], ['_controller' => 'App\\Controller\\PenaliteJoueurController::index'], [], [['text', '/penalite/joueur']], [], []],
    'penalite' => [[], ['_controller' => 'App\\Controller\\PenaliteJoueurController::add'], [], [['text', '/penalite/add']], [], []],
    'AffichePenalitesJoueur' => [[], ['_controller' => 'App\\Controller\\PenaliteJoueurController::Affiche'], [], [['text', '/AffichePenaliteJoueur/']], [], []],
    'update' => [['id'], ['_controller' => 'App\\Controller\\PenaliteJoueurController::Update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/penaliteJoueur/update']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\Prop_complexe\\LoginController::index'], [], [['text', '/Porp/login']], [], []],
    'profile' => [[], ['_controller' => 'App\\Controller\\Prop_complexe\\ProfileController::index'], [], [['text', '/Prop_complexe/profile']], [], []],
    'front_office' => [[], ['_controller' => 'App\\Controller\\Prop_complexe\\ProfileController::terrains'], [], [['text', '/terrains']], [], []],
    're' => [[], ['_controller' => 'App\\Controller\\ReservationController::add'], [], [['text', '/reservation/add']], [], []],
    'Reservations' => [[], ['_controller' => 'App\\Controller\\ReservationController::Affiche'], [], [['text', '/AfficheReservations/']], [], []],
    'updateReservation' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::Update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/reservation/update']], [], []],
    'send' => [[], ['_controller' => 'App\\Controller\\TerrainController::send'], [], [['text', '/send']], [], []],
    'terrain' => [[], ['_controller' => 'App\\Controller\\TerrainController::add'], [], [['text', '/Admin/terrain/add']], [], []],
    'AfficheTerrains' => [[], ['_controller' => 'App\\Controller\\TerrainController::Affiche'], [], [['text', '/AfficheTerrains/']], [], []],
    'filterTerrains' => [['m'], ['_controller' => 'App\\Controller\\TerrainController::filter'], [], [['variable', '/', '[^/]++', 'm'], ['text', '/AfficheTerrains']], [], []],
    'd' => [['id'], ['_controller' => 'App\\Controller\\TerrainController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/terrain/supp']], [], []],
    'updateTerrain' => [['id'], ['_controller' => 'App\\Controller\\TerrainController::Update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/terrain/update']], [], []],
    'TerrainsClient' => [[], ['_controller' => 'App\\Controller\\TerrainController::AfficheTerrain'], [], [['text', '/Terrains']], [], []],
    'terrain_show' => [['id'], ['_controller' => 'App\\Controller\\TerrainController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/Terrain/afficher']], [], []],
    'searchTerrain' => [[], ['_controller' => 'App\\Controller\\TerrainController::searchTerrain'], [], [['text', '/searchTerrain']], [], []],
];
