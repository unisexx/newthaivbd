<?php
class Menus extends Public_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function inc_home()
	{
		$data['menus'] = new Menu();
		$data['menus']->where('pid is null')->order_by('orderlist','asc')->get();
		$this->load->view('inc_home',$data);
	}
}
?>