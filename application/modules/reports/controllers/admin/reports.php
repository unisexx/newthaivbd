<?php
class Reports extends Admin_Controller{
    function __construct(){
        parent::__construct();
    }
    
    function index(){
        $data['reports'] = new report();
        $data['reports']->where('module = "'.$_GET['module'].'"')->order_by('id','desc')->get();
        $this->template->build('admin/index',$data);
    }
    
    function form($id=FALSE)
    {
        $data['report'] = new report($id);
        $this->template->build('admin/form',$data);
    }
    
    function save($id=false){
        if($_POST)
        {
            $report = new report($id);
            // if($_FILES['image']['name'])
            // {
                // if($content->id){
                    // $content->delete_file($content->id,'uploads/content','image');
                // }
                // $_POST['image'] = $content->upload($_FILES['image'],'uploads/content/');
            // }
            if(!$id)$_POST['user_id'] = $this->session->userdata('id');
            if(!$id)$_POST['status'] = "approve";
            $_POST['slug'] = clean_url($_POST['title']);
            $_POST['module'] = $_GET['module'];
            $report->from_array($_POST);
            $report->save();
            set_notify('success', lang('save_data_complete'));
        }
        redirect($_POST['referer']);
    }
    
    function delete($id=false)
    {
        if($id)
        {
            $report = new report($id);
            $report->delete();
            set_notify('success', lang('delete_data_complete'));
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
    
    function approve($id){
        if($_POST)
        {
            $content = new report($id);
            $content->from_array($_POST);
            $content->save();
        }

    }
    
    function download($id){
        if($id){
            $report = new report($id);
            $data = file_get_contents(urldecode($report->files));
            $name = basename($report->files);
            force_download($name, $data); 
        }
    }
}
?>