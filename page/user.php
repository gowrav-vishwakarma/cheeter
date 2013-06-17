<?php

class page_user extends Page {
	protected $page_title;
	protected $user_menus;

	function init(){
		parent::init();
		$this->setUpHeader();

	}

	function setUpHeader(){
		$this->page_title = $this->add('H2');
		$this->page_title->set("Welcome ". $this->api->auth->model['name'])->sub($this->api->auth->model->ref('ActiveProject')->tryLoadAny()->get('name'));


		$this->user_menus = $this->add('Menu');
		$this->user_menus
		->addMenuItem('user_projects','My Projects')
		->addMenuItem('user_cheetsheets','Cheet Sheets')
		->addMenuItem('user_profile','My Profile')
		;
	}

	function removeHeader(){
		$this->page_title->destroy();
		$this->user_menus->destroy();
	}

}