<?php

class page_user_cheetsheets extends page_user{
	function page_index(){
		// parent::init();

		$crud=$this->add('CRUD');
		$crud->setModel($this->api->auth->model->ref('ActiveProject')->tryLoadAny()->ref('CheetSheet'));

		if(!$crud->isEditing()){
			$crud->grid->addColumn('expander','blocks');
		}
	}

	function page_blocks(){
		$this->removeHeader();
		
		$this->api->stickyGET('cheetsheet_id');
		$cs=$this->add('Model_CheetSheet')->load($_GET['cheetsheet_id']);

		$crud=$this->add('CRUD');
		$crud->setModel($cs->ref('Block'));

	}
}