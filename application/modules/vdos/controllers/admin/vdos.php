<?php
class Vdos extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data['categories'] = new Category();
		$data['categories']->where('module = "vdos"')->order_by('id','desc')->get();
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
			if(!$id)$_POST['module'] = "vdos";
			if(!$id)$_POST['parents'] = "1";
			$category->from_array($_POST);
			$category->save();
            
            if($_POST['url']){
                foreach($_POST['url'] as $key => $item){
                    $vdo = new Vdo(@$_POST['vdo_id'][$key]);
                    if($item)
                    {
                    	$vdo->title = $_POST['title'][$key];
                        $vdo->url = $item;
                        $vdo->category_id = $category->id;
                        $vdo->save();
                    }   
                }
            }
            
			set_notify('success', lang('save_data_complete'));
		}
		redirect('vdos/admin/vdos/form/'.$category->id);
	}
	
	function delete($id)
	{
		if($id)
		{
			$category = new Category($id);
			$category->vdo->delete_all();
			$category->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function delete_vid($id)
	{
		if($id)
		{
			$row = new Vdo($id);
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