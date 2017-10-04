<?php
class Docs extends Public_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
	// สถานการณ์ไข้เลือดออก
    function inc_home(){
    	$data['doc'] = new Doc();
		$data['doc']->where('module = "วารสารโรคติดต่อนำโดยแมลง"')->order_by('id','desc')->get(1);
		
		$data['doc2'] = new Doc();
		$data['doc2']->where('module = "แนวทางและคู่มือปฏิบัติการ"')->order_by('id','desc')->get(1);
		
		$this->load->view('inc_home',$data);
    }
	
    function index(){
        $data['docs'] = new Doc();
		if(@$_GET['txtsearch'])$data['docs']->where("title like '%".$_GET['txtsearch']."%'");
        $data['docs']->where('module = "'.$_GET['module'].'"')->get_page();
		
		$this->template->title($_GET['module'].' :: สำนักโรคติดต่อนำโดยแมลง');
        $this->template->append_metadata( meta('description',$_GET['module'].' :: สำนักโรคติดต่อนำโดยแมลง'));
        $this->template->build('index',$data);
    }
    
    function view($id){
        $data['doc'] = new Doc($id);
        $data['doc']->counter();
		
		$this->template->title($data['doc']->title.' :: สำนักโรคติดต่อนำโดยแมลง');
        $this->template->append_metadata( meta('description',substr(str_replace('"', '', strip_tags($data['doc']->detail)), 0, 500)));
        $this->template->build('view',$data);
    }
}
?>