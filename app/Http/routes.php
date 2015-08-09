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

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('articles', 'ArticlesController');
Route::resource('comments', 'CommentsController');
Route::resource('UploadRecentProject', 'UploadRecentProjectController');
Route::resource('WorkSample', 'WorkSampleController');

Route::get('/', 'PagesController@index');
Route::get('/blog', 'PagesController@blog');
Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');
Route::get('/sample', 'PagesController@sample');
Route::resource('/processcontact', 'ProcessContactController');
