<?php 

if(!function_exists('cycle'))
{
	function cycle()
	{
		static $i;	
		
		if (func_num_args() == 0)
		{
			$args = array('even','odd');
		}
		else
		{
			$args = func_get_args();
		}
		return 'class="'.$args[($i++ % count($args))].'"';
	}
}

if(!function_exists('menu_active'))
{
    function menu_active($module,$controller = FALSE,$method = FALSE,$class='active')
    {
        $CI =& get_instance();
        if($controller)
        {
            return ($CI->router->fetch_module() == $module && $CI->router->fetch_class() == $controller) ? 'class="'.$class.'"' : '';    
        }
        elseif($method){
            return ($CI->router->fetch_module() == $module && $CI->router->fetch_method() == $method) ? 'class="'.$class.'"' : '';  
        }
        else
        {
            return ($CI->router->fetch_module() == $module) ? 'class='.$class : ''; 
        }
    }
}

if(!function_exists('page_active'))
{
	function page_active($page,$uri=4,$class='active')
	{
		$CI =& get_instance();
		return ($CI->uri->segment($uri)==$page) ? 'class='.$class : '';
	}
}

if(!function_exists('option_publish'))
{
	function option_publish()
	{
		return array('on' => 'ON', 'off' => 'OFF');
	}
}

if(!function_exists('get_option'))
{
	function get_option($value,$text,$table,$condition = NULL,$lang = NULL)
	{
		$CI =& get_instance();
		$query = $CI->db->query("select * from $table $condition");
		foreach($query->result() as $item) $option[$item->{$value}] = lang_decode($item->{$text},$lang);
		return $option;
	}
}

if(!function_exists('create_breadcrumb')){
function create_breadcrumb_admin(){
  $ci = &get_instance();
  $i=3;
  $uri = $ci->uri->segment($i);
  $link = '<div id="breadcrumbs"><ul class="breadcrumb"><li><i class="icon-home"></i> <a href="admin/">Home</a><span class="divider"><i class="icon-angle-right"></i></span></li>';
 
  while($uri != ''){
    $prep_link = '';
  for($j=1; $j<=$i;$j++){
    $prep_link .= $ci->uri->segment($j).'/';
  }
 
  if($ci->uri->segment($i+1) == ''){
    $link.=' <li class="active">';
    $link.=$ci->uri->segment($i).'</li>';
  }else{
    $link.='<li><a href="'.site_url($prep_link).'">';
    $link.=$ci->uri->segment($i).'</a> <span class="divider"><i class="icon-angle-right"></i></span></li>';
  }
 
  $i++;
  $uri = $ci->uri->segment($i);
  }
    $link .= '</ul><div id="nav-search">
                            <!--<form class="form-search">
                                    <span class="input-icon">
                                        <input autocomplete="off" id="nav-search-input" type="text" class="input-small search-query" placeholder="Search ..." />
                                        <i id="nav-search-icon" class="icon-search"></i>
                                    </span>
                            </form>-->
                        </div></div>';
    return $link;
  }
}

function fix_file(&$files)
{
    $names = array( 'name' => 1, 'type' => 1, 'tmp_name' => 1, 'error' => 1, 'size' => 1);

    foreach ($files as $key => $part) {
        // only deal with valid keys and multiple files
        $key = (string) $key;
        if (isset($names[$key]) && is_array($part)) {
            foreach ($part as $position => $value) {
                $files[$position][$key] = $value;
            }
            // remove old key reference
            unset($files[$key]);
        }
    }
}

function thumb($imgUrl,$width,$height,$zoom_and_crop,$param = NULL){
	if(strpos($imgUrl, "http://") !== false){
		return "<img ".$param." src=".$imgUrl." width=".$width." height=".$height.">";
	}else{
		return "<img ".$param." src=".site_url("media/timthumb/timthumb.php?src=".site_url($imgUrl)."&zc=".$zoom_and_crop."&w=".$width."&h=".$height)." width=".$width." height=".$height.">";
	}
}

if(!function_exists('avatar'))
{
    function avatar($img=FALSE,$size = NULL)
    {
        return ($img)?'uploads/users/'.$size.$img:'media/images/webboard/noavatar.gif';
    }
}

function webboard_group($post,$type){
    $CI =& get_instance();
    $webboard_post_level = new Webboard_post_level();
    $webboard_post_level->where('post <',$post)->order_by('post','desc')->limit(1)->get();
    if($webboard_post_level->exists())
    {
        if($type == "name")
        {
            return $webboard_post_level->name;
        }
        else
        {
            return $webboard_post_level->image;
        }
    }
    else
    {
        $webboard_post_level->get_by_name('Starter');
        if($type == "name")
        {
            return $webboard_post_level->name;
        }
        else
        {
            return $webboard_post_level->image;
        }
    }
    
}

function stripUploadString($uploadString){
	$fileName = explode("/", $uploadString);
	$last_key = key(array_slice($fileName, -1, 1, TRUE));
	return $fileName[$last_key];
}

function YoutubeIframe2Thumb($iframeCode,$width,$height){
  $regexstr = '~(?:(?:<iframe [^>]*src=")?|(?:(?:<object .*>)?(?:<param .*</param>)*(?:<embed [^>]*src=")?)?)?(?:https?:\/\/(?:[\w]+\.)*(?:youtu\.be/| youtube\.com| youtube-nocookie\.com)(?:\S*[^\w\-\s])?([\w\-]{11})[^\s]*)"?(?:[^>]*>)?(?:</iframe>|</embed></object>)?~ix';
  $thumb = '<img src="http://img.youtube.com/vi/$1/0.jpg" width="'.$width.'" height="'.$height.'"><input type="hidden" name="cover_pic[]" value="http://img.youtube.com/vi/$1/0.jpg">';
  return preg_replace($regexstr, $thumb, $iframeCode);
}

function remove_dir($dir) 
{ 
	if(is_dir($dir)) 
	{ 
		$dir = (substr($dir, -1) != "/")? $dir."/":$dir; $openDir = opendir($dir); 
		while($file = readdir($openDir)) 
		{ 
			if(!in_array($file, array(".", ".."))) 
			{ 
				if(!is_dir($dir.$file)) 
				{ 
					@unlink($dir.$file); 
				} 
				else 
				{ 
				remove_dir($dir.$file); 
				} 
			} 
		} 
		closedir($openDir); @rmdir($dir); 
	} 
} 

function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyz123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 6; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

function addThis(){
    return '<!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="addthis_native_toolbox" style="float:right;"></div><br clear="all">';
}

function get_month_name($number){
	$month_th = array( 1 =>'มกราคม',2 => 'กุมภาพันธ์',3=>'มีนาคม',4=>'เมษายน',5=>'พฤษภาคม',6=>'มิถุนายน',7=>'กรกฏาคม',8=>'สิงหาคม',9=>'กันยายน',10=>'ตุลาคม',11=>'พฤศจิกายน',12=>'ธันวาคม');
	return $month_th[$number];
}

function getYouTubeIdFromURL($url) 
{
  $pattern = '/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/i';
  preg_match($pattern, $url, $matches);

  return isset($matches[1]) ? $matches[1] : false;
}

if(!function_exists('visit_count')) //บันทึกจำนวนคนเข้าเว็บ
{
    function visit_count()
    {
    	$CI =& get_instance();
		$counter = new Counter();
		$counter->date_visit = date("d-m-Y");
        $counter->ip_visit = $_SERVER['REMOTE_ADDR'];
		$counter->visit = 1;
		$counter->save();
    }
}

if(!function_exists('visit_count_all')) //บันทึกจำนวนคนเข้าเว็บทั้งหมด ไม่สนไอพี
{
    function visit_count_page()
    {
    	$CI =& get_instance();
    	$sql = "select count(ip_visit) as visit From counters";
		$data = $CI->db->query($sql)->result();
		$openpage =  str_pad($data[0]->visit,6,0,STR_PAD_LEFT); //ทำเป็นเลข 6 หลักด้วยการเติมเลข  0 ข้างซ้าย
		return $openpage;
    }
}

if(!function_exists('visit_count_today')) //บันทึกจำนวนคนเข้าเว็บวันนี้ (ไอพีซ้ำไม่นับ)
{
    function visit_count_today()
    {
    	$CI =& get_instance();
    	$today = date('d-m-Y');  
    	$sql = "select count(DISTINCT(ip_visit)) as visit From counters where date_visit = '$today'";
		$data = $CI->db->query($sql)->result();
		// $today =  str_pad($data[0]->visit,6,0,STR_PAD_LEFT); //ทำเป็นเลข 6 หลักด้วยการเติมเลข  0 ข้างซ้าย
		$today = $data[0]->visit;
		return $today;
    }
}

if(!function_exists('visit_count_total')) //บันทึกจำนวนคนเข้าเว็บทั้งหมด (ไอพีซ้ำไม่นับ)
{
    function visit_count_total()
    {
    	$CI =& get_instance(); 
    	$sql = "select count(DISTINCT(ip_visit)) as visit From counters";
		$data = $CI->db->query($sql)->result();
		$total =  str_pad($data[0]->visit,6,0,STR_PAD_LEFT); //ทำเป็นเลข 6 หลักด้วยการเติมเลข  0 ข้างซ้าย
		return $total; 
    }
}

?>