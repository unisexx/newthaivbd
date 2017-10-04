<?php
Class Abouts extends Admin_Controller{
	
	function __construct(){
		parent::__construct();	
	}
	
	function form($id){
		$data['about'] = new About($id);
		$this->template->build('admin/form',$data);
	}
	
	function save($id=false)
	{
		if($_POST){
			$about = new About($id);
            if(!$id)$_POST['user_id'] = $this->session->userdata('id');
            $_POST['module'] = $_GET['module'];
			$about->from_array($_POST);
			$about->save();
			set_notify('success', lang('save_data_complete'));
		}
		redirect('abouts/admin/abouts/form/'.$id.'?module='.$_GET['module']);
	}
	
}
?>