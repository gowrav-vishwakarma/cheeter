<?php

class Model_Project extends Model_Table {
	var $table="project";

	function init(){
		parent::init();

		$this->hasOne('User','user_id');
		$this->addField('name');
		$this->addField('is_active')->type('boolean');

		$this->hasMany('CheetSheet','project_id');
	}

	function activate(){
		$user=$this->ref('user_id');

		foreach($p=$user->ref('Project') as $junk){
			$p['is_active']=false;
			$p->save();
		}

		$this['is_active'] = true;
		$this->save();
	}
}