<?php
/**
 * 
 * This class is controller in front. 
 * There are some functions to list images, videos and get detail of them...
 * @author Tuyetnt
 * @date 2012/12/15
 *
 */
class Mytour extends NIW_Controller
{
		function __construct()
		{
		@session_start();
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->library('pagination');
		$this->load->model('Mmytour');
		$this->load->library('session');
		$this->loadLang();
		$this->load->helper('text');
		}
		function index()
		{
			$this->page();
		}
	
		function page($index=0)
		{
			$data['step']  =  $this->Mmytour->getListFull('fg_step');
			$data['info']=$this->Mmytour->getRowByColumn('fg_games','game_id',$index);
			$data['list_hotro'] = $this->Mmytour->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Mmytour->getListFull('fg_bannerheader');
			$data['list_slide'] = $this->Mmytour->getListFull('fg_slide');
			$data['list_banner'] = $this->Mmytour->getListFull('fg_banner');
			$data['list_category'] = $this->Mmytour->getListFull('fg_category');
			$data['link_fanpage'] = $this->Mmytour->getRowByColumn('fg_setting','id',1);
			$data['list_games'] = $this->Mmytour->getListFull('fg_games');
			$config['base_url'] = base_url().'mytour/page';
			$config['per_page'] = 10;
			$config['total_rows'] = count($this->Mmytour->getListFull('fg_setting'));
			$this->pagination->initialize($config);
			$data['title']='games | Flash-games';
			$data['mytour']=$this->Mmytour->getListOffset('fg_setting',10,$index);
			$data['module']=$this->module;
			$data['index'] = -1;
			//$data['account_chitiet']  =  $this->Mmytour->getRowByColumn('fg_setting','id',$_SESSION['front_user_id']);
			//var_dump($data['account_chitiet']); die();
			if(isset($_SESSION['front_user_fullname'])){
				$username = $_SESSION['front_user_fullname'];
				//kiem tra xem co phai la tai khoan vip khong
				$kiemtra = $this->Mmytour->getRowByColumn('fg_accounts','username',$username);
				if($kiemtra->money >= 10000){
					$data['page']='vmytour';
					$this->load->view('front/container',$data);
				}else{
					$this->session->set_userdata('result','vous devez avoir un compte utilisateur en or pour créer tournoi.');
					redirect(base_url().'giaidau','refresh');
				}
			}
			else{
				//input username and password.
				$_SESSION['front_login_error'] = "nom d'utilisateur et mot de passe d'entrée";
				//username or password false
				$this->session->set_userdata('result',"nom d'utilisateur ou mot de passe faux");
				redirect(base_url().'login','refresh');
			}
			
		}
		}