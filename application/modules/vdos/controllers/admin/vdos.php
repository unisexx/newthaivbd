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
		$data['categories']->where('parents <> 0 and module = "vdos"')->order_by('id','desc')->get();
		$this->template->build('admin/index',$data);
	}
	
	function form($id = NULL)
	{	
		$data['vdo'] = new Vdo($id);
		$this->template->append_metadata(js_lightbox());
		$this->template->build('admin/form',$data);	
	}
	
	function save($id=FALSE)
	{
		if($_POST)
		{
			$vdo = new Vdo($id);
			if(!$id)$_POST['user_id'] = $this->session->userdata('id');
            if(!$id)$_POST['status'] = "approve";
			$vdo->from_array($_POST);
			$vdo->save();
            
            if($_POST['image']){
                foreach($_POST['image'] as $key => $item){
                    $picture = new Picture(@$_POST['picture_id'][$key]);
                    if($item)
                    {
                        $picture->image = $item;
                        $picture->vdo_id = $vdo->id;
                        $picture->save();
                    }   
                }
            }
            
			set_notify('success', lang('save_data_complete'));
		}
		redirect('vdos/admin/vdos/form/'.$vdo->id);
	}
	
	function delete($id)
	{
		if($id)
		{
			$vdo = new Vdo($id);
			remove_dir('uploads/Vdos/'.$vdo->id);
			$vdo->picture->delete_all();
			$vdo->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function delete_picture($id)
	{
		if($id)
		{
			$picture = new Picture($id);
			$picture->delete();
		}
	}
    
    function approve($id){
        if($_POST)
        {
            $vdo = new Vdo($id);
            $vdo->from_array($_POST);
            $vdo->save();
        }

    }
	
}
?>