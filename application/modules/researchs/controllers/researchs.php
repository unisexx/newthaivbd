<?php
class Researchs extends Public_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
	// สถานการณ์ไข้เลือดออก
    function inc_home(){
    	$data['category'] = new Category();
		$data['category']->where('module = "สื่อต้นแบบ"')->order_by('id','desc')->get(1);
		
		$data['category2'] = new Category();
		$data['category2']->where('module = "งานวิจัย"')->order_by('id','desc')->get(1);
		
		$this->load->view('inc_home',$data);
    }
	
    function index(){
        $data['categories'] = new Category();
        $data['categories']->where('module = "'.$_GET['module'].'"')->get_page();
        $this->template->build('index',$data);
    }
    
    function view($id){
        $data['researchs'] = new Research();
        $data['researchs']->where('category_id = '.$id)->get_page();
        $data['researchs']->category->counter();
        $this->template->build('view',$data);
    }
    
    function download($id)
    {
        if($id){
            $attach = new Research($id);
            $attach->counter();
            $this->load->helper('download');
            $data = file_get_contents(urldecode($attach->files));
            $name = basename($attach->files);
            force_download($name, $data); 
        }
    }
}
?>