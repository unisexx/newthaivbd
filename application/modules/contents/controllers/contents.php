<?php
class Contents extends Public_Controller
{
	
    function __construct()
    {
        parent::__construct();
    }
    
    function inc_hilight(){
    	$data['contents'] = new Content();
		$data['contents']->where('module = "ข่าว Highlights"')->get();
		$this->load->view('inc_hilight',$data);
    }
	
	function inc_information(){
		$data['contents'] = new Content();
		$data['contents']->where('module = "ข่าวประชาสัมพันธ์"')->get();
		$this->load->view('inc_information',$data);
	}
}
?>