<?php
class Albums extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function inc_home(){
		$data['pics'] = new Picture();
		$data['pics']->order_by('id','desc')->get(10);
		$this->load->view('inc_home',$data);
	}
    
    function index(){
        $data['albums'] = new Album();
        $data['albums']->order_by('id','desc')->get_page();
		$this->template->title('ภาพกิจกรรม :: สำนักโรคติดต่อนำโดยแมลง');
        $this->template->append_metadata( meta('description','ภาพกิจกรรม :: สำนักโรคติดต่อนำโดยแมลง'));
        $this->template->build('index',$data);
    }
    
    function view($id){
        $data['pictures'] = new Picture();
        $data['pictures']->where('album_id = "'.$id.'"')->get();
        $data['pictures']->album->counter();
		$this->template->title($data['pictures']->album->name.' :: สำนักโรคติดต่อนำโดยแมลง');
        $this->template->append_metadata( meta('description',$data['pictures']->album->name.' :: สำนักโรคติดต่อนำโดยแมลง'));
        $this->template->build('view',$data);
    }
}
?>