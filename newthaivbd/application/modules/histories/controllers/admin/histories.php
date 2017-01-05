<?php
class Histories extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data['history'] = new History();
		$this->template->build('admin/index',$data);
	}
	
	function form($id=FALSE)
	{
		$data['history'] = new History($id);
		$this->template->build('admin/form',$data);
	}
	
	function save($id=FALSE)
    {
        if($_POST)
        {
            $history = new History($id);
            if(!$id)$_POST['user_id'] = $this->session->userdata('id');
            if(!$id)$_POST['status'] = "approve";
            if(!$id)$_POST['module'] = $_GET['module'];
            $history->from_array($_POST);
            $history->save();
            
            if($_POST['files']){
                foreach($_POST['files'] as $key => $item){
                    $file = new History_file(@$_POST['file_id'][$key]);
                    if($item)
                    {
                        $file->title = $_POST['title'][$key];
                        $file->files = $item;
                        $file->history_id = $history->id;
                        $file->save();
                    }   
                }
            }
            
            set_notify('success', lang('save_data_complete'));
        }
        redirect('histories/admin/histories/form/'.$history->id.'?module='.$_GET['module'].'&type='.$_GET['type'].'&year='.$_GET['year'].'&week='.$_GET['week'].'&month='.$_GET['month']);
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