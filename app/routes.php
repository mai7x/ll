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

// Login 
Route::get('login', function(){
	return View::make('login');
});

Route::post('login','UserController@doLogin');


// Logout
Route::get('logout', function()
{
	 Auth::logout();
	return Redirect::to('login');
});

Route::group(array('before' => 'auth'), function()
{

	//Company Index
	Route::get('companies', function()
	{
		$data['companies'] = Company::all(); // CompanyModelの全情報を取得


		return View::make('companies',$data );
	});

	// Add Company
	Route::get('companies/add', function(){
		return View::make('add_company');
	});
	Route::post('companies/add', 'CompanyController@addCompany');

	// Edit Company
	Route::get('companies/edit/{id}', function($id){
		$data['company'] = Company::find($id);
		return View::make('edit_company',$data);
	});
	Route::post('companies/edit/{id}', 'CompanyController@editCompany');

	//View Company
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

	//Card Index
	Route::get('cards', function()
	{
		$data['cards'] =Card::all(); // CardModelの全情報を取得

		return View::make('cards',$data );
	});

	// Edit Card
	Route::get('cards/edit/{id}', function($id){
		$data['card'] = Card::find($id);
		return View::make('edit_card',$data);
	});
	Route::post('cards/edit/{id}', 'CardController@editCard');

	//Add Person and Card
	Route::get('person/add', function(){
		$data['select_menu_of_companies'] = DB::table('companies')->lists('company_name','id');
		$data['select_menu_of_companies'][0] = "選択してください";
		return View::make('add_person',$data);
	});


	Route::post('person/add', 'PersonController@addPerson');




});


