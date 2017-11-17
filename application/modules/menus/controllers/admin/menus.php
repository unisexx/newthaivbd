<?php
class Menus extends Admin_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data['menus'] = new Menu();
		$data['menus']->where('pid is null')->order_by('orderlist','asc')->get();
		$this->template->build('admin/index',$data);
	}
	
	function form($id=FALSE)
	{
		$data['menu'] = new Menu($id);
		if($id > 0){
			$data['smenu'] = new Menu();
			$data['smenu']->where('pid = '.$id)->order_by('orderlist','asc')->get();
		}
		$this->template->build('admin/form',$data);
	}
	
	function save($id=false){
        if($_POST)
        {
            $content = new Menu($id);
			if(!$id)$_POST['user_id'] = $this->session->userdata('id');
			if(!$id)$_POST['status'] = "approve";
            $content->from_array($_POST);
            $content->save();
			
			if($_POST['stitle']){
                foreach($_POST['stitle'] as $key => $item){
                    $submenu = new Menu(@$_POST['sid'][$key]);
                    if($item)
                    {
                    	$submenu->orderlist = @$_POST['sorderlist'][$key];
                    	$submenu->title = $item;
						$submenu->url = @$_POST['surl'][$key];
                    	$submenu->status = "approve";
                        $submenu->pid = $content->id;
                        $submenu->save();
                    }   
                }
            }
			
            set_notify('success', lang('save_data_complete'));
        }
		// redirect($_POST['referer']);
		redirect($_SERVER['HTTP_REFERER']);
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
            $menu = new Menu($id);
            $menu->from_array($_POST);
            $menu->save();
        }

    }
	
	function delete_submenu($id)
	{
		if($id)
		{
			$menu = new Menu($id);
			$menu->delete();
		}
	}
}
?>