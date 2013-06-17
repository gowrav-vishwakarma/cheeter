<?php

class Model_User extends Model_Table {
	var $table="user";

	function init(){
		parent::init();
		$this->addField('name')->mandatory('Please specify your name');
		$this->addField('username')->mandatory('username is must');
		$this->addField('password')->type('password')->mandatory('Please give some password');

		$this->hasMany('Project','user_id');
		$this->hasMany('ActiveProject','user_id');
	}
}