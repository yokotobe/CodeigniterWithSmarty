<?php

class Home extends CI_controller {
	public function index() {
		$data = array();
	
		$this->custom_smarty->assign('js', APPPATH.'/views/templates/base/base_js.tpl');
		$this->custom_smarty->assign('css', APPPATH.'/views/templates/base/base_css.tpl');
		$this->custom_smarty->assign('body',APPPATH.'/views/templates/pages/home.tpl');
		$this->custom_smarty->display(APPPATH.'/views/templates/base/page.tpl');
	} 

}

?>