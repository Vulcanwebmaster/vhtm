<?php
class Dangnhap extends NIW_Controller
{
	function __construct()
	{
		@session_start();
		parent::__construct();
		
		$this->load->model("Mdangnhap");
		$this->module = strtolower(get_class());
		$this->data['title'] = 'Nội thất Tường Nhật | Đăng nhập';
	}
	
	/*
	 * check exist account
	 */
	function checkAccount()
	{
		if ($this->input->post('submit'))
		{
			$email = $this->input->post('logonId');
			$password = $this->input->post('logonPassword');
			$relateAccounts = $this->Mdangnhap->getAccountByUserPass($email, $password);
			if (count($relateAccounts) > 0)
			{
				//if this account is exist, login succesful and redirect to homepage.
				$account = $relateAccounts[0];
				$_SESSION['front_user_name'] = $account->fullname;
				$_SESSION['front_user_id'] = $account->id;
				
				redirect(base_url(),'refresh');
			}
			else 
			{
				//if this account is not exist, login unsuccesful and redirect to login view.
				$_SESSION['error'] = 'Tài khoản không tồn tại';
			}
		}
		$this->data['module'] = $this->module;
		$this->data['page'] = 'front/vdangnhap';
		$this->load->view('front/container',$this->data);
		
	}
	
	/*
	 * Logout current account and destroy all relate sessions.
	 */
	function logOut()
	{
		session_destroy();
		redirect(base_url(),'refresh');
	}
}