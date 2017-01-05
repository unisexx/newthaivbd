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
		$data['contents']->where("module = 'ข่าว Highlights' and status = 'approve' and start_date <= date(sysdate()) and (end_date >= date(sysdate()) or end_date = date('0000-00-00'))")->order_by('id','desc')->get(5);
		$this->load->view('inc_hilight',$data);
    }
	
	// ข่าวประชาสัมพันธ์
	function inc_information(){
		$data['contents'] = new Content();
		$data['contents']->where("module = 'ข่าวประชาสัมพันธ์' and status = 'approve' and start_date <= date(sysdate()) and (end_date >= date(sysdate()) or end_date = date('0000-00-00'))")->order_by('id','desc')->get(10);
		$this->load->view('inc_information',$data);
	}
	
	// ข่าวประกวดราคา
	function inc_bid(){
		$data['contents'] = new Content();
		$data['contents']->where("module = 'ข่าวประกวดราคา' and status = 'approve' and start_date <= date(sysdate()) and (end_date >= date(sysdate()) or end_date = date('0000-00-00'))")->order_by('id','desc')->get(10);
		$this->load->view('inc_bid',$data);
	}
	
	// สถานการณ์เท้าช้าง
	function inc_elephantiasis(){
		$data['content'] = new Content();
		$data['content']->where("module = 'สถานการณ์เท้าช้าง' and status = 'approve' and start_date <= date(sysdate()) and (end_date >= date(sysdate()) or end_date = date('0000-00-00'))")->order_by('id','desc')->get(1);
		$this->load->view('inc_elephantiasis',$data);
	}
	
	// สถานการณ์ไข้ปวดข้อยุงลาย
	function inc_mosquito(){
		$data['content'] = new Content();
		$data['content']->where("module = 'สถานการณ์ไข้ปวดข้อยุงลาย' and status = 'approve' and start_date <= date(sysdate()) and (end_date >= date(sysdate()) or end_date = date('0000-00-00'))")->order_by('id','desc')->get(1);
		$this->load->view('inc_mosquito',$data);
	}

	// สถานการณ์มาลาเรีย
	function inc_malaria(){
		$data['content'] = new Content();
		$data['content']->where("module = 'สถานการณ์มาลาเรีย' and status = 'approve' and start_date <= date(sysdate()) and (end_date >= date(sysdate()) or end_date = date('0000-00-00'))")->order_by('id','desc')->get(1);
		$this->load->view('inc_malaria',$data);
	}
	
	// โรคติดต่อนำโดยแมลงอื่นๆ
	function inc_other_insect(){
		$data['content'] = new Content();
		$data['content']->where("module = 'โรคติดต่อนำโดยแมลงอื่นๆ' and status = 'approve' and start_date <= date(sysdate()) and (end_date >= date(sysdate()) or end_date = date('0000-00-00'))")->order_by('id','desc')->get(1);
		$this->load->view('inc_other_insect',$data);
	}
    
    function index(){
        $data['contents'] = new Content();
        if(@$_GET['txtsearch'])$data['contents']->where("title like '%".$_GET['txtsearch']."%'");
        if(@$_GET['category'] != ""){ $data['contents']->where("category = '".$_GET['category']."'"); }
        $data['contents']->where("module = '".$_GET['module']."' and status = 'approve' and (start_date <= date(sysdate()) and (end_date >= date(sysdate()) or end_date = date('0000-00-00')))")->order_by('id','desc')->get_page();
		// $data['contents']->check_last_query();
		
		$this->template->title($_GET['module'].' :: สำนักโรคติดต่อนำโดยแมลง');
        // $this->template->append_metadata( meta('description',substr(str_replace('"', '', strip_tags($data['content']->detail)), 0, 500)));
		
        $this->template->build('index',$data);
    }
    
    function view($id){
        $data['content'] = new Content($id);
        $data['content']->counter();
		
		$this->template->title($data['content']->title.' :: สำนักโรคติดต่อนำโดยแมลง');
        $this->template->append_metadata( meta('description',substr(str_replace('"', '', strip_tags($data['content']->detail)), 0, 500)));
		
        $this->template->build('view',$data);
    }
}
?>