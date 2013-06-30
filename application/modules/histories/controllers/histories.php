<?php
class Histories extends Public_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    function index(){
        $data['histories'] = new History();
        $data['histories']->where('module = "'.$_GET['module'].'" and type = "'.$_GET['type'].'" and year = '.$_GET['year'])->order_by('id','desc')->get_page();
        $this->template->build('index',$data);
    }
    
    function view($id){
        $data['history'] = new History($id);
        $data['history']->counter();
        $this->template->build('view',$data);
    }
    
    function download($id)
    {
        if($id){
            $attach = new History_file($id);
            $attach->counter();
            $this->load->helper('download');
            $data = file_get_contents(urldecode($attach->files));
            $name = basename($attach->files);
            force_download($name, $data); 
        }
    }
}
?>