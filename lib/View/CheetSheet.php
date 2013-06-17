<?php

class View_CheetSheet extends View {

	function setModel($model){

		foreach($block_model=$model->ref('Block') as $junk){
			$this->add('View_CheetBlock')->setModel($block_model);
		}

		parent::setModel($model);
	}

	function defaultTemplate(){
		return array('view/cheetsheet/main');
	}
}