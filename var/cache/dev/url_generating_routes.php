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
    'accueil' => [[], ['_controller' => 'App\\Controller\\AccueilController::index'], [], [['text', '/']], [], [], []],
    'admin_albums' => [[], ['_controller' => 'App\\Controller\\Admin\\AlbumController::listeAlbums'], [], [['text', '/admin/albums']], [], [], []],
    'admin_album_ajout' => [[], ['_controller' => 'App\\Controller\\Admin\\AlbumController::ajoutModifAlbum'], [], [['text', '/admin/album/ajout']], [], [], []],
    'admin_album_modif' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AlbumController::ajoutModifAlbum'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/album/modif']], [], [], []],
    'admin_album_supr' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AlbumController::suprAlbum'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/album/supr']], [], [], []],
    'admin_artistes' => [[], ['_controller' => 'App\\Controller\\Admin\\ArtisteController::listeArtistes'], [], [['text', '/admin/artistes']], [], [], []],
    'admin_artiste_ajout' => [[], ['_controller' => 'App\\Controller\\Admin\\ArtisteController::ajoutModifArtiste'], [], [['text', '/admin/artiste/ajout']], [], [], []],
    'admin_artiste_modif' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ArtisteController::ajoutModifArtiste'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/artiste/modif']], [], [], []],
    'admin_artiste_supr' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ArtisteController::suprArtiste'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/artiste/supr']], [], [], []],
    'admin_styles' => [[], ['_controller' => 'App\\Controller\\Admin\\StyleController::listeStyles'], [], [['text', '/admin/styles']], [], [], []],
    'admin_style_ajout' => [[], ['_controller' => 'App\\Controller\\Admin\\StyleController::ajoutModifStyle'], [], [['text', '/admin/style/ajout']], [], [], []],
    'admin_style_modif' => [['id'], ['_controller' => 'App\\Controller\\Admin\\StyleController::ajoutModifStyle'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/style/modif']], [], [], []],
    'admin_style_supr' => [['id'], ['_controller' => 'App\\Controller\\Admin\\StyleController::suprStyle'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/style/supr']], [], [], []],
    'albums' => [[], ['_controller' => 'App\\Controller\\AlbumController::listeAlbums'], [], [['text', '/albums']], [], [], []],
    'ficheAlbum' => [['id'], ['_controller' => 'App\\Controller\\AlbumController::ficheAlbum'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/album']], [], [], []],
    'artistes' => [[], ['_controller' => 'App\\Controller\\ArtisteController::listeArtistes'], [], [['text', '/artistes']], [], [], []],
    'ficheArtiste' => [['id'], ['_controller' => 'App\\Controller\\ArtisteController::ficheArtiste'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/artiste']], [], [], []],
];