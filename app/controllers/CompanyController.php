<?php

class CompanyController extends BaseController {

	public function index()
	{
		$companies = Company::all(); // CompanyModelの全情報を取得


		$data = array('companies' => $companies);
		return View::make('companies',$data );


	}

	public function addCompany()
	{
		$v = Company::validate(Input::all()); //POSTデータをValidation

		if($v->passes()) {
			Company::create(array(
				'company_name' => Input::get('company_name'),
				'company_information' => Input::has('company_information') ? Input::get('company_information') : null,
					     ));

			return 'Added a Company';

		}else{ // Validation失敗の場合
			
			return Redirect::to('companies');
			//return Redirect::to('companies/add')->withErrors($v->getMessages());
		}
		return View::make('add_company');

	}
}

