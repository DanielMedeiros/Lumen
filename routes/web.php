<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/teste','ExampleController@teste');

$router->get('/lista-usuario','APIController@ListaUsuario');

$router->get('/clientes','APIController@ListaClientes');

$router->get('/clientes/{id}','APIController@ListaCliente');

$router->post('/clientes','APIController@CadastraCliente');

$router->delete('/clientes/{id}','APIController@DeleteCliente');

$router->put('/clientes/{id}','APIController@AlteraCliente');