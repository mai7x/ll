<?php

class Person extends Eloquent {
	protected $table = 'people';
	protected $guarded = array('id','created_at','updated_at');
	protected $fillable = array(
		'firstname',
		'lastname',
		'lastname_furigana',
		'firstname_furigana',
		'foreign',
		'information',
		);

	public static function validate($input){
		$rules = array(
				'lastname' => 'Required',
			      );

		return Validator::make($input,$rules);
	}

	public function card()
	{
		return $this->hasMany('Card');
	}
}
