<?php

class Model_ActiveProject extends Model_Project{
	function init(){
		parent::init();

		$this->addCondition('is_active',true);
	}
}