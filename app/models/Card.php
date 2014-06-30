<?php

class Card extends Eloquent {
// 自動的に cardsテーブルに接続

	protected $guarded = array('id','created_at','updated_at');
	protected $fillable = array('person_id','company_id','department','position','postcode','address','email','tel','fax');
	public function person()
	{
		return $this->belongsTo('Person', 'person_id');
	}

	public function company()
	{
		return $this->belongsTo('Company', 'company_id');
	}

	public static function validate($input){
		$rules = array(
				'company_id' => 'Required|Min:1',
			      );

		return Validator::make($input,$rules);
	}
}
