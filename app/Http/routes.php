<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function(){

return view('welcome');

});
Route::get('/home', 'HomeController@index');
Route::get('order', 'OrdersController@index');
Route::get('apply', 'ApplysshowController@index');
Route::post('apply/store', 'ApplysController@store');
// 认证路由...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// 注册路由...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware' => 'auth'], function()
{
  
  Route::get('/', 'AdminHomeController@index');
  Route::resource('pages', 'PagesController');
  Route::resource('comments', 'CommentsController');
  Route::resource('applies', 'AppliesController');
});
Route::get('pages/{id}', 'PagesController@show');
Route::post('comment/store', 'CommentsController@store');

Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
