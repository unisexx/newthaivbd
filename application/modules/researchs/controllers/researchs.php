<?php
class Researchs extends Public_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
	// สถานการณ์ไข้เลือดออก
    function inc_home(){
    	$data['catgory'] = new Category();
		$data['catgory']->where('module = "สื่อต้นแบบ"')->order_by('id','desc')->get(1);
		
		$data['catgory2'] = new Category();
		$data['catgory2']->where('module = "งานวิจัย"')->order_by('id','desc')->get(1);
		
		$this->load->view('inc_home',$data);
    }
	
}
?>