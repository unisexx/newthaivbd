<?php
Class Abouts extends Admin_Controller{
	
	function __construct(){
		parent::__construct();	
	}
	
	function form($id=1){
		$data['about'] = new About($id);
		$this->template->build('admin/form',$data);
	}
	
	function save($id=1)
	{
		if($_POST){
			$about = new About($id);
			$about->from_array($_POST);
			$about->save();
			set_notify('success', lang('save_data_complete'));
		}
		redirect('abouts/admin/abouts/form/'.$id);
	}
	
}
?>