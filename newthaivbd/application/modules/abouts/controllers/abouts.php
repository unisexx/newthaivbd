<?php
class Abouts extends Public_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function view($id){
	    $data['about'] = new About($id);
		
		$this->template->title($data['about']->module.' :: สำนักโรคติดต่อนำโดยแมลง');
        $this->template->append_metadata( meta('description',substr(str_replace('"', '', strip_tags($data['about']->detail)), 0, 500)));
        $this->template->build('view',$data);
	}
}
?>
