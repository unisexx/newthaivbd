<?php
class Rss extends Public_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('xml');  
        $this->load->helper('text');  
    }
	
	function dengues(){
		$data['feed_name'] = 'แอดฟรี ฟรีโพสต์ ฟรีประกาศ โฆษณาฟรี ซื้อง่าย ขายคล่อง - adfree';  
        $data['encoding'] = 'utf-8';  
        $data['feed_url'] = '';  
        $data['page_description'] = 'ฟรีโพสต์ ฟรีประกาศ โฆษณาฟรี';  
        $data['page_language'] = 'en-en';  
        $data['creator_email'] = '';  
        $data['posts'] = new Dengue();
        $data['posts']->where('module = "'.$_GET['module'].'" and type = "'.$_GET['type'].'" and year = '.$_GET['year'])->order_by('week','desc')->get();
        header("Content-Type: application/rss+xml"); 
        $this->load->view('adfree', $data);
	}
}