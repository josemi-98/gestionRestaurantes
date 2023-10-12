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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'inicio', '_controller' => 'App\\Controller\\LandingPageController::index2'], null, null, null, false, false, null]],
        '/servicios' => [[['_route' => 'servicios', '_controller' => 'App\\Controller\\LandingPageController::servicios'], null, null, null, false, false, null]],
        '/listaRestaurantes' => [[['_route' => 'listaRestaurantes', '_controller' => 'App\\Controller\\LandingPageController::index3'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\LandingPageController::about'], null, null, null, false, false, null]],
        '/contacto' => [[['_route' => 'contacto', '_controller' => 'App\\Controller\\LandingPageController::contacto'], null, null, null, false, false, null]],
        '/base' => [[['_route' => 'base', '_controller' => 'App\\Controller\\LandingPageController::base'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/email' => [[['_route' => 'email', '_controller' => 'App\\Controller\\MailerController::sendEmail'], null, null, null, false, false, null]],
        '/enviar-correo' => [[['_route' => 'enviar_correo', '_controller' => 'App\\Controller\\MailerController::enviarCorreo'], null, ['POST' => 0], null, false, false, null]],
        '/opinion' => [[['_route' => 'app_opinion_index', '_controller' => 'App\\Controller\\OpinionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/opinion/new' => [[['_route' => 'app_opinion_new', '_controller' => 'App\\Controller\\OpinionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reserva' => [[['_route' => 'app_reserva_index', '_controller' => 'App\\Controller\\ReservaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/mis-reservas' => [[['_route' => 'mis_reservas', '_controller' => 'App\\Controller\\Restaurante\\RestauranteController::misReservas'], null, null, null, false, false, null]],
        '/miRestaurante' => [[['_route' => 'miRestaurante', '_controller' => 'App\\Controller\\Restaurante\\RestauranteController::miRestaurante'], null, null, null, false, false, null]],
        '/restaurante' => [[['_route' => 'app_restaurante_index', '_controller' => 'App\\Controller\\RestauranteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/restaurante/new' => [[['_route' => 'app_restaurante_new', '_controller' => 'App\\Controller\\RestauranteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/perfil' => [[['_route' => 'perfil', '_controller' => 'App\\Controller\\Usuario\\UserController::perfil'], null, null, null, false, false, null]],
        '/redireccionRoles' => [[['_route' => 'redireccionRoles', '_controller' => 'App\\Controller\\Usuario\\UserController::roles'], null, null, null, false, false, null]],
        '/verRestaurantes' => [[['_route' => 'verRestaurantes', '_controller' => 'App\\Controller\\Usuario\\UserController::listadoRestaurante'], null, ['GET' => 0], null, false, false, null]],
        '/misReservas' => [[['_route' => 'misReservas', '_controller' => 'App\\Controller\\Usuario\\UserController::verReservasUsuario'], null, null, null, false, false, null]],
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
                .'|/mesa/(?'
                    .'|restaurante/([^/]++)/mesas(*:204)'
                    .'|new/([^/]++)(*:224)'
                    .'|([^/]++)/edit/([^/]++)(*:254)'
                    .'|restaurante/([^/]++)/mesa/([^/]++)(*:296)'
                .')'
                .'|/opinion/(?'
                    .'|res(?'
                        .'|taurante/([^/]++)(*:340)'
                        .'|ponderOpinion/([^/]++)(*:370)'
                    .')'
                    .'|nueva/([^/]++)/([^/]++)(*:402)'
                    .'|([^/]++)(?'
                        .'|(*:421)'
                        .'|/edit(*:434)'
                        .'|(*:442)'
                    .')'
                .')'
                .'|/res(?'
                    .'|erva/(?'
                        .'|nueva/([^/]++)/([^/]++)(*:490)'
                        .'|([^/]++)(?'
                            .'|(*:509)'
                            .'|/(?'
                                .'|edit(?'
                                    .'|(*:528)'
                                .')'
                                .'|restaurante(*:548)'
                            .')'
                            .'|(*:557)'
                        .')'
                    .')'
                    .'|taurante/([^/]++)(?'
                        .'|(*:587)'
                        .'|/edit(?'
                            .'|(*:603)'
                            .'|Restaurante(*:622)'
                        .')'
                        .'|(*:631)'
                    .')'
                .')'
                .'|/([^/]++)/opinion/nueva(*:664)'
                .'|/reseñas/([^/]++)(*:690)'
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
        204 => [[['_route' => 'restaurante_mesas', '_controller' => 'App\\Controller\\MesaController::mesas'], ['id'], null, null, false, false, null]],
        224 => [[['_route' => 'app_mesa_new', '_controller' => 'App\\Controller\\MesaController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        254 => [[['_route' => 'app_mesa_edit', '_controller' => 'App\\Controller\\MesaController::edit'], ['id', 'id1'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        296 => [[['_route' => 'app_mesa_delete', '_controller' => 'App\\Controller\\MesaController::delete'], ['id1', 'id'], ['POST' => 0], null, false, true, null]],
        340 => [[['_route' => 'restaurante_opinion', '_controller' => 'App\\Controller\\OpinionController::opinionesRestaurante'], ['id'], null, null, false, true, null]],
        370 => [[['_route' => 'responderOpinion', '_controller' => 'App\\Controller\\OpinionController::responderOpinion'], ['id'], ['POST' => 0], null, false, true, null]],
        402 => [[['_route' => 'app_opinion_neww', '_controller' => 'App\\Controller\\OpinionController::nueva'], ['idRestaurante', 'idUser'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        421 => [[['_route' => 'app_opinion_show', '_controller' => 'App\\Controller\\OpinionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        434 => [[['_route' => 'app_opinion_edit', '_controller' => 'App\\Controller\\OpinionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        442 => [[['_route' => 'app_opinion_delete', '_controller' => 'App\\Controller\\OpinionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        490 => [[['_route' => 'app_reserva_new', '_controller' => 'App\\Controller\\ReservaController::new'], ['idRestaurante', 'idUser'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        509 => [[['_route' => 'app_reserva_show', '_controller' => 'App\\Controller\\ReservaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        528 => [
            [['_route' => 'app_reserva_edit', '_controller' => 'App\\Controller\\ReservaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [['_route' => 'app_reserva_edit_cancelar', '_controller' => 'App\\Controller\\ReservaController::editCancelar'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null],
        ],
        548 => [[['_route' => 'app_reserva_delete_restaurante', '_controller' => 'App\\Controller\\ReservaController::deleteRestaurante'], ['id'], ['POST' => 0], null, false, false, null]],
        557 => [[['_route' => 'app_reserva_delete', '_controller' => 'App\\Controller\\ReservaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        587 => [[['_route' => 'app_restaurante_show', '_controller' => 'App\\Controller\\RestauranteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        603 => [[['_route' => 'app_restaurante_edit', '_controller' => 'App\\Controller\\RestauranteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        622 => [[['_route' => 'restaurante_edit', '_controller' => 'App\\Controller\\RestauranteController::editRestaurante'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        631 => [[['_route' => 'app_restaurante_delete', '_controller' => 'App\\Controller\\RestauranteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        664 => [[['_route' => 'opinion_nueva', '_controller' => 'App\\Controller\\Usuario\\UserController::nueva'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        690 => [
            [['_route' => 'reseñas', '_controller' => 'App\\Controller\\Usuario\\UserController::reseñasUser'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
