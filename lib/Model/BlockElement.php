<?php

class Model_BlockElement extends Model_Table {
	var $table='element';

	function init(){
		parent::init();

		$this->hasOne('Block','block_id');
		$this->addField('type')->enum(array("Property","Method"));
		$this->addField('name');
		$this->addField('has_example')->type('boolean');


	}

}