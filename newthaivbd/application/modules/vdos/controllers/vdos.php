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
		$this->template->title('ภาพวีดีโอ :: สำนักโรคติดต่อนำโดยแมลง');
        $this->template->append_metadata( meta('description','ภาพวีดีโอ :: สำนักโรคติดต่อนำโดยแมลง'));
		$this->template->build('index',$data);
	}
	
	function view($id){
		$category = new Category($id);
		$category->counter();
		
		$data['vdos'] = new Vdo();
		$data['vdos']->where('category_id = '.$id)->get();
		$this->template->title('ภาพวีดีโอ :: สำนักโรคติดต่อนำโดยแมลง');
        $this->template->append_metadata( meta('description','ภาพวีดีโอ :: สำนักโรคติดต่อนำโดยแมลง'));
		$this->template->build('view',$data);
	}
	
	function ajax_video($id){
		$data['rs'] = new Vdo($id);
		$this->load->view('ajax_video',$data);
	}
}
?>