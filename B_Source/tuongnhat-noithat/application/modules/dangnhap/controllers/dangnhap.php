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
				$_SESSION['front_user_fullname'] = $account->fullname;
				$_SESSION['front_user_id'] = $account->id;

				redirect(base_url(),'refresh');
			}
			else 
			{
				//if this account is not exist, login unsuccesful and redirect to login view.
				$_SESSION['front_login_error'] = 'Tài khoản không tồn tại';
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
	
	/*
	 * get input values from regist form
	 */
	function _getInput()
	{
		$birthDate = $this->input->post("DateOfBirth_Day");
		$birthMonth = $this->input->post("DateOfBirth_Month");
		$birthYear = $this->input->post("DateOfBirth_Year");
		
		$input = array("email"	=>	$this->input->post("email"),
						"password"	=>	$this->input->post("password"),
						"fullname"	=>	$this->input->post("fullname"),
						"birthday"	=>	$birthYear.'-'.$birthMonth.'-'.$birthDate,
						"gender"	=>	$this->input->post("sex"),
						"address"	=>	$this->input->post("address"),
						"phone"		=>	$this->input->post("phone"));
		return $input;
	}
	
	/*
	 * Regist a new account for new user
	 */
	function registAccount()
	{
		if ($this->input->post("submit"))
		{
			$email = $this->input->post("email");
			
			//get list accounts which have email and password are received values
			$listTest = $this->Mdangnhap->getListByColumn('tn_user', 'email', $email); 
			
			if (count($listTest) > 0)
			{
				// if any items are exist, show error message
				$_SESSION['front_register_error'] = "Email này đã được sử dụng. Vui lòng chọn email khác";
				$this->data['module'] = $this->module;
				$this->data['page']	= 'front/vdangky';
				
				$this->load->view('front/container', $this->data);
			}
			else 
			{
				// if there are no item exist, insert a new account
				$input = $this->_getInput();
				if ($this->Mdangnhap->insertNewRow('tn_user',$input))
				{
					//auto login with that account
					$_SESSION['front_user_fullname'] = $input['fullname'];
					$_SESSION['front_user_id'] = mysql_insert_id();;
					
					redirect(base_url(),'refresh');
				}
			}
		}
		else 
		{
			$this->data['module'] = $this->module;
			$this->data['page'] = 'front/vdangky';
			
			$this->load->view('front/container',$this->data);
		}
	}
}