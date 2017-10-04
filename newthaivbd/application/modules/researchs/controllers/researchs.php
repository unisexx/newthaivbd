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
		if(@$_GET['txtsearch'])$data['categories']->where("name like '%".$_GET['txtsearch']."%'");
        $data['categories']->where('module = "'.$_GET['module'].'"')->get_page();
		
		$this->template->title($_GET['module'].' :: สำนักโรคติดต่อนำโดยแมลง');
        $this->template->append_metadata( meta('description',$_GET['module'].' :: สำนักโรคติดต่อนำโดยแมลง'));
        $this->template->build('index',$data);
    }
    
    function view($id){
        $data['researchs'] = new Research();
		if(@$_GET['txtsearch'])$data['researchs']->where("title like '%".$_GET['txtsearch']."%'");
        $data['researchs']->where('category_id = '.$id)->get();
        $data['researchs']->category->counter();
		
		$this->template->title($data['researchs']->category->name.' :: สำนักโรคติดต่อนำโดยแมลง');
        $this->template->append_metadata( meta('description',$data['researchs']->category->name.' :: สำนักโรคติดต่อนำโดยแมลง'));
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