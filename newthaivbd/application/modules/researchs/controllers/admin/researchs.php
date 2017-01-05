<?php
class Researchs extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data['categories'] = new Category();
		$data['categories']->where('module = "'.$_GET['module'].'"')->order_by('id','desc')->get();
		$this->template->build('admin/index',$data);
	}
	
	function form($id = NULL)
	{	
		$data['category'] = new Category($id);
		$this->template->build('admin/form',$data);	
	}
	
	function save($id=FALSE)
	{
		if($_POST)
		{
			$category = new Category($id);
			if(!$id)$_POST['user_id'] = $this->session->userdata('id');
            if(!$id)$_POST['status'] = "approve";
			if(!$id)$_POST['module'] = $_GET['module'];
			$category->from_array($_POST);
			$category->save();
            
            if($_POST['files']){
                foreach($_POST['files'] as $key => $item){
                    $vdo = new Research(@$_POST['research_id'][$key]);
                    if($item)
                    {
                    	$vdo->title = $_POST['title'][$key];
                        $vdo->files = $item;
                        $vdo->category_id = $category->id;
                        $vdo->save();
                    }   
                }
            }
            
			set_notify('success', lang('save_data_complete'));
		}
		redirect('researchs/admin/researchs/form/'.$category->id.'?module='.$_GET['module']);
	}
	
	function delete($id)
	{
		if($id)
		{
			$category = new Category($id);
			$category->research->delete_all();
			$category->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function delete_file($id)
	{
		if($id)
		{
			$row = new Research($id);
			$row->delete();
		}
	}
    
    function approve($id){
        if($_POST)
        {
            $row = new Category($id);
            $row->from_array($_POST);
            $row->save();
        }

    }
	
}
?>