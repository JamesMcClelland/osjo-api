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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->get('/', function() {
        return ['test' => true];
    });
});

Route::resource('customers', 'Api\\CustomersController', ['except' => ['create', 'edit']]);
Route::resource('addresses', 'Api\\AddressesController', ['except' => ['create', 'edit']]);
Route::resource('jobs', 'Api\\JobsController', ['except' => ['create', 'edit']]);
Route::resource('users', 'Api\\UsersController', ['except' => ['create', 'edit']]);
Route::resource('job-schedule', 'Api\\JobScheduleController', ['except' => ['create', 'edit']]);
Route::resource('companies', 'Api\\CompaniesController', ['except' => ['create', 'edit']]);