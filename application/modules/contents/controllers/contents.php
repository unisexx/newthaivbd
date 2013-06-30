<?php
class Contents extends Public_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
	// ข่าว Highlights
    function inc_hilight(){
    	$data['contents'] = new Content();
		$data['contents']->where('module = "ข่าว Highlights"')->order_by('id','desc')->get(5);
		$this->load->view('inc_hilight',$data);
    }
	
	// ข่าวประชาสัมพันธ์
	function inc_information(){
		$data['contents'] = new Content();
		$data['contents']->where('module = "ข่าวประชาสัมพันธ์"')->order_by('id','desc')->get(10);
		$this->load->view('inc_information',$data);
	}
	
	// ข่าวประกวดราคา
	function inc_bid(){
		$data['contents'] = new Content();
		$data['contents']->where('module = "ข่าวประกวดราคา"')->order_by('id','desc')->get(10);
		$this->load->view('inc_bid',$data);
	}
	
	// สถานการณ์เท้าช้าง
	function inc_elephantiasis(){
		$data['content'] = new Content();
		$data['content']->where('module = "สถานการณ์เท้าช้าง"')->order_by('id','desc')->get(1);
		$this->load->view('inc_elephantiasis',$data);
	}
	
	// สถานการณ์ไข้ปวดข้อยุงลาย
	function inc_mosquito(){
		$data['content'] = new Content();
		$data['content']->where('module = "สถานการณ์ไข้ปวดข้อยุงลาย"')->order_by('id','desc')->get(1);
		$this->load->view('inc_mosquito',$data);
	}

	// สถานการณ์มาลาเรีย
	function inc_malaria(){
		$data['content'] = new Content();
		$data['content']->where('module = "สถานการณ์มาลาเรีย"')->order_by('id','desc')->get(1);
		$this->load->view('inc_malaria',$data);
	}
	
	// โรคติดต่อนำโดยแมลงอื่นๆ
	function inc_other_insect(){
		$data['content'] = new Content();
		$data['content']->where('module = "โรคติดต่อนำโดยแมลงอื่นๆ"')->order_by('id','desc')->get(1);
		$this->load->view('inc_other_insect',$data);
	}
    
    function index(){
        $data['contents'] = new Content();
        $data['contents']->where('module = "'.$_GET['module'].'"')->get_page();
        $this->template->build('index',$data);
    }
    
    function view($id){
        $data['content'] = new Content($id);
        $data['content']->counter();
        $this->template->build('view',$data);
    }
}
?>