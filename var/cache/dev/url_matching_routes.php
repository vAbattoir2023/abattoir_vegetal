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
        '/admin' => [[['_route' => 'app_admin_index', '_controller' => 'App\\Controller\\AdminController::adminData'], null, null, null, true, false, null]],
        '/adminGrp' => [[['_route' => 'app_admin_grpindex', '_controller' => 'App\\Controller\\AdminGroupController::index'], null, null, null, true, false, null]],
        '/api_user' => [[['_route' => 'app_api_user', '_controller' => 'App\\Controller\\ApiUserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/group/select_group' => [[['_route' => 'app_select_group', '_controller' => 'App\\Controller\\GroupController::select_group'], null, null, null, false, false, null]],
        '/group/users-list' => [[['_route' => 'app_get_users_list_without_filters', '_controller' => 'App\\Controller\\GroupController::showUsersListFull'], null, null, null, true, false, null]],
        '/group/invitation' => [[['_route' => 'app_invitation', '_controller' => 'App\\Controller\\GroupController::invitation'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/header' => [[['_route' => 'app_header', '_controller' => 'App\\Controller\\HomeController::header'], null, null, null, false, false, null]],
        '/help' => [[['_route' => 'app_home_help', '_controller' => 'App\\Controller\\HomeController::help'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/register/add' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'reservation_page', '_controller' => 'App\\Controller\\ReservationController::reservationPage'], null, null, null, true, false, null]],
        '/reservation/allReservation' => [[['_route' => 'app_reservation', '_controller' => 'App\\Controller\\ReservationController::allReservations'], null, null, null, false, false, null]],
        '/user_profil/edit' => [[['_route' => 'app_user_profil', '_controller' => 'App\\Controller\\UserProfilController::index'], null, null, null, false, false, null]],
        '/user_profil/profil' => [[['_route' => 'app_user_profil_success', '_controller' => 'App\\Controller\\UserProfilController::success'], null, null, null, false, false, null]],
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
                .'|/admin(?'
                    .'|/(?'
                        .'|([^/]++)(*:190)'
                        .'|edit/([^/]++)(*:211)'
                        .'|delete/([^/]++)(*:234)'
                    .')'
                    .'|Grp/deleteGrp/([^/]++)(*:265)'
                .')'
                .'|/group/(?'
                    .'|a(?'
                        .'|dd/([^/]++)/([^/]++)(*:308)'
                        .'|ccept/([^/]++)/([^/]++)(*:339)'
                    .')'
                    .'|users\\-list/([^/]++)(*:368)'
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
        190 => [[['_route' => 'app_admin_show', '_controller' => 'App\\Controller\\AdminController::show'], ['id'], null, null, false, true, null]],
        211 => [[['_route' => 'app_admin_edit', '_controller' => 'App\\Controller\\AdminController::edit'], ['id'], null, null, false, true, null]],
        234 => [[['_route' => 'app_admin_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], null, null, false, true, null]],
        265 => [[['_route' => 'app_grpadmin_delete', '_controller' => 'App\\Controller\\AdminGroupController::delete'], ['id'], null, null, false, true, null]],
        308 => [[['_route' => 'app_add_group', '_controller' => 'App\\Controller\\GroupController::addGroup'], ['idUsers', 'date'], null, null, false, true, null]],
        339 => [[['_route' => 'accept_Invitation', '_controller' => 'App\\Controller\\GroupController::acceptInvitation'], ['id', 'bool'], null, null, false, true, null]],
        368 => [
            [['_route' => 'app_get_users_list_from_filters', '_controller' => 'App\\Controller\\GroupController::showUsersList'], ['filters'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
