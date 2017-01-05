<?php
class Projects extends Admin_Controller{
    function __construct(){
        parent::__construct();
    }
    
    function index(){
        $data['projects'] = new Project();
        $data['projects']->where('module = "'.$_GET['module'].'"')->order_by('id','desc')->get();
        $this->template->build('admin/index',$data);
    }
    
    function form($id=FALSE)
    {
        $data['project'] = new Project($id);
        $this->template->build('admin/form',$data);
    }
    
    function save($id=false){
        if($_POST)
        {
            $project = new Project($id);
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
            $project->from_array($_POST);
            $project->save();
            set_notify('success', lang('save_data_complete'));
        }
        redirect($_POST['referer']);
    }
    
    function delete($id=false)
    {
        if($id)
        {
            $project = new Project($id);
            $project->delete();
            set_notify('success', lang('delete_data_complete'));
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
    
    function approve($id){
        if($_POST)
        {
            $content = new Project($id);
            $content->from_array($_POST);
            $content->save();
        }

    }
    
    function download($id){
        if($id){
            $project = new Project($id);
            $data = file_get_contents(urldecode($project->files));
            $name = basename($project->files);
            force_download($name, $data); 
        }
    }
}
?>