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

Route::get('search','PagesController@search');

Route::get('search/{$request}','PagesController@search');

/* 
| Motions by year
*/

Route::get('motions-2013-and-earlier', 'PagesController@motions2013andearlier');

Route::get('motions-2013-and-earlier-mobile', 'PagesController@motions2013andearliermobile');

Route::get('motions2014-mobile', 'PagesController@motions2014mobile');

Route::get('motions2014', 'PagesController@motions2014');

Route::get('motions2014-mobile', 'PagesController@motions2014mobile');

Route::get('motions2015', 'PagesController@motions2015');

Route::get('motions2015-mobile', 'PagesController@motions2015mobile');

Route::get('motions2016', 'PagesController@motions2016');

Route::get('motions2016-mobile', 'PagesController@motions2016mobile');

Route::get('motions2017', 'PagesController@motions2017');

Route::get('motions2017-mobile', 'PagesController@motions2017mobile');

Route::get('motions2018', 'PagesController@motions2018');

Route::get('motions2018-mobile', 'PagesController@motions2018mobile');

Route::get('motions2019', 'PagesController@motions2019');

Route::get('motions2019-mobile', 'PagesController@motions2019mobile');

Route::get('motions2020', 'PagesController@motions2020');

Route::get('motions2020-mobile', 'PagesController@motions2020mobile');

Route::get('missingmotions', 'PagesController@missingmotions');

Route::get('random-motion', 'PagesController@randommotion');

Route::get('ten-random-motions', 'PagesController@tenrandommotions');

Route::get('wudc-motions', 'PagesController@wudcmotions');

Route::get('eudc-motions', 'PagesController@eudcmotions');

/* Pages not being used at the moment

Route::get('addmotions', 'PagesController@addmotions');

Route::get('motions/{id}','MotionsController@show');

Route::post('motions', 'MotionsController@addMotion')
*/