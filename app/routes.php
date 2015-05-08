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

Route::get('/', function()
{
	return View::make('main');
});

Route::post('webhook', function()
{
	header('HTTP/1.1 200 OK');
	$body = @file_get_contents('php://input');
	$event = json_decode($body);
	$charge = $event->data->object;
	//logic with object of webhook
});
//Bind Process Controller
Route::resource('process/payment', 'ProcessController@payment');
