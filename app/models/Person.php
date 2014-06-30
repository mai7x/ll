<?php

class Person extends Eloquent {
	protected $table = 'people';

	public function card()
	{
		return $this->hasMany('Card');
	}
}
