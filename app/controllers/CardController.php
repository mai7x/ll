<?php

class CardController extends BaseController {

	public function editCard($id)
	{
		$v = Card::validate(Input::all()); //POSTデータをValidation

		if($v->passes()) { //Validation OKの場合

			$card = Card::find($id);
			$card->department = Input::get('department');
			$card->position = Input::get('position');
			$card->postcode = Input::get('postcode');
			$card->address = Input::get('address');
			$card->email = Input::get('email');
			$card->tel = Input::get('tel');
			$card->fax = Input::get('fax');

			$card->save();

			return Redirect::to('cards');

		}else { //Validation NGの場合

			return Redirect::back()->withInput()->withErrors($v->messages());
		}

	} //end editCard

} //end CardController
