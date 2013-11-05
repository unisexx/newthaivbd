<?php
class Dengues extends Public_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
	// สถานการณ์ไข้เลือดออก
    function inc_dengue(){
    	$data['dengue'] = new Dengue();
		$data['dengue']->where('module = "สถานการณ์ไข้เลือดออก"')->order_by('id','desc')->get(1);
		$this->load->view('inc_dengue',$data);
    }
    
    function index(){
        $data['dengues'] = new Dengue();
        $data['dengues']->where('module = "'.$_GET['module'].'" and type = "'.$_GET['type'].'" and year = '.$_GET['year'])->order_by('id','desc')->get();
        $this->template->build('index',$data);
    }
	
    function view($id){
        $data['dengue'] = new Dengue($id);
        $data['dengue']->counter();
        $this->template->build('view',$data);
    }
}
?>