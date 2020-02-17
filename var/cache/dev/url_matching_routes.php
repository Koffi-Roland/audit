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
        '/critere/surveille' => [[['_route' => 'critere_surveille_index', '_controller' => 'App\\Controller\\CritereSurveilleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/critere/surveille/new' => [[['_route' => 'critere_surveille_new', '_controller' => 'App\\Controller\\CritereSurveilleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/entreprise' => [[['_route' => 'entreprise_index', '_controller' => 'App\\Controller\\EntrepriseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/entreprise/new' => [[['_route' => 'entreprise_new', '_controller' => 'App\\Controller\\EntrepriseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/equipe' => [[['_route' => 'equipe_index', '_controller' => 'App\\Controller\\EquipeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/equipe/new' => [[['_route' => 'equipe_new', '_controller' => 'App\\Controller\\EquipeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/etape' => [[['_route' => 'etape_index', '_controller' => 'App\\Controller\\EtapeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/etape/new' => [[['_route' => 'etape_new', '_controller' => 'App\\Controller\\EtapeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/identificationccp/danger' => [[['_route' => 'identificationccp_danger_index', '_controller' => 'App\\Controller\\IdentificationccpDangerController::index'], null, ['GET' => 0], null, true, false, null]],
        '/identificationccp/danger/new' => [[['_route' => 'identificationccp_danger_new', '_controller' => 'App\\Controller\\IdentificationccpDangerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/matiere/premiere' => [[['_route' => 'matiere_premiere_index', '_controller' => 'App\\Controller\\MatierePremiereController::index'], null, ['GET' => 0], null, true, false, null]],
        '/matiere/premiere/new' => [[['_route' => 'matiere_premiere_new', '_controller' => 'App\\Controller\\MatierePremiereController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/matiere/utiliser' => [[['_route' => 'matiere_utiliser_index', '_controller' => 'App\\Controller\\MatiereUtiliserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/matiere/utiliser/new' => [[['_route' => 'matiere_utiliser_new', '_controller' => 'App\\Controller\\MatiereUtiliserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/personnel' => [[['_route' => 'personnel_index', '_controller' => 'App\\Controller\\PersonnelController::index'], null, ['GET' => 0], null, true, false, null]],
        '/personnel/new' => [[['_route' => 'personnel_new', '_controller' => 'App\\Controller\\PersonnelController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/poste' => [[['_route' => 'poste_index', '_controller' => 'App\\Controller\\PosteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/poste/new' => [[['_route' => 'poste_new', '_controller' => 'App\\Controller\\PosteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produir' => [[['_route' => 'produir_index', '_controller' => 'App\\Controller\\ProduirController::index'], null, ['GET' => 0], null, true, false, null]],
        '/produir/new' => [[['_route' => 'produir_new', '_controller' => 'App\\Controller\\ProduirController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produit' => [[['_route' => 'produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/produit/new' => [[['_route' => 'produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/systeme/surveillance' => [[['_route' => 'systeme_surveillance_index', '_controller' => 'App\\Controller\\SystemeSurveillanceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/systeme/surveillance/new' => [[['_route' => 'systeme_surveillance_new', '_controller' => 'App\\Controller\\SystemeSurveillanceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/travailler/personnel' => [[['_route' => 'travailler_personnel_index', '_controller' => 'App\\Controller\\TravaillerPersonnelController::index'], null, ['GET' => 0], null, true, false, null]],
        '/travailler/personnel/new' => [[['_route' => 'travailler_personnel_new', '_controller' => 'App\\Controller\\TravaillerPersonnelController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/type/probleme' => [[['_route' => 'type_probleme_index', '_controller' => 'App\\Controller\\TypeProblemeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/type/probleme/new' => [[['_route' => 'type_probleme_new', '_controller' => 'App\\Controller\\TypeProblemeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/critere/surveille/([^/]++)(?'
                    .'|(*:199)'
                    .'|/edit(*:212)'
                    .'|(*:220)'
                .')'
                .'|/e(?'
                    .'|ntreprise/([^/]++)(?'
                        .'|(*:255)'
                        .'|/edit(*:268)'
                        .'|(*:276)'
                    .')'
                    .'|quipe/([^/]++)(?'
                        .'|(*:302)'
                        .'|/edit(*:315)'
                        .'|(*:323)'
                    .')'
                    .'|tape/([^/]++)(?'
                        .'|(*:348)'
                        .'|/edit(*:361)'
                        .'|(*:369)'
                    .')'
                .')'
                .'|/identificationccp/danger/([^/]++)(?'
                    .'|(*:416)'
                    .'|/edit(*:429)'
                    .'|(*:437)'
                .')'
                .'|/matiere/(?'
                    .'|premiere/([^/]++)(?'
                        .'|(*:478)'
                        .'|/edit(*:491)'
                        .'|(*:499)'
                    .')'
                    .'|utiliser/([^/]++)(?'
                        .'|(*:528)'
                        .'|/edit(*:541)'
                        .'|(*:549)'
                    .')'
                .')'
                .'|/p(?'
                    .'|ersonnel/([^/]++)(?'
                        .'|(*:584)'
                        .'|/edit(*:597)'
                        .'|(*:605)'
                    .')'
                    .'|oste/([^/]++)(?'
                        .'|(*:630)'
                        .'|/edit(*:643)'
                        .'|(*:651)'
                    .')'
                    .'|rodui(?'
                        .'|r/([^/]++)(?'
                            .'|(*:681)'
                            .'|/edit(*:694)'
                            .'|(*:702)'
                        .')'
                        .'|t/([^/]++)(?'
                            .'|(*:724)'
                            .'|/edit(*:737)'
                            .'|(*:745)'
                        .')'
                    .')'
                .')'
                .'|/systeme/surveillance/([^/]++)(?'
                    .'|(*:789)'
                    .'|/edit(*:802)'
                    .'|(*:810)'
                .')'
                .'|/t(?'
                    .'|ravailler/personnel/([^/]++)(?'
                        .'|(*:855)'
                        .'|/edit(*:868)'
                        .'|(*:876)'
                    .')'
                    .'|ype/probleme/([^/]++)(?'
                        .'|(*:909)'
                        .'|/edit(*:922)'
                        .'|(*:930)'
                    .')'
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
        199 => [[['_route' => 'critere_surveille_show', '_controller' => 'App\\Controller\\CritereSurveilleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        212 => [[['_route' => 'critere_surveille_edit', '_controller' => 'App\\Controller\\CritereSurveilleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        220 => [[['_route' => 'critere_surveille_delete', '_controller' => 'App\\Controller\\CritereSurveilleController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        255 => [[['_route' => 'entreprise_show', '_controller' => 'App\\Controller\\EntrepriseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        268 => [[['_route' => 'entreprise_edit', '_controller' => 'App\\Controller\\EntrepriseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        276 => [[['_route' => 'entreprise_delete', '_controller' => 'App\\Controller\\EntrepriseController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        302 => [[['_route' => 'equipe_show', '_controller' => 'App\\Controller\\EquipeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        315 => [[['_route' => 'equipe_edit', '_controller' => 'App\\Controller\\EquipeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        323 => [[['_route' => 'equipe_delete', '_controller' => 'App\\Controller\\EquipeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        348 => [[['_route' => 'etape_show', '_controller' => 'App\\Controller\\EtapeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        361 => [[['_route' => 'etape_edit', '_controller' => 'App\\Controller\\EtapeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        369 => [[['_route' => 'etape_delete', '_controller' => 'App\\Controller\\EtapeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        416 => [[['_route' => 'identificationccp_danger_show', '_controller' => 'App\\Controller\\IdentificationccpDangerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        429 => [[['_route' => 'identificationccp_danger_edit', '_controller' => 'App\\Controller\\IdentificationccpDangerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        437 => [[['_route' => 'identificationccp_danger_delete', '_controller' => 'App\\Controller\\IdentificationccpDangerController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        478 => [[['_route' => 'matiere_premiere_show', '_controller' => 'App\\Controller\\MatierePremiereController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        491 => [[['_route' => 'matiere_premiere_edit', '_controller' => 'App\\Controller\\MatierePremiereController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        499 => [[['_route' => 'matiere_premiere_delete', '_controller' => 'App\\Controller\\MatierePremiereController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        528 => [[['_route' => 'matiere_utiliser_show', '_controller' => 'App\\Controller\\MatiereUtiliserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        541 => [[['_route' => 'matiere_utiliser_edit', '_controller' => 'App\\Controller\\MatiereUtiliserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        549 => [[['_route' => 'matiere_utiliser_delete', '_controller' => 'App\\Controller\\MatiereUtiliserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        584 => [[['_route' => 'personnel_show', '_controller' => 'App\\Controller\\PersonnelController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        597 => [[['_route' => 'personnel_edit', '_controller' => 'App\\Controller\\PersonnelController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        605 => [[['_route' => 'personnel_delete', '_controller' => 'App\\Controller\\PersonnelController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        630 => [[['_route' => 'poste_show', '_controller' => 'App\\Controller\\PosteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        643 => [[['_route' => 'poste_edit', '_controller' => 'App\\Controller\\PosteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        651 => [[['_route' => 'poste_delete', '_controller' => 'App\\Controller\\PosteController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        681 => [[['_route' => 'produir_show', '_controller' => 'App\\Controller\\ProduirController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        694 => [[['_route' => 'produir_edit', '_controller' => 'App\\Controller\\ProduirController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        702 => [[['_route' => 'produir_delete', '_controller' => 'App\\Controller\\ProduirController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        724 => [[['_route' => 'produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        737 => [[['_route' => 'produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        745 => [[['_route' => 'produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        789 => [[['_route' => 'systeme_surveillance_show', '_controller' => 'App\\Controller\\SystemeSurveillanceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        802 => [[['_route' => 'systeme_surveillance_edit', '_controller' => 'App\\Controller\\SystemeSurveillanceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        810 => [[['_route' => 'systeme_surveillance_delete', '_controller' => 'App\\Controller\\SystemeSurveillanceController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        855 => [[['_route' => 'travailler_personnel_show', '_controller' => 'App\\Controller\\TravaillerPersonnelController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        868 => [[['_route' => 'travailler_personnel_edit', '_controller' => 'App\\Controller\\TravaillerPersonnelController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        876 => [[['_route' => 'travailler_personnel_delete', '_controller' => 'App\\Controller\\TravaillerPersonnelController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        909 => [[['_route' => 'type_probleme_show', '_controller' => 'App\\Controller\\TypeProblemeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        922 => [[['_route' => 'type_probleme_edit', '_controller' => 'App\\Controller\\TypeProblemeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        930 => [
            [['_route' => 'type_probleme_delete', '_controller' => 'App\\Controller\\TypeProblemeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
