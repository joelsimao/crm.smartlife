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

Route::get('/', function () {
    return view('adminlte::auth.login');
});

Route::get('/register', function(){
    return view('adminlte::auth.register');
});

Route::get('/home', function(){
    return view('adminlte::home');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Route::resource('client', 'ClientController');

Route::resource('job', 'JobController', ['only' => [
    'create', 'store'
]]);

Route::get('/age', 'ScriptController@age_calculator');