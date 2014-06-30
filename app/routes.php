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
//	return View::make('greeting', array('name' => 'Taylor'));
	return View::make('hello');
});

Route::get('companies',function()
{
	$data['companies'] = Company::all(); // CompanyModelの全情報を取得


	return View::make('companies',$data );
});

Route::get('person/add', function(){
	$data['select_menu_of_companies'] = DB::table('companies')->lists('company_name','id');
	return View::make('add_person',$data);
});
Route::get('companies/add', function(){
	return View::make('add_company');
});

Route::post('companies/add', 'CompanyController@addCompany');
Route::post('person/add', 'PersonController@addPerson');

Route::get('companies/view/{id}',function($id){
	$data['company'] = Company::find($id);
	$data['cards'] = $data['company']->card;
	return View::make('view_company',$data );

});
Route::get('companies/delete/{id}',function($id){
	$company = Company::find($id);
	$company->delete();

	$data['companies'] = Company::all(); // CompanyModelの全情報を取得
	return View::make('companies',$data );
});




//ここから下は参考情報
Route::get('user/{id}', 'UserController@showProfile');
Route::get('home', 'HomeController@showWelcome');
