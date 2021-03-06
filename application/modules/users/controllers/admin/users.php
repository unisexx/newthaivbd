<?php

class Users extends Admin_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$data['users'] = new User;
		//$data['users']->where('level_id',2)->order_by('id','desc')->get();
		$data['users']->order_by('user_type_id','asc')->get();
		$this->template->build('admin/users/index',$data);
	}
	
	public function form($id = NULL)
	{	
		$data['user'] = new User($id);
		$this->template->build('admin/users/form',$data);
	}
	
	public function save($id = NULL)
	{
		if($_POST){
            // $captcha = $this->session->userdata('captcha');
            // if(($_POST['captcha'] == $captcha) && !empty($captcha)){
                $user = new User($id);
                // $_POST['password'] = encrypt_pass($_POST['password']);
                if($_FILES['image']['name'])
                {
                    if($user->id){
                        $user->delete_file($user->id,'uploads/user','image');
                    }
                    $_POST['image'] = $user->upload($_FILES['image'],'uploads/user/');
                }
                $user->from_array($_POST);
                $user->save();
                set_notify('success', lang('save_data_complete'));
            // }else{
                // set_notify('error','ขออภัยค่ะ!! คุณกรอกรหัสไม่ถูกต้อง');
                // redirect($_SERVER['HTTP_REFERER']);
            // }
        }
		redirect('users/admin/users');
	}
	
	public function delete($id)
	{
		if($id)
		{
			$user = new User($id);
			$user->delete();	
			set_notify('success', lang('delete_data_complete'));	
		}
		redirect('users/admin/users');
	}
	
	function approve($id)
    {
        if($_POST)
        {
            $user = new User($id);
            $user->from_array($_POST);
            $user->save();
        }

    }
}

?>