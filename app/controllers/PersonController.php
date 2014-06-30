<?php

class PersonController extends BaseController {


	public function addPerson()
	{
		$v = Person::validate(Input::all()); //POSTデータをValidation

		if($v->passes()) {
			$person = Person::create(Input::all());
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

