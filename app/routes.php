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
	return View::make('hello');
});

Route::get('form', function()
{
	return View::make('form');
});

Route::post('form', function()
{
	
    Input::flashOnly('paragraphs');
    
    
    return Redirect::to('paragraph-results');
    
});

Route::get('paragraph-results', function()
{
	   return View::make('lorem');
});
