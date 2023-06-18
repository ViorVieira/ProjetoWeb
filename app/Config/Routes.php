<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get("cadC", "Dados::cadastrarC");
$routes->post("CadastrarC2", "Dados::cadastrarC2");
$routes->get("cadU","Dados::cadastrarU");
$routes->post("cadU2","Dados::cadastrarU2");
$routes->get("cadA", "Dados::cadastrarAnimal");
$routes->post("CadA2", "Dados::cadastrarAnimal2");
$routes->get("cadTipoServ", "Dados::cadastrarTipoServ");
$routes->post("cadTipoServ", "Dados::cadastrarTipoServ2");
$routes->get("cadServico", "Dados::cadastrarServico");
$routes->post("cadServico", "Dados::cadastrarServico2");
$routes->get("cadOcupacao", "Dados::cadastrarOcupacao");
$routes->post("cadOcupacao", "Dados::cadastrarOcupacao2");
$routes->get("cadAtendimento", "Dados::cadastrarAtendimento");
$routes->post("cadAtendimento", "Dados::cadastrarAtendimento2");

$routes->get("ConAdm", "Dados::telaConsultaAdm");

$routes->get("ConCli", "Dados::consultaCli");
$routes->post("ConCli", "Dados::consultaCli2");
$routes->get("ConAnimal", "Dados::consultaAnimais");
$routes->post("ConAnimal", "Dados::consultaAnimais2");
$routes->get("ConUsuario", "Dados::consultaUsuario");
$routes->post("ConUsuario", "Dados::consultaUsuario2");
$routes->get("ConOcupacao", "Dados::consultaOcupacao");
$routes->post("ConOcupacao", "Dados::consultaOcupacao2");
$routes->get("ConTipoServico", "Dados::consultaTipoServico");
$routes->post("ConTipoServico", "Dados::consultaTipoServico2");
$routes->get("ConServico", "Dados::consultaServico");
$routes->post("ConServico", "Dados::consultaServico2");
$routes->get("ConAtendimento", "Dados::consultaAtendimento");
$routes->post("ConAtendimento", "Dados::consultaAtendimento2");

$routes->post("LoginFC", "Dados::loginCli2");
$routes->get("LoginFC", "Dados::loginCli2");
$routes->get("logout", "Dados::logout"); 
$routes->get("LoginU", "Dados::loginUsuario");
$routes->post("LoginU", "Dados::loginUsuario2");


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
