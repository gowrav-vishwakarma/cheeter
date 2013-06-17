<?php

class Model_Block extends Model_Table {
	var $table ="block";

	function init(){
		parent::init();

		$this->hasOne('CheetSheet','cheetsheet_id');
		$this->addField('name');

		$this->hasMany('BlockElement','block_id');
	}
}