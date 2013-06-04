<?php
class Abouts extends Public_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function index(){
		$data['about'] = new About(1);
		$this->template->build('about_index',$data);
	}
    
    function inc_home(){
        $data['about'] = new About(1);
        $this->load->view('inc_home',$data);
    }
}
?>
