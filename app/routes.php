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
	return View::make('modules.dash');
});


Route::get('/tournament', function()
{
	return View::make('modules.tournament');
});

Route::get('/events', function()
{
	return View::make('modules.events');
});

Route::get('/quiz', function()
{
	return View::make('modules.quiz');
});

Route::get('/project', function()
{
	return View::make('modules.project');
});

Route::get('/course', function()
{
	return View::make('modules.course');
});

Route::get('/drive', function()
{
	return View::make('modules.drive');
});

Route::get('/calendar', function()
{
	return View::make('modules.calendar');
});
