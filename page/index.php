<?php

class page_index extends Page {
	function init(){
		parent::init();


		$c=$this->add('Model_CheetSheet');
		$c->tryLoadAny();

		$this->add("View_CheetSheet")->setModel($c);
		
	}
}