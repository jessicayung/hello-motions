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

Route::get('/', 'PagesController@index');

Route::get('about', 'PagesController@about');

Route::get('contact', 'PagesController@contact');

Route::get('search', 'PagesController@search');

Route::get('search/{term}','PagesController@search');

Route::get('/test/{squirrel}', ['uses' =>'SomeController@doSomething']);

Route::get('motions2015', 'PagesController@motions2015');

Route::get('addmotions', 'PagesController@addmotions');

Route::get('motions/{id}','MotionsController@show');

