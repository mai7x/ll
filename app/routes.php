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
return "hello World";
//	return View::make('greeting', array('name' => 'Taylor'));
	//return View::make('hello');
});

//Route::get('companies', 'CompanyController@index');
Route::get('companies',function()
{
	$companies = Company::all(); // CompanyModelの全情報を取得


	$data = array('companies' => $companies);
	return View::make('companies',$data );
});


Route::get('user/{id}', 'UserController@showProfile');
Route::get('home', 'HomeController@showWelcome');
