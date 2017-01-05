<?php
class Dengues extends Public_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
	// สถานการณ์ไข้เลือดออก
    function inc_dengue(){
    	$data['dengue'] = new Dengue();
		$data['dengue']->where('module = "สถานการณ์ไข้เลือดออก"')->order_by('id','desc')->get(1);
		$data['dangue_report'] = new Dengue_report(1);
		$this->load->view('inc_dengue',$data);
    }
	
	// สถานการณ์โรคสครับไทฟัส
    function inc_scrub(){
    	$data['dengue'] = new Dengue();
		$data['dengue']->where('module = "สถานการณ์โรคสครับไทฟัส"')->order_by('id','desc')->get(1);
		$this->load->view('inc_scrub',$data);
    }
	
	// สถานการณ์โรคลิชมาเนีย
    function inc_leish(){
    	$data['dengue'] = new Dengue();
		$data['dengue']->where('module = "สถานการณ์โรคลิชมาเนีย"')->order_by('id','desc')->get(1);
		$this->load->view('inc_leish',$data);
    }
    
    function index(){
        $data['dengues'] = new Dengue();
        $data['dengues']->where('module = "'.$_GET['module'].'" and type = "'.$_GET['type'].'" and year = '.$_GET['year'])->order_by('week','desc')->get();
		
		$this->template->title($_GET['module'].' :: สำนักโรคติดต่อนำโดยแมลง');
        $this->template->append_metadata( meta('description',$_GET['module'].' :: สำนักโรคติดต่อนำโดยแมลง'));
		
        $this->template->build('index',$data);
    }
	
    function view($id){
        $data['dengue'] = new Dengue($id);
        $data['dengue']->counter();
		
		$this->template->title($data['dengue']->module.'ในประเทศไทย ปี '.$data['dengue']->year.' :: สำนักโรคติดต่อนำโดยแมลง');
        $this->template->append_metadata( meta('description',substr(str_replace('"', '', strip_tags($data['dengue']->detail)), 0, 500)));
		
        $this->template->build('view',$data);
    }
	
	function download($id)
    {
        if($id){
            $attach = new Dengue_report($id);
            $this->load->helper('download');
            $data = file_get_contents(urldecode($attach->files));
            $name = basename($attach->files);
            force_download($name, $data); 
        }
    }
}
?>