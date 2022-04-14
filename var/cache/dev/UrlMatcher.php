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
        '/back/index' => [[['_route' => 'app_back_index', '_controller' => 'App\\Controller\\BackIndexController::index'], null, null, null, false, false, null]],
        '/carte/fidelite' => [[['_route' => 'app_carte_fidelite_index', '_controller' => 'App\\Controller\\CarteFideliteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/carte/fidelite/new' => [[['_route' => 'app_carte_fidelite_new', '_controller' => 'App\\Controller\\CarteFideliteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/code/reduction' => [[['_route' => 'app_code_reduction_index', '_controller' => 'App\\Controller\\CodeReductionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/code/reduction/new' => [[['_route' => 'app_code_reduction_new', '_controller' => 'App\\Controller\\CodeReductionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commande' => [[['_route' => 'app_commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commande/historique' => [[['_route' => 'app_commande_historique', '_controller' => 'App\\Controller\\CommandeController::historique'], null, ['GET' => 0], null, false, false, null]],
        '/commande/new' => [[['_route' => 'app_commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/lignec' => [[['_route' => 'app_lignec_index', '_controller' => 'App\\Controller\\LignecController::index'], null, ['GET' => 0], null, true, false, null]],
        '/lignec/new' => [[['_route' => 'app_lignec_new', '_controller' => 'App\\Controller\\LignecController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/panier' => [[['_route' => 'app_panier_index', '_controller' => 'App\\Controller\\PanierController::index'], null, ['GET' => 0], null, true, false, null]],
        '/panier/new' => [[['_route' => 'app_panier_new', '_controller' => 'App\\Controller\\PanierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/c(?'
                    .'|arte/fidelite/(?'
                        .'|([^/]++)(?'
                            .'|(*:202)'
                            .'|/edit(*:215)'
                            .'|(*:223)'
                        .')'
                        .'|cherchecarte(*:244)'
                        .'|([^/]++)/(?'
                            .'|\\{cherchecartebyid(*:282)'
                            .'|convert(*:297)'
                        .')'
                        .'|editpt(*:312)'
                    .')'
                    .'|o(?'
                        .'|de/reduction/([^/]++)(?'
                            .'|(*:349)'
                            .'|/edit(*:362)'
                            .'|(*:370)'
                        .')'
                        .'|mmande/([^/]++)(?'
                            .'|(*:397)'
                            .'|/edit(*:410)'
                            .'|(*:418)'
                        .')'
                    .')'
                .')'
                .'|/lignec/(?'
                    .'|([^/]++)(?'
                        .'|(*:451)'
                        .'|/edit(*:464)'
                        .'|(*:472)'
                    .')'
                    .'|recherchelig(*:493)'
                    .'|([^/]++)/(?'
                        .'|plus(*:517)'
                        .'|moins(*:530)'
                        .'|vider(*:543)'
                    .')'
                .')'
                .'|/panier/([^/]++)(?'
                    .'|(*:572)'
                    .'|/edit(*:585)'
                    .'|(*:593)'
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
        202 => [
            [['_route' => 'app_carte_fidelite_show', '_controller' => 'App\\Controller\\CarteFideliteController::show'], ['Num_carte'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_carte_fidelite_showadmin', '_controller' => 'App\\Controller\\CarteFideliteController::showadmin'], ['Num_carte'], ['GET' => 0], null, false, true, null],
        ],
        215 => [[['_route' => 'app_carte_fidelite_edit', '_controller' => 'App\\Controller\\CarteFideliteController::edit'], ['Num_carte'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        223 => [[['_route' => 'app_carte_fidelite_delete', '_controller' => 'App\\Controller\\CarteFideliteController::delete'], ['Num_carte'], ['POST' => 0], null, false, true, null]],
        244 => [[['_route' => 'cherchercarte', '_controller' => 'App\\Controller\\CarteFideliteController::cherchercarte'], [], null, null, false, false, null]],
        282 => [[['_route' => 'cherchercartebyid', '_controller' => 'App\\Controller\\CarteFideliteController::cherchercartebyid'], ['Num_carte'], ['GET' => 0], null, false, false, null]],
        297 => [[['_route' => 'app_carte_fidelite_convert', '_controller' => 'App\\Controller\\CarteFideliteController::convertirlespoints'], ['Num_carte'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        312 => [[['_route' => 'app_carte_fidelite_editpt', '_controller' => 'App\\Controller\\CarteFideliteController::editpt'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        349 => [[['_route' => 'app_code_reduction_show', '_controller' => 'App\\Controller\\CodeReductionController::show'], ['code'], ['GET' => 0], null, false, true, null]],
        362 => [[['_route' => 'app_code_reduction_edit', '_controller' => 'App\\Controller\\CodeReductionController::edit'], ['code'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        370 => [[['_route' => 'app_code_reduction_delete', '_controller' => 'App\\Controller\\CodeReductionController::delete'], ['code'], ['POST' => 0], null, false, true, null]],
        397 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id_commande'], ['GET' => 0], null, false, true, null]],
        410 => [[['_route' => 'app_commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['id_commande'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        418 => [[['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id_commande'], ['POST' => 0], null, false, true, null]],
        451 => [[['_route' => 'app_lignec_show', '_controller' => 'App\\Controller\\LignecController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        464 => [[['_route' => 'app_lignec_edit', '_controller' => 'App\\Controller\\LignecController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        472 => [[['_route' => 'app_lignec_delete', '_controller' => 'App\\Controller\\LignecController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        493 => [[['_route' => 'rechercherlig', '_controller' => 'App\\Controller\\LignecController::prix'], [], null, null, false, false, null]],
        517 => [[['_route' => 'app_lignec_plus', '_controller' => 'App\\Controller\\LignecController::Augmenter'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        530 => [[['_route' => 'app_lignec_moins', '_controller' => 'App\\Controller\\LignecController::dimunier'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        543 => [[['_route' => 'app_vider', '_controller' => 'App\\Controller\\LignecController::viderp'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        572 => [[['_route' => 'app_panier_show', '_controller' => 'App\\Controller\\PanierController::show'], ['id_panier'], ['GET' => 0], null, false, true, null]],
        585 => [[['_route' => 'app_panier_edit', '_controller' => 'App\\Controller\\PanierController::edit'], ['id_panier'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        593 => [
            [['_route' => 'app_panier_delete', '_controller' => 'App\\Controller\\PanierController::delete'], ['id_panier'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
