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
        '/editor' => [[['_route' => 'editor', '_controller' => 'App\\Controller\\EditorController::index'], null, null, null, false, false, null]],
        '/create_editor' => [[['_route' => 'create_editor', '_controller' => 'App\\Controller\\EditorController::newAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'game', '_controller' => 'App\\Controller\\JeuxController::index'], null, null, null, false, false, null]],
        '/create_game' => [[['_route' => 'create_game', '_controller' => 'App\\Controller\\JeuxController::newAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/update_user' => [[['_route' => 'update_user', '_controller' => 'App\\Controller\\UpdateUserController::newAction'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/user_list' => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::usersList'], null, null, null, false, false, null]],
        '/create_user' => [[['_route' => 'form', '_controller' => 'App\\Controller\\UserController::newAction'], null, null, null, false, false, null]],
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
                .'|/editor_details/([^/]++)(*:193)'
                .'|/delete_(?'
                    .'|editor/([^/]++)(*:227)'
                    .'|game/([^/]++)(*:248)'
                    .'|user/([^/]++)(*:269)'
                .')'
                .'|/game_details/([^/]++)(*:300)'
                .'|/update_(?'
                    .'|editor/([^/]++)(*:334)'
                    .'|game/([^/]++)(*:355)'
                .')'
                .'|/admin_update_user/([^/]++)(*:391)'
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
        193 => [[['_route' => 'editor_details', '_controller' => 'App\\Controller\\EditorController::editorDetail'], ['id'], null, null, false, true, null]],
        227 => [[['_route' => 'editor_delete', '_controller' => 'App\\Controller\\EditorController::delete'], ['id'], null, null, false, true, null]],
        248 => [[['_route' => 'game_delete', '_controller' => 'App\\Controller\\JeuxController::delete'], ['id'], null, null, false, true, null]],
        269 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], null, null, false, true, null]],
        300 => [[['_route' => 'game_details', '_controller' => 'App\\Controller\\JeuxController::editorDetail'], ['id'], null, null, false, true, null]],
        334 => [[['_route' => 'update_editor', '_controller' => 'App\\Controller\\UpdateEditorController::Action'], ['id'], null, null, false, true, null]],
        355 => [[['_route' => 'update_game', '_controller' => 'App\\Controller\\UpdateJeuxController::Action'], ['id'], null, null, false, true, null]],
        391 => [
            [['_route' => 'admin_update_user', '_controller' => 'App\\Controller\\UpdateUserController::Action'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
