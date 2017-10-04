<?php
class Public_Controller extends Master_Controller
{
	function __construct()
	{
		parent::__construct();
		
		// check lang
		$this->template->title('สำนักโรคติดต่อนำโดยแมลง');
		$this->template->set_theme('thaivbd');
    	$this->template->set_layout('layout');
		
		// Set js
		$this->lang->load('admin');
	}
}
?>