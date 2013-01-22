<?php
class Dangky extends NIW_Controller
{
	function __construct()
	{
		@session_start();
		parent::__construct();
		
		$this->load->model("Mdangky");
		$this->module = strtolower(get_class());
		$this->data['title'] = 'Flash games | Flash games';
	}
	
	function index()
	{
			$this->page();
	}
	
	function page($index=0)
	{
			
			$data['title']='flashgame | Flash Games';
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vdangky';
			$this->load->view('front/container',$data);
	}
	//lay gia tri nhap vao tu form dang ky
	function _getInput()
	{
		$input = array("email"	=>	$this->input->post("email"),
						"password"	=>	$this->input->post("pass"),
						"username"	=>	$this->input->post("nick"),
						);
		return $input;
	}
	
	function dangNhap()
	{
		$data['title']='flashgame | Flash games';
		$data['module']=$this->module;
		$data['index'] = -1;
		//$relateAccounts = $this->Mdangky->getAccountByUserPass($nick, $password);
		//var_dump($relateAccounts); die();
		$data['page']='vdangnhap';
		$this->load->view('front/container',$data);
		
	}
		/*
	 * check exist account
	 */
	function checkAccount()
	{
		//var_dump($this->input->post('nick'));die();
			$nick = $this->input->post('nick');
			$password = $this->input->post('pass');
			$relateAccounts = $this->Mdangky->getAccountByUserPass($nick, $password);
			if (count($relateAccounts) > 0)
			{
				//if this account is exist, login succesful and redirect to homepage.
				$account = $relateAccounts[0];
				$_SESSION['front_user_fullname'] = $account->username;
				$_SESSION['front_user_id'] = $account->id;
				redirect(base_url(),'refresh');
			}
			else 
			{
				//if this account is not exist, login unsuccesful and redirect to login view.
				$_SESSION['front_login_error'] = 'input username and password.';
				$this->session->set_userdata('result','username or password false.');
				$this->dangNhap();
			}
		$this->data['module'] = $this->module;
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
		//$this->data['product']=$this->Mdangnhap->getListOffset('ln_product',5,0);
		if ($this->input->post("submit"))
		{
			$email = $this->input->post("email");
			
			//get list accounts which have email and password are received values
			$listTest = $this->Mdangky->getListByColumn('fg_accounts', 'email', $email); 
			
			if (count($listTest) > 0)
			{
				// if any items are exist, show error message
				$_SESSION['front_register_error'] = "Email này đã được sử dụng. Vui lòng chọn email khác";
				$this->session->set_userdata('result','Email is registered, please use another email!!');
				$this->data['module'] = $this->module;
				$this->data['page']	= 'vdangky';
				
				$this->load->view('front/container', $this->data);
			}
			else 
			{
				// if there are no item exist, insert a new account
				$input = $this->_getInput();
				if ($this->Mdangky->insertNewRow('fg_accounts',$input))
				{
					//auto login with that account
					$_SESSION['front_user_fullname'] = $input['username'];
					$_SESSION['front_user_id'] = mysql_insert_id();
					echo "<script language = 'JavaScript'>
						alert ('registry successful!!');
					</script>";
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