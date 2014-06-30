<?php

class Company extends Eloquent {
// 自動的に companiesテーブルに接続

	protected $guarded = array('id','created_at','updated_at');
	protected $fillable = array('company_name','company_information');

	public function card()
	{
		return $this->hasMany('Card');
	}


	public static function validate($input){
		$rules = array(
				'company_name' => 'Required',
			      );

		return Validator::make($input,$rules);
	}
	

}
