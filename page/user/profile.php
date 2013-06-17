<?php

class page_user_profile extends page_user{
	function init(){
		parent::init();

		$this->add('H3')->set("manage Your Profile here");

		$form=$this->add('Form');
		$form->setModel($this->api->auth->model, array('name','password'));
		$form->addField('password','re_password');

		$form->addSubmit('Update');

		if($form->isSubmitted()){
			if($form->get('password') != $form->get('re_password'))
				$form->displayError('re_password','Passwords must match');

			$form->update();
			$form->js()->univ()->successMessage("Your Profile has been updated")->execute();
		}

	}
}