<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'app_admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, true, false, null]],
        '/adminGrp' => [[['_route' => 'app_admin_grpindex', '_controller' => 'App\\Controller\\AdminGroupController::index'], null, null, null, true, false, null]],
        '/api_user' => [[['_route' => 'app_api_user', '_controller' => 'App\\Controller\\ApiUserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/group/select_group' => [[['_route' => 'app_select_group', '_controller' => 'App\\Controller\\GroupController::select_group'], null, null, null, false, false, null]],
        '/group/users-list' => [[['_route' => 'app_get_users_list_without_filters', '_controller' => 'App\\Controller\\GroupController::showUsersListFull'], null, null, null, true, false, null]],
        '/group/invitation' => [[['_route' => 'app_invitation', '_controller' => 'App\\Controller\\GroupController::invitation'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/help' => [[['_route' => 'app_home_help', '_controller' => 'App\\Controller\\HomeController::help'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/register/add' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'reservation_page', '_controller' => 'App\\Controller\\ReservationController::reservationPage'], null, null, null, true, false, null]],
        '/reservation/allReservation' => [[['_route' => 'app_reservation', '_controller' => 'App\\Controller\\ReservationController::allReservations'], null, null, null, false, false, null]],
        '/user/s' => [[['_route' => 'app_userapp_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/user_profil/edit' => [[['_route' => 'app_user_profil', '_controller' => 'App\\Controller\\UserProfilController::index'], null, null, null, false, false, null]],
        '/user_profil/profil' => [[['_route' => 'app_user_profil_success', '_controller' => 'App\\Controller\\UserProfilController::success'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin(?'
                    .'|/(?'
                        .'|([^/]++)(*:28)'
                        .'|edit/([^/]++)(*:48)'
                        .'|delete/([^/]++)(*:70)'
                    .')'
                    .'|Grp/deleteGrp/([^/]++)(*:100)'
                .')'
                .'|/group/(?'
                    .'|a(?'
                        .'|dd/([^/]++)/([^/]++)(*:143)'
                        .'|ccept/([^/]++)/([^/]++)(*:174)'
                    .')'
                    .'|users\\-list/([^/]++)(*:203)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'app_admin_show', '_controller' => 'App\\Controller\\AdminController::show'], ['id'], null, null, false, true, null]],
        48 => [[['_route' => 'app_admin_edit', '_controller' => 'App\\Controller\\AdminController::edit'], ['id'], null, null, false, true, null]],
        70 => [[['_route' => 'app_admin_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], null, null, false, true, null]],
        100 => [[['_route' => 'app_grpadmin_delete', '_controller' => 'App\\Controller\\AdminGroupController::delete'], ['id'], null, null, false, true, null]],
        143 => [[['_route' => 'app_add_group', '_controller' => 'App\\Controller\\GroupController::addGroup'], ['idUsers', 'date'], null, null, false, true, null]],
        174 => [[['_route' => 'accept_Invitation', '_controller' => 'App\\Controller\\GroupController::acceptInvitation'], ['id', 'bool'], null, null, false, true, null]],
        203 => [
            [['_route' => 'app_get_users_list_from_filters', '_controller' => 'App\\Controller\\GroupController::showUsersList'], ['filters'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
