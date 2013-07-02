<?php
class Vdos extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data['categories'] = new Category();
		$data['categories']->where('module = "vdos"')->order_by('id','desc')->get();
		$this->template->build('index',$data);
	}
	
	function view($id){
		$data['vdos'] = new Vdo();
		$data['vdos']->where('category_id = '.$id)->get();
		$this->template->build('view',$data);
	}
}
?>