<?php
class Dengues extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data['dengue'] = new Dengue();
		$this->template->build('admin/index',$data);
	}
	
	function form($id=FALSE)
	{
		$data['dengue'] = new Dengue($id);
		$this->template->build('admin/form',$data);
	}
	
	function save($id=FALSE)
    {
        if($_POST)
        {
            $dengue = new Dengue($id);
            if(!$id)$_POST['user_id'] = $this->session->userdata('id');
            if(!$id)$_POST['status'] = "approve";
            if(!$id)$_POST['module'] = $_GET['module'];
            $dengue->from_array($_POST);
            $dengue->save();
			
            set_notify('success', lang('save_data_complete'));
        }
        redirect('dengues/admin/dengues/form/'.$dengue->id.'?module='.$_GET['module'].'&type='.$_GET['type'].'&year='.$_GET['year'].'&week='.$_GET['week'].'&month='.$_GET['month']);
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
    
    function delete_file($id)
    {
        if($id)
        {
            $row = new History_file($id);
            $row->delete();
        }
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