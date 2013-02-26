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
			$data['online']  =  $this->Mdangky->CountOnline('fg_tag','status',1);
			$data['step']  =  $this->Mdangky->getListFull('fg_step');
			$data['link_fanpage'] = $this->Mdangky->getRowByColumn('fg_setting','id',1);
			$this->page();
			$data['list_hotro'] = $this->Mdangky->getListFull('fg_hotro');
			$data['list_category'] = $this->Mdangky->getListFull('fg_category');
	}
	
	function page($index=0)
	{
			$data['online']  =  $this->Mdangky->CountOnline('fg_tag','status',1);
			$data['step']  =  $this->Mdangky->getListFull('fg_step');
			$data['list_hotro'] = $this->Mdangky->getListFull('fg_hotro');
			$data['list_category'] = $this->Mdangky->getListFull('fg_category');
			$data['link_fanpage'] = $this->Mdangky->getRowByColumn('fg_setting','id',1);
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
						"fullname"	=>	$this->input->post("fullname"),
						"country"	=>	$this->input->post("country"),
						"city"	=>	$this->input->post("city"),
						);
		return $input;
	}
	
	function dangNhap()
	{
		$data['online']  =  $this->Mdangky->CountOnline('fg_tag','status',1);
		$data['step']  =  $this->Mdangky->getListFull('fg_step');
		$data['list_hotro'] = $this->Mdangky->getListFull('fg_hotro');
		$data['list_bannerheader'] = $this->Mdangky->getListFull('fg_bannerheader');
		$data['list_slide'] = $this->Mdangky->getListFull('fg_slide');
		$data['list_banner'] = $this->Mdangky->getListFull('fg_banner');
		$data['list_category'] = $this->Mdangky->getListFull('fg_category');
		$data['link_fanpage'] = $this->Mdangky->getRowByColumn('fg_setting','id',1);
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
		$data['online']  =  $this->Mdangky->CountOnline('fg_tag','status',1);
		$data['step']  =  $this->Mdangky->getListFull('fg_step');
		$data['link_fanpage'] = $this->Mdangky->getRowByColumn('fg_setting','id',1);
		$data['list_hotro'] = $this->Mdangky->getListFull('fg_hotro');
		$data['list_category'] = $this->Mdangky->getListFull('fg_category');
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
				//if this account is not exist, login unsuccesful and redirect to login view.,input username and password.
				$_SESSION['front_login_error'] = "nom d'utilisateur et mot de passe d'entrée.";
				$this->session->set_userdata('result',"nom d'utilisateur ou mot de passe faux.");
				redirect(base_url().'login','refresh');
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
		$data['online']  =  $this->Mdangky->CountOnline('fg_tag','status',1);
		$data['step']  =  $this->Mdangky->getListFull('fg_step');
		$data['list_hotro'] = $this->Mdangky->getListFull('fg_hotro');
		$data['list_category'] = $this->Mdangky->getListFull('fg_category');
		$data['link_fanpage'] = $this->Mdangky->getRowByColumn('fg_setting','id',1);
		//$this->data['product']=$this->Mdangnhap->getListOffset('ln_product',5,0);
		if ($this->input->post("submit"))
		{
			$email = $this->input->post("email");
			$username	=	$this->input->post("nick");
			
			//get list accounts which have email and password are received values
			$listTest = $this->Mdangky->getListByColumn('fg_accounts', 'email', $email); 
			$listTest1 = $this->Mdangky->getListByColumn('fg_accounts', 'username', $username); 
			if (count($listTest) > 0)
			{
				// if any items are exist, show error message Email này đã được sử dụng. Vui lòng chọn email khác
				$_SESSION['front_register_error'] = "Email này đã được sử dụng. Vui lòng chọn email khác";
				$this->session->set_userdata('result','Le courrier électronique est enregistré, sil vous plaît utilisez un autre e-mail!!');
				$this->data['module'] = $this->module;
				$this->data['page']	= 'vdangky';
				$this->load->view('front/container', $this->data);
			}elseif (count($listTest1) != 0) {
				// if any items are exist, show error message,username is registered, please use another username!!
				$this->session->set_userdata('result',"nom d'utilisateur est enregistré, s'il vous plaît utilisez un autre nom d'utilisateur");
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
						alert ('Registre succès!');
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

	function forgotpass()
	{
		$data['online']  =  $this->Mdangky->CountOnline('fg_tag','status',1);
		$data['step']  =  $this->Mdangky->getListFull('fg_step');
		$data['list_hotro'] = $this->Mdangky->getListFull('fg_hotro');
		$data['list_bannerheader'] = $this->Mdangky->getListFull('fg_bannerheader');
		$data['list_slide'] = $this->Mdangky->getListFull('fg_slide');
		$data['list_banner'] = $this->Mdangky->getListFull('fg_banner');
		$data['list_category'] = $this->Mdangky->getListFull('fg_category');
		$data['link_fanpage'] = $this->Mdangky->getRowByColumn('fg_setting','id',1);
		$data['title']='flashgame | Flash games';
		$data['module']=$this->module;
		$data['index'] = -1;
		//$relateAccounts = $this->Mdangky->getAccountByUserPass($nick, $password);
		//var_dump($relateAccounts); die();
		$data['page']='vforgotpass';
		$this->load->view('front/container',$data);
	}
	
	function checkEmail()
	{
			$data['online']  =  $this->Mdangky->CountOnline('fg_tag','status',1);
			$data['step']  =  $this->Mdangky->getListFull('fg_step');
			$data['list_hotro'] = $this->Mdangky->getListFull('fg_hotro');
			$data['list_category'] = $this->Mdangky->getListFull('fg_category');
			
			$data['link_fanpage'] = $this->Mdangky->getRowByColumn('fg_setting','id',1);
			$email = $this->input->post("email");
			//get list accounts which have email and password are received values
			$listTest = $this->Mdangky->getListByColumn('fg_accounts', 'email', $email); 
			if (count($listTest) != 0)
			{
				$characters = '0123456789abcdefghijklmnopqrstuvwxyz';
				$randomString = '';
				for ($i = 0; $i < 6; $i++) {
				    $randomString .= $characters[rand(0, strlen($characters) - 1)];
				}
				$new_password = $randomString;
				$input=array(
						'password'=>$new_password,
						);
				if ($this->Mdangky->updateRowByColumn('fg_accounts','email',$email,$input))
					{
						foreach ($listTest as $giatrimoi) {
							// Ham send mail
							$from="admin_gameflash@gmail.com";
							$to=$giatrimoi->email;
							$subject="Message changer le mot de passe sur le Webflashgame";
							$message="	Bonjour:  $giatrimoi->username ,\r\n
										Vous venez de faire le mot de passe oublié,\n
										Votre nouveau mot de passe est : $new_password";
							$options="Content-type:text/html;charset=utf-8\r\nFrom:$from\r\nReply-to:$from";
							mail($to,$subject,$message,$options);
							// End ham send mail
							$this->session->set_userdata('result','Envoyer le courrier envoyé avec succès!!');
							redirect(base_url().'dangky/forgotpass','refresh');
						}
					}else {
						$this->session->set_userdata('result','Passez envoyer panne électronique!!');
					}
			}
			else 
			{
				// if any items are exist, show error message
				$_SESSION['front_register_error'] = "Email này không tồn tại. Vui lòng chọn email khác";
				$this->session->set_userdata('result','Email ne pas exister, sil vous plait utilisez un autre email!!');
				$this->data['module'] = $this->module;
				redirect(base_url().'dangky/forgotpass','refresh');
				$this->load->view('front/container', $this->data);
			}
	}
	
	
	
}