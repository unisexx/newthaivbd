<?php
class Rss extends Public_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('xml');  
        $this->load->helper('text');  
    }
	
	function dengues(){
		$data['feed_name'] = 'สถานการณ์โรค - สำนักโรคติดต่อนำโดยแมลง';  
        $data['encoding'] = 'utf-8';  
        $data['feed_url'] = '';  
        $data['page_description'] = 'สถานการณ์โรค - สำนักโรคติดต่อนำโดยแมลง กรมควบคุมโรค กระทรวงสาธารณะสุข';  
        $data['page_language'] = 'en-en';  
        $data['creator_email'] = 'thaivbd.it@gmail.com';  
        $data['posts'] = new Dengue();
        $data['posts']->where('module = "'.$_GET['module'].'" and type = "'.$_GET['type'].'" and year = '.$_GET['year'])->order_by('week','desc')->get_page();
       	header("Content-Type: application/rss+xml"); 
        $this->load->view('dengues', $data);
	}
	
	function contents(){
		$data['feed_name'] = $_GET['module'].' - สำนักโรคติดต่อนำโดยแมลง';  
        $data['encoding'] = 'utf-8';  
        $data['feed_url'] = '';  
        $data['page_description'] = $_GET['module']. ' - สำนักโรคติดต่อนำโดยแมลง กรมควบคุมโรค กระทรวงสาธารณะสุข';  
        $data['page_language'] = 'en-en';  
        $data['creator_email'] = 'thaivbd.it@gmail.com';  
        $data['posts'] = new Content();
        if(@$_GET['txtsearch'])$data['posts']->where("title like '%".$_GET['txtsearch']."%'");
        if(@$_GET['category'] != ""){ $data['posts']->where("category = '".$_GET['category']."'"); }
        $data['posts']->where("module = '".$_GET['module']."' and status = 'approve' and (start_date <= date(sysdate()) and (end_date >= date(sysdate()) or end_date = date('0000-00-00')))")->order_by('id','desc')->get_page();
       	header("Content-Type: application/rss+xml"); 
        $this->load->view('contents', $data);
	}
	
	function projects(){
		$data['feed_name'] = $_GET['module'].' - สำนักโรคติดต่อนำโดยแมลง';  
        $data['encoding'] = 'utf-8';  
        $data['feed_url'] = '';  
        $data['page_description'] = $_GET['module']. ' - สำนักโรคติดต่อนำโดยแมลง กรมควบคุมโรค กระทรวงสาธารณะสุข';  
        $data['page_language'] = 'en-en';
		$data['creator_email'] = 'thaivbd.it@gmail.com';  
        $data['posts'] = new Project();
		if(@$_GET['txtsearch'])$data['posts']->where("title like '%".$_GET['txtsearch']."%'");
        $data['posts']->where('module = "'.$_GET['module'].'"')->order_by('id','desc')->get_page();
       	header("Content-Type: application/rss+xml"); 
        $this->load->view('projects', $data);
	}
	
	function docs(){
		$data['feed_name'] = $_GET['module'].' - สำนักโรคติดต่อนำโดยแมลง';  
        $data['encoding'] = 'utf-8';  
        $data['feed_url'] = '';  
        $data['page_description'] = $_GET['module']. ' - สำนักโรคติดต่อนำโดยแมลง กรมควบคุมโรค กระทรวงสาธารณะสุข';  
        $data['page_language'] = 'en-en';  
        $data['creator_email'] = 'thaivbd.it@gmail.com';  
        $data['posts'] = new Doc();
		if(@$_GET['txtsearch'])$data['posts']->where("title like '%".$_GET['txtsearch']."%'");
        $data['posts']->where('module = "'.$_GET['module'].'"')->get_page();
       	header("Content-Type: application/rss+xml"); 
        $this->load->view('docs', $data);
	}
	
	function researchs(){
		$data['feed_name'] = $_GET['module'].' - สำนักโรคติดต่อนำโดยแมลง';  
        $data['encoding'] = 'utf-8';  
        $data['feed_url'] = '';  
        $data['page_description'] = $_GET['module']. ' - สำนักโรคติดต่อนำโดยแมลง กรมควบคุมโรค กระทรวงสาธารณะสุข';  
        $data['page_language'] = 'en-en';  
        $data['creator_email'] = 'thaivbd.it@gmail.com';  
        $data['posts'] = new Category();
		if(@$_GET['txtsearch'])$data['posts']->where("name like '%".$_GET['txtsearch']."%'");
        $data['posts']->where('module = "'.$_GET['module'].'"')->get_page();
       	header("Content-Type: application/rss+xml"); 
        $this->load->view('researchs', $data);
	}
}