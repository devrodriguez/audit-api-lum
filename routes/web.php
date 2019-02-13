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

$router->get('/keygen', function() {
    return str_random(32);
});

$router->group(['prefix' => 'api'], function($router) {

    $router->get('/audits', 'AuditController@index');
    $router->get('/audits/all', 'AuditController@all');
    $router->post('/audits', 'AuditController@store');
    $router->get('/audits/{id}', 'AuditController@show');
    $router->put('/audits/{id}', 'AuditController@update');
    $router->delete('/audits/{id}', 'AuditController@destroy');
    $router->post('/audits/criteria', 'AuditController@addCriteria');

    $router->get('/auditors', 'AuditorController@index');
    $router->get('/auditors/all', 'AuditorController@all');
    $router->post('/auditors', 'AuditorController@store');
    $router->get('/auditors/{id}', 'AuditorController@show');
    $router->put('/auditors/{id}', 'AuditorController@update');
    $router->delete('/auditors/{id}', 'AuditorController@destroy');

    // $router->get('/redirect', function() {
    //     return redirect('/api/auditors');
    // });
    
    $router->get('/criterias', 'CriteriaController@index');
    $router->post('/criterias', 'CriteriaController@store');
    $router->get('/criterias/{id}', 'CriteriaController@show');
    $router->put('/criterias/{id}', 'CriteriaController@update');
    $router->delete('/criterias/{id}', 'CriteriaController@destroy');

    $router->get('/enterprises', 'EnterpriseController@index');
    $router->post('/enterprises', 'EnterpriseController@store');
    $router->get('/enterprises/{id}', 'EnterpriseController@show');
    $router->put('/enterprises/{id}', 'EnterpriseController@update');
    $router->delete('/enterprises/{id}', 'EnterpriseController@destroy');

    $router->get('/roles', 'RoleController@index');
    $router->post('/roles', 'RoleController@store');
    $router->get('/roles/{id}', 'RoleController@show');
    $router->put('/roles/{id}', 'RoleController@update');
    $router->delete('/roles/{id}', 'RoleController@destroy');

});
