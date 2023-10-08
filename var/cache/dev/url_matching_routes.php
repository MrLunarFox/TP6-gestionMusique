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
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/admin/albums' => [[['_route' => 'admin_albums', '_controller' => 'App\\Controller\\Admin\\AlbumController::listeAlbums'], null, ['GET' => 0], null, false, false, null]],
        '/admin/album/ajout' => [[['_route' => 'admin_album_ajout', '_controller' => 'App\\Controller\\Admin\\AlbumController::ajoutModifAlbum'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/artistes' => [[['_route' => 'admin_artistes', '_controller' => 'App\\Controller\\Admin\\ArtisteController::listeArtistes'], null, ['GET' => 0], null, false, false, null]],
        '/admin/artiste/ajout' => [[['_route' => 'admin_artiste_ajout', '_controller' => 'App\\Controller\\Admin\\ArtisteController::ajoutModifArtiste'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/styles' => [[['_route' => 'admin_styles', '_controller' => 'App\\Controller\\Admin\\StyleController::listeStyles'], null, ['GET' => 0], null, false, false, null]],
        '/admin/style/ajout' => [[['_route' => 'admin_style_ajout', '_controller' => 'App\\Controller\\Admin\\StyleController::ajoutModifStyle'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/albums' => [[['_route' => 'albums', '_controller' => 'App\\Controller\\AlbumController::listeAlbums'], null, ['GET' => 0], null, false, false, null]],
        '/artistes' => [[['_route' => 'artistes', '_controller' => 'App\\Controller\\ArtisteController::listeArtistes'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/a(?'
                    .'|dmin/(?'
                        .'|a(?'
                            .'|lbum/(?'
                                .'|modif/([^/]++)(*:208)'
                                .'|supr/([^/]++)(*:229)'
                            .')'
                            .'|rtiste/(?'
                                .'|modif/([^/]++)(*:262)'
                                .'|supr/([^/]++)(*:283)'
                            .')'
                        .')'
                        .'|style/(?'
                            .'|modif/([^/]++)(*:316)'
                            .'|supr/([^/]++)(*:337)'
                        .')'
                    .')'
                    .'|lbum/([^/]++)(*:360)'
                    .'|rtiste/([^/]++)(*:383)'
                .')'
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
        208 => [[['_route' => 'admin_album_modif', '_controller' => 'App\\Controller\\Admin\\AlbumController::ajoutModifAlbum'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        229 => [[['_route' => 'admin_album_supr', '_controller' => 'App\\Controller\\Admin\\AlbumController::suprAlbum'], ['id'], ['GET' => 0], null, false, true, null]],
        262 => [[['_route' => 'admin_artiste_modif', '_controller' => 'App\\Controller\\Admin\\ArtisteController::ajoutModifArtiste'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        283 => [[['_route' => 'admin_artiste_supr', '_controller' => 'App\\Controller\\Admin\\ArtisteController::suprArtiste'], ['id'], ['GET' => 0], null, false, true, null]],
        316 => [[['_route' => 'admin_style_modif', '_controller' => 'App\\Controller\\Admin\\StyleController::ajoutModifStyle'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        337 => [[['_route' => 'admin_style_supr', '_controller' => 'App\\Controller\\Admin\\StyleController::suprStyle'], ['id'], ['GET' => 0], null, false, true, null]],
        360 => [[['_route' => 'ficheAlbum', '_controller' => 'App\\Controller\\AlbumController::ficheAlbum'], ['id'], ['GET' => 0], null, false, true, null]],
        383 => [
            [['_route' => 'ficheArtiste', '_controller' => 'App\\Controller\\ArtisteController::ficheArtiste'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
