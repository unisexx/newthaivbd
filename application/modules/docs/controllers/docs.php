<?php
class Docs extends Public_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
	// สถานการณ์ไข้เลือดออก
    function inc_journal(){
    	$data['doc'] = new Doc();
		$data['doc']->where('module = "วารสารโรคติดต่อนำโดยแมลง"')->order_by('id','desc')->get(1);
		$this->load->view('inc_journal',$data);
    }
	
}
?>