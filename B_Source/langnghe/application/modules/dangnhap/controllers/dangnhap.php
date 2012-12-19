<?php
class Dangnhap extends NIW_Controller
{
	function __construct()
	{
		@session_start();
		parent::__construct();
		
		$this->load->model("Mdangnhap");
		$this->module = strtolower(get_class());
		$this->data['title'] = 'Làng Nghề | Đăng nhập';
	}
	
	
	//lay gia tri nhap vao tu form dang ky
	function _getInput()
	{
		$birthDate = $this->input->post("DateOfBirth_Day");
		$birthMonth = $this->input->post("DateOfBirth_Month");
		$birthYear = $this->input->post("DateOfBirth_Year");
		
		$input = array("email"	=>	$this->input->post("email"),
						"password"	=>	$this->input->post("password"),
						"fullname"	=>	$this->input->post("fullname"),
						"user_birthday"	=>	$birthYear.'-'.$birthMonth.'-'.$birthDate,
						"user_gender"	=>	$this->input->post("sex"),
						"user_address"	=>	$this->input->post("address"),
						"user_phone"		=>	$this->input->post("phone"));
		return $input;
	}
	
		/*
	 * check exist account
	 */
	function checkAccount()
	{
		$this->data['product']=$this->Mdangnhap->getListOffset('ln_product',5,0);
		if ($this->input->post('submit'))
		{
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$relateAccounts = $this->Mdangnhap->getAccountByUserPass($email, $password);
			if (count($relateAccounts) > 0)
			{
				//if this account is exist, login succesful and redirect to homepage.
				$account = $relateAccounts[0];
				$_SESSION['front_user_fullname'] = $account->fullname;
				$_SESSION['front_user_id'] = $account->id;
				//var_dump($_SESSION['front_user_fullname']); die();
				redirect(base_url(),'refresh');
				
			}
			else 
			{
				//if this account is not exist, login unsuccesful and redirect to login view.
				$_SESSION['front_login_error'] = 'Tài khoản không tồn tại';
			}
		}
		$this->data['module'] = $this->module;
		$this->data['page'] = 'vwellcome';

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
	
	function registAccount()
	{
		$this->data['product']=$this->Mdangnhap->getListOffset('ln_product',5,0);
		if ($this->input->post("submit"))
		{
			$email = $this->input->post("email");
			
			//get list accounts which have email and password are received values
			$listTest = $this->Mdangnhap->getListByColumn('ln_user', 'email', $email); 
			
			if (count($listTest) > 0)
			{
				// if any items are exist, show error message
				$_SESSION['front_register_error'] = "Email này đã được sử dụng. Vui lòng chọn email khác";
				$this->data['module'] = $this->module;
				$this->data['page']	= 'vdangky';
				
				$this->load->view('front/container', $this->data);
			}
			else 
			{
				// if there are no item exist, insert a new account
				$input = $this->_getInput();
				if ($this->Mdangnhap->insertNewRow('ln_user',$input))
				{
					//auto login with that account
					$_SESSION['front_user_fullname'] = $input['fullname'];
					$_SESSION['front_user_id'] = mysql_insert_id();;
					//var_dump($input); die();
					redirect(base_url(),'refresh');
				}
			}
		}
		else 
		{
			$this->data['module'] = $this->module;
			$this->data['page'] = 'vdangky';
			$this->load->view('front/container',$this->data);
		}
	}
	
	
	
	
}