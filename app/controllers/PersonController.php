<?php

class PersonController extends BaseController {


	public function addPerson()
	{
		$v_person = Person::validate(Input::only([
			'firstname',
			'lastname',
			'lastname_furigana',
			'firstname_furigana',
			'foreign',
			'information'
			])); //POSTデータをValidation

		$v_card = Card::validate(Input::only([
			'company_id','department','position',
			'postcode','address','email','tel','fax'])); //PostデータをValidation
			
		if($v_person->fails()) { //PersonValidationNG
			return Redirect::to('person/add')->withErrors($v_person)
				->withInput(Input::all());
		} //end Person Validation

		if($v_card->fails()) { //CardValidationNG
			return Redirect::to('person/add')->withErrors($v_card)
				->withInput(Input::all());
		} //end Card Validation

		$person =new Person(Input::only([
			'firstname',
			'lastname',
			'lastname_furigana',
			'firstname_furigana',
			'foreign',
			'information'
			]));
		$person->save();
		
		$card = new Card(Input::only([
			'company_id','department','position',
			'postcode','address','email','tel','fax']));
		$card->person_id = $person->id;
		$card->save();

		return Redirect::to('companies');

	} //end addPerson
}

