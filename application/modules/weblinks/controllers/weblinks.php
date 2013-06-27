<?php
Class Weblinks extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function inc_bannerlink(){
		$data['weblinks'] = new Weblink();
		$data['weblinks']->where("module = 'แบนเนอร์ลิ้งค์'")->get();
		$this->load->view('inc_bannerlink',$data);
	}
    
    function inc_textlink(){
        $data['weblinks'] = new Weblink();
        $data['weblinks']->where("module = 'หน่วยงานส่วนกลาง 1'")->get();
        
        $data['weblinks2'] = new Weblink();
        $data['weblinks2']->where("module = 'หน่วยงานส่วนกลาง 2'")->get();
        
        $this->load->view('inc_textlink',$data);
    }
}
?>