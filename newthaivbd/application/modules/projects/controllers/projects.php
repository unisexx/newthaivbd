<?php
class Projects extends Public_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    function index(){
        $data['projects'] = new Project();
		if(@$_GET['txtsearch'])$data['projects']->where("title like '%".$_GET['txtsearch']."%'");
        $data['projects']->where('module = "'.$_GET['module'].'"')->order_by('id','desc')->get_page();
		$this->template->title($data['projects']->module.' :: สำนักโรคติดต่อนำโดยแมลง');
        $this->template->append_metadata( meta('description',$_GET['title'].' :: '.$_GET['module']));
        $this->template->build('index',$data);
    }
    
    function download($id)
    {
        if($id){
            $attach = new Project($id);
            $attach->counter();
            $this->load->helper('download');
            $data = file_get_contents(urldecode($attach->files));
            $name = basename($attach->files);
            force_download($name, $data); 
        }
    }
}
?>