<?php

class Card extends Eloquent {
// 自動的に cardsテーブルに接続

	public function person()
	{
		return $this->belongsTo('Person', 'person_id');
	}

	public function company()
	{
		return $this->belongsTo('Company', 'company_id');
	}
}
