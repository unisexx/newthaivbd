<?php
class Albums extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data['albums'] = new Album;
		$data['albums']->order_by('id','desc')->get();
		$this->template->build('admin/album_index',$data);
	}
	
	function form($id = NULL)
	{	
		$data['album'] = new Album($id);
		$this->template->append_metadata(js_lightbox());
		$this->template->build('admin/album_form',$data);	
	}
	
	function save($id=FALSE)
	{
		if($_POST)
		{
			$album = new Album($id);
			if(!$id)$_POST['user_id'] = $this->session->userdata('id');
            if(!$id)$_POST['status'] = "approve";
			$album->from_array($_POST);
			$album->save();
            
            if($_POST['image']){
                foreach($_POST['image'] as $key => $item){
                    $picture = new Picture(@$_POST['picture_id'][$key]);
                    if($item)
                    {
                        $picture->image = $item;
                        $picture->album_id = $album->id;
                        $picture->save();
                    }   
                }
            }
            
			set_notify('success', lang('save_data_complete'));
		}
		redirect('albums/admin/albums/form/'.$album->id);
	}
	
	function delete($id)
	{
		if($id)
		{
			$album = new Album($id);
			remove_dir('uploads/albums/'.$album->id);
			$album->picture->delete_all();
			$album->delete();
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
            $album = new Album($id);
            $album->from_array($_POST);
            $album->save();
        }

    }
	
}
?>