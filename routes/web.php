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
    return view('welcome');
});

Route::get('/usecases', function () {
    return view('useCases');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::post('/createTenant', 'TenantController@createTenant');

Route::get('/createTenant', 'TenantController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/createEmail', 'EmailSignUpController@createEmail');
