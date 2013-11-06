<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('/', function()
{
	return View::make('home');
});*/

Route::get('/', array(
    'as'    => 'home',
    'uses'  => 'HomeController@showWelcome'
));
Route::get('/checkslist', array(
    'as'    => 'checklist',
    'uses'  => 'ReceivablesController@getCheckList'
));
Route::get('/search-by-check-number/{q}', array(
    'as'    => 'search-check-number',
    'uses'  => 'ReceivablesController@searchByNumber'
));