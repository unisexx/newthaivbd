<?php
class Albums extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function inc_home(){
		$data['pics'] = new Picture();
		$data['pics']->order_by('id','desc')->get();
		$this->load->view('inc_home',$data);
	}
}
?>