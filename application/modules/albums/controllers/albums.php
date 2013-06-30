<?php
class Albums extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function inc_home(){
		$data['pics'] = new Picture();
		$data['pics']->order_by('id','desc')->get();
		$this->load->view('inc_home',$data);
	}
    
    function index(){
        $data['albums'] = new Album();
        $data['albums']->order_by('id','desc')->get_page();
        $this->template->build('index',$data);
    }
    
    function view($id){
        $data['pictures'] = new Picture();
        $data['pictures']->where('album_id = "'.$id.'"')->get();
        $data['pictures']->album->counter();
        $this->template->build('view',$data);
    }
}
?>