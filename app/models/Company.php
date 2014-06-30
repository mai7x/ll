<?php

class Company extends Eloquent {
// 自動的に companiesテーブルに接続

	public function card()
	{
		return $this->hasMany('Card');
	}

}
