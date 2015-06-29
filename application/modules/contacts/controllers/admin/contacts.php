<?php
class contacts extends Admin_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data['contacts'] = new contact();
		$data['contacts']->order_by('id','desc')->get_page();
		$this->template->build('admin/index',$data);
	}
	
	function form($id=FALSE)
	{
		$data['contact'] = new contact($id);
		$this->template->build('admin/form',$data);
	}

	function delete($id=FALSE)
	{
		if($id)
		{
			$contact = new Contact($id);
			$contact->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function send_mail(){
    // ###### PHPMailer #### 
	    require_once("PHPMailer_v5.1/class.phpmailer.php"); // ประกาศใช้ class phpmailer กรุณาตรวจสอบ ว่าประกาศถูก path
	    $mail = new PHPMailer();
	    $mail->IsSMTP();
	    $mail->Host = 'ssl://smtp.googlemail.com';
	    $mail->Port = 465;
	    $mail->Username = 'fdsiakrin@gmail.com';
		$mail->Password = 'K2aP5GY5';
	    $mail->SMTPAuth = true;
	    $mail->CharSet = "utf-8";
	    $mail->From = "thaivbd.it@gmail.com";       //  account e-mail ของเราที่ใช้ในการส่งอีเมล
	    $mail->FromName = "สำนักโรคติดต่อนำโดยแมลง";
	    $mail->IsHTML(true);                            // ถ้า E-mail นี้ มีข้อความในการส่งเป็น tag html ต้องแก้ไข เป็น true
	    $mail->Subject = $_POST['subject'];            // หัวข้อที่จะส่ง
	    $mail->Body = $_POST['detail'];              // ข้อความ ที่จะส่ง
	    $mail->SMTPDebug = false;
	    $mail->do_debug = 0;
	    $mail->AddAddress($_POST['email']);                      // Email ปลายทางที่เราต้องการส่ง
	    $mail->send();
	    $mail->ClearAddresses();
	    // if (!$mail->send())
	    // {                                                                            
	        // echo "Mailer Error: " . $mail->ErrorInfo;
	        // exit;                        
	    // }
	    
	    set_notify('success', 'ส่งอีเมล์ไปถึงผู้รับสำเร็จ');
	    redirect('contacts/admin/contacts');
	}
}
?>