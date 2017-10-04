<?php
class Histories extends Public_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    function index(){
        $data['histories'] = new History();
        $data['histories']->where('module = "'.$_GET['module'].'" and type = "'.$_GET['type'].'" and year = '.$_GET['year']);
		
		$this->template->title('ข้อมูล'.$_GET['module'].' ปี '.$_GET['year'].' :: สำนักโรคติดต่อนำโดยแมลง');
        $this->template->append_metadata( meta('description','ข้อมูล'.$_GET['module'].' ปี '.$_GET['year'].' :: สำนักโรคติดต่อนำโดยแมลง'));
		
		if($_GET['module'] == 'ไข้มาลาเรีย GIS' || $_GET['module'] == 'ไข้เลือดออก GIS'){
			$data['histories']->order_by('month','asc')->get();
			$this->template->build('view_gis',$data);
		}else{
			$data['histories']->order_by('week','desc')->get();
			$this->template->build('index',$data);
		}
    }
    
    function view($id){
        $data['history'] = new History($id);
        $data['history']->counter();
		
		$this->template->title('ข้อมูล'.$data['history']->module.' ปี '.$data['history']->year.' :: สำนักโรคติดต่อนำโดยแมลง');
        $this->template->append_metadata( meta('description','ข้อมูล'.$data['history']->module.' ปี '.$data['history']->year.' :: สำนักโรคติดต่อนำโดยแมลง'));
		
        $this->template->build('view',$data);
    }
    
    function download($id)
    {
        if($id){
            $attach = new History_file($id);
            $attach->counter();
            $this->load->helper('download');
            $data = file_get_contents(urldecode($attach->files));
            $name = basename($attach->files);
            force_download($name, $data); 
        }
    }
	
	function getmap(){
        $data['history'] = new History($_GET['id']);
        $data['history']->counter();
        echo '<img src="'.$data['history']->history_file->files.'" style="max-width:720px">';
    }
}
?>