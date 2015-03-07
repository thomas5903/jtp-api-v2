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

//====================== Public Routes ================================
//publi
Route::get('/api/v1/public', function()
{
	return View::make('hello');
});

//avail appts
Route::group(array('prefix' => 'api/v1/public'), function()
{
    Route::resource('availAppts', 'AvailApptsController');
});

//locations
Route::group(array('prefix' => 'api/v1/public'), function()
{
    Route::resource('locations', 'LocationsController');
});

//====================== secured routes ================================

Route::group(array('prefix' => 'api/v1/secured', 'before' => 'auth.basic'), function()
{
    Route::resource('bookedAppts', 'bookedApptsController');
});

//for testing auth
Route::get('/authtest', array('before' => 'auth.basic', function()
{
    return View::make('hello');
}));
//
// Route group for API versioning

Route::group(array('prefix' => 'api/v1/secured', 'before' => 'auth.basic'), function()
{
    Route::resource('clients', 'ClientsController');
});