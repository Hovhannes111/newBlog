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

Route::match(['get', 'post'],'/contact', 'SiteController@contact');

Route::get('/gallery', 'SiteController@gallery');

Route::match(['get', 'post'],'/registration', 'SiteController@registration');


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/back', 'BackController@login');
Route::get('/backend', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/backend/login/', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/backend/doLogin', 'Auth\LoginController@doLogin')->name('doLogin');
Route::get('/backend/logout/', 'Auth\LoginController@logout')->name('logout');
Route::post('/backend/logout/', 'Auth\LoginController@logout')->name('logout');
Route::resource('/backend/admin', 'Backend\AdminController', [
    'only' => ['index','store'],
    'middleware' => 'auth'
]);

//Route::get('/backend/pages', 'Backend\PageController@index');
//Route::match(['get', 'post'],'/backend/pages/create', 'Backend\PageController@create');
//


Route::resource('/backend/menus', 'Backend\MenuController');
Route::resource('/backend/pages', 'Backend\PageController');

//ajax
Route::post('/deleteMenu', 'Backend\AjaxController@deleteMenu');

