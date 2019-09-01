<?php

use Dingo\Api\Routing\Router;

/**
 * @var $api Router
 */
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function (Router $api) {
    $api->group(['prefix' => 'auth'], function (Router $api) {
        $api->post('login', 'App\Http\Controllers\AuthController@login')->name('auth.login');
        $api->post('logout', 'App\Http\Controllers\AuthController@logout')->name('auth.logout');
    });

    $api->group(['middleware' => 'api.auth'], function (Router $api) {
        $api->post('refresh', 'App\Http\Controllers\AuthController@refresh')->name('auth.refresh');
        $api->post('me', 'App\Http\Controllers\AuthController@me')->name('auth.me');
        $api->resource('customers', 'App\Http\Controllers\Api\CustomersController', ['except' => ['create', 'edit']]);
        $api->resource('addresses', 'App\Http\Controllers\Api\AddressesController', ['except' => ['create', 'edit']]);
        $api->resource('jobs', 'App\Http\Controllers\Api\JobsController', ['except' => ['create', 'edit']]);
        $api->resource('users', 'App\Http\Controllers\Api\UsersController', ['except' => ['create', 'edit']]);
        $api->resource('people', 'App\Http\Controllers\Api\PeopleController', ['except' => ['create', 'edit']]);
        $api->resource('job-schedule', 'App\Http\Controllers\Api\JobScheduleController', ['except' => ['create', 'edit']]);
        $api->resource('companies', 'App\Http\Controllers\Api\CompaniesController', ['except' => ['create', 'edit']]);
    });

});
