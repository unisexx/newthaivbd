<?php
class Contents extends Admin_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data['contents'] = new Content();
		$data['contents']->where('module = "'.$_GET['module'].'"')->order_by('id','desc')->get();
		$this->template->build('admin/index',$data);
	}
	
	function form($id=FALSE)
	{
		$data['content'] = new Content($id);
		$this->template->build('admin/form',$data);
	}
	
	function save($id=false){
        if($_POST)
        {
            $content = new Content($id);
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
            $content->from_array($_POST);
            $content->save();
            set_notify('success', lang('save_data_complete'));
        }
        redirect($_POST['referer']);
    }
	
	function delete($id=false)
	{
		if($id)
		{
			$content = new Content($id);
			$content->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function approve($id){
        if($_POST)
        {
            $content = new Content($id);
            $content->from_array($_POST);
            $content->save();
        }

    }
}
?>