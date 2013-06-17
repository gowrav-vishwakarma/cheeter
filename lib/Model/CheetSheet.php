<?php

class Model_CheetSheet extends Model_Table{
		var $table='cheetsheet';

		function init(){
			parent::init();
			
			$this->hasOne("Project",'project_id');
			$this->addField('name');

			$this->hasMany('Block','cheetsheet_id');
		}
}