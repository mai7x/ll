<?php

class PersonController extends BaseController {


	public function addPerson()
	{
		$v = Person::validate(Input::only([
			'firstname',
			'lastname',
			'lastname_furigana',
			'firstname_furigana',
			'foreign',
			'information'
			])); //POSTデータをValidation

		if($v->passes()) {
			$person = Person::create(Input::only(['company_id','department','position','postcode','address','email','tel','fax']));
			$card = new Card(Input::all());
			$card = $person->card()->save($card);
//			Card::create(Input::all());

//			return 'Added a Person';

			return Redirect::to('companies');

		}else{ // Validation失敗の場合
			
			return Redirect::to('companies');
			//return Redirect::to('companies/add')->withErrors($v->getMessages());
		}

	}
}

