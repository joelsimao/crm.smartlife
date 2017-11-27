<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Auth\LoginController@index' );

Route::get('/login', 'Auth\LoginController@showLoginForm()' );

Route::get('/register', function(){
    return view('adminlte::auth.register');
});

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Route::resource('user', 'UserController', ['only' => [
    'update'
]]);

Route::resource('client', 'ClientController');

Route::resource('job', 'JobController', ['only' => [
    'create', 'store'
]]);

Route::resource('agency', 'AgencyController', ['only' => [
    'create', 'store'
]]);

Route::resource('supervisor', 'SupervisorController', ['only' => [
    'create', 'store'
]]);

Route::resource('operator', 'OperatorController', ['only' => [
    'create', 'store'
]]);

Route::resource('manager', 'ManagerController', ['only' => [
    'create', 'store'
]]);

Route::resource('seller', 'SellerController', ['only' => [
    'create', 'store'
]]);


Route::get('/online_users', function(){
    return view('admin.include.online_users');
});

Route::get('/club', function(){
    return view('adminlte::home');
});

Route::get('/users/{id}/settings', 'UserController@show');

Route::get('/age', 'ScriptController@age_calculator');
Route::get('/get_supervisor', 'ScriptController@get_supervisor');
Route::get('/tour_calculate', 'ScriptController@tour_calculate');
