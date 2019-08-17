<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->get('/', function() {
        return ['test' => true];
    });

    $api->group(['prefix' => 'auth'], function ($api) {
        $api->post('login', 'App\Http\Controllers\AuthController@login');
        $api->post('logout', 'App\Http\Controllers\AuthController@logout');
        $api->post('refresh', 'App\Http\Controllers\AuthController@refresh');
        $api->post('me', 'App\Http\Controllers\AuthController@me');
    });

    $api->group(['middleware' => 'auth'], function ($api) {
        $api->resource('customers', 'App\Http\Controllers\Api\CustomersController', ['except' => ['create', 'edit']]);
        $api->resource('addresses', 'App\Http\Controllers\Api\AddressesController', ['except' => ['create', 'edit']]);
        $api->resource('jobs', 'App\Http\Controllers\Api\JobsController', ['except' => ['create', 'edit']]);
        $api->resource('users', 'App\Http\Controllers\Api\UsersController', ['except' => ['create', 'edit']]);
        $api->resource('job-schedule', 'App\Http\Controllers\Api\JobScheduleController', ['except' => ['create', 'edit']]);
        $api->resource('companies', 'App\Http\Controllers\Api\CompaniesController', ['except' => ['create', 'edit']]);
    });

});
