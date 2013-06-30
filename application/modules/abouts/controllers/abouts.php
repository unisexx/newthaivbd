<?php
class Abouts extends Public_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function view($id){
	    $data['about'] = new About($id);
        $this->template->build('view',$data);
	}
}
?>
