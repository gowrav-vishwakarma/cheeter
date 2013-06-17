<?php

class page_user_projects extends page_user{
	function init(){
		parent::init();

		$crud=$this->add('CRUD');
		$crud->setModel($this->api->auth->model->ref('Project'),array('name'),array('name','is_active'));

		if($_GET['activate']){
			$p=$this->add('Model_Project');
			$p->load($_GET['activate']);
			$p->activate();
			$crud->grid->js(null,array(
					$this->js()->univ()->successMessage("Project Activated"),
					$this->page_title->js()->reload()
					)
			)->reload()->execute();
		}

		if(!$crud->isEditing()){
			$crud->grid->addColumn('Button','activate');
		}



	}
}