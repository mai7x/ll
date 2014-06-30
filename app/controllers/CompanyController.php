<?php

class CompanyController extends BaseController {

	public function index()
	{
		$companies = Company::all(); // CompanyModelの全情報を取得


		$data = array('companies' => $companies);
		return View::make('companies',$data );


	}
}

