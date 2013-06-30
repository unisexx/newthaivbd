<?php
class Projects extends Public_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    function index(){
        $data['projects'] = new Project();
        $data['projects']->where('module = "'.$_GET['module'].'"')->get_page();
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