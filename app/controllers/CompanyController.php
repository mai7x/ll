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

		if($v->passes()) { //ValidationがOKの場合
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

	public function editCompany($id)
	{
		$v = Company::validate(Input::all()); //POSTデータをValidation

		if($v->passes()) { //ValidationがOKの場合

			$company = Company::find($id);
			$company->company_name = Input::get('company_name');
			$company->company_information = Input::get('company_information');

			$company->save();
		//	Company::create(array(
		//		'company_name' => Input::get('company_name'),
		//		'company_information' => Input::has('company_information') ? Input::get('company_information') : null,
		//	     ));

			return 'Edited a Company';

		}else{ // Validation失敗の場合
			
			return Redirect::to('companies');
			//return Redirect::to('companies/add')->withErrors($v->getMessages());
		}
		return View::make('add_company');

	}
}

