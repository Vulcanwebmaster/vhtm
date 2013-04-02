<?php
/**
 * 
 * This class is controller in front. 
 * There are some functions to list images, videos and get detail of them...
 * @author Tuyetnt
 * @date 2012/12/15
 *
 */
class Mygametwist extends NIW_Controller
{
	
		function __construct()
		{
		@session_start();
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->load->model('Mmygametwist');
		$this->load->library('session');
		$this->load->helper('text');
		$this->loadLogin();
		$this->loadLang();
		}
		
		function loadLogin()
		{
			//Kiem tra neu ton tai session trong dangky/checklogin thi...			
			if(isset($_SESSION['front_user_id'])){
				$id = $_SESSION['front_user_id'];
				return $id;
			}else{
				redirect(base_url().'login');
			}
		}
		function index()
		{
			$this->page();
		}
	
		function page()
		{
			$data['setting'] = $this->Mmygametwist->getRowByColumn('fg_setting','id',1);
			$data['link_fanpage'] = $this->Mmygametwist->getRowByColumn('fg_setting','id',1);
			$data['step']  =  $this->Mmygametwist->getListFull('fg_step');
			$id = $_SESSION['front_user_id'];
			$data['list_hotro'] = $this->Mmygametwist->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Mmygametwist->getListFull('fg_bannerheader');
			$data['list_slide'] = $this->Mmygametwist->getListFull('fg_slide');
			$data['list_banner'] = $this->Mmygametwist->getListFull('fg_banner');
			$data['list_category'] = $this->Mmygametwist->getListFull('fg_category');
			$data['list_hotro'] = $this->Mmygametwist->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Mmygametwist->getListFull('fg_bannerheader');
			$data['list_slide'] = $this->Mmygametwist->getListFull('fg_slide');
			$data['list_banner'] = $this->Mmygametwist->getListFull('fg_banner');
			$data['list_account'] = $this->Mmygametwist->getRowByColumn('fg_accounts','id',$id);
			$data['list_category'] = $this->Mmygametwist->getListFull('fg_category');
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vmygametwist';
			$this->load->view('front/container',$data);
		}
		// vao giao dien cap nhat thong tin ca nhan
		function personaldata()
		{
			$data['setting'] = $this->Mmygametwist->getRowByColumn('fg_setting','id',1);
			$data['link_fanpage'] = $this->Mmygametwist->getRowByColumn('fg_setting','id',1);
			$data['step']  =  $this->Mmygametwist->getListFull('fg_step');
			$id = $_SESSION['front_user_id'];
			$data['list_hotro'] = $this->Mmygametwist->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Mmygametwist->getListFull('fg_bannerheader');
			$data['list_slide'] = $this->Mmygametwist->getListFull('fg_slide');
			$data['list_banner'] = $this->Mmygametwist->getListFull('fg_banner');
			$data['list_account'] = $this->Mmygametwist->getRowByColumn('fg_accounts','id',$id);
			$model=new CI_Model();
			$data['list_category'] = $this->Mmygametwist->getListFull('fg_category');
			$data['menuleft']  =  0;
			$data['module']  =  $this->module;
			$data['page']  =  'vpersonaldata';
			$data['index']  =  -1;
			$this->load->view('front/container',$data);
		}
		// vao giao dien doi pass
		function changepass()
		{
			$data['setting'] = $this->Mmygametwist->getRowByColumn('fg_setting','id',1);
			$data['link_fanpage'] = $this->Mmygametwist->getRowByColumn('fg_setting','id',1);
			$data['step']  =  $this->Mmygametwist->getListFull('fg_step');
			$id = $_SESSION['front_user_id'];
			//var_dump($id); die();
			$data['list_hotro'] = $this->Mmygametwist->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Mmygametwist->getListFull('fg_bannerheader');
			$data['list_slide'] = $this->Mmygametwist->getListFull('fg_slide');
			$data['list_banner'] = $this->Mmygametwist->getListFull('fg_banner');
			$data['list_account'] = $this->Mmygametwist->getRowByColumn('fg_accounts','id',$id);
			$model=new CI_Model();
			$data['list_category'] = $this->Mmygametwist->getListFull('fg_category');
			$data['menuleft']  =  1;
			$data['module']  =  $this->module;
			$data['page']  =  'vchangepass';
			$data['index']  =  -1;
			$this->load->view('front/container',$data);
		}
		
		// General Setting
		function generalsetting()
		{
			$id = $_SESSION['front_user_id'];
			$data['list_hotro'] = $this->Mmygametwist->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Mmygametwist->getListFull('fg_bannerheader');
			$data['list_slide'] = $this->Mmygametwist->getListFull('fg_slide');
			$data['list_banner'] = $this->Mmygametwist->getListFull('fg_banner');
			$listTest = $this->Mmygametwist->getListByColumn('st_generalsetting', 'account_id', $id); 
			if (count($listTest) > 0)
			{
				$data['general_setting'] = $this->Mmygametwist->getRowByColumn('st_generalsetting','account_id',$id);
			}
			$model=new CI_Model();
			$data['list_category'] = $this->Mmygametwist->getListFull('fg_category');
			$data['menuleft']  =  3;
			$data['module']  =  $this->module;
			$data['page']  =  'vgeneralsetting';
			$data['index']  =  -1;
			$this->load->view('front/container',$data);
		}
		// Currency Setting
		function currencysetting()
		{
			$id = $_SESSION['front_user_id'];
			$data['list_hotro'] = $this->Mmygametwist->getListFull('fg_hotro');
			$data['list_bannerheader'] = $this->Mmygametwist->getListFull('fg_bannerheader');
			$data['list_tiente'] = $this->Mmygametwist->getListFull('st_convertcurrency');
			$data['list_slide'] = $this->Mmygametwist->getListFull('fg_slide');
			$data['list_banner'] = $this->Mmygametwist->getListFull('fg_banner');
			$listTest = $this->Mmygametwist->getListByColumn('st_currencysetting', 'account_id', $id); 
			if (count($listTest) > 0)
			{
				$data['currency_setting'] = $this->Mmygametwist->getRowByColumn('st_currencysetting','account_id',$id);
			}
			$model=new CI_Model();
			$data['list_category'] = $this->Mmygametwist->getListFull('fg_category');
			$data['menuleft']  =  4;
			$data['module']  =  $this->module;
			$data['page']  =  'vcurrency';
			$data['index']  =  -1;
			$this->load->view('front/container',$data);
		}
		//Twists overview
		
// *************** Cac function insert update ****************
		// Lay du lieu tu form
		
		// Update Currency Setting
		
		
		// Lay du lieu tu form
		function _inputGeneralSetting()
		{
			//$input= $this->input->post('email'); // Lấy giá trị từ vpersonaldata truyền vào name="..."
			$input=array(
						'message'=>$this->input->post('message'),
						'account_id'=> $_SESSION['front_user_id'],
						);
			return $input;
		}
		// Update general Setting
		
		// Lay du lieu tu form
		
		// Update Game Setting
		
		// Lay du lieu tu form
		function _inputPassword()
		{
			//$input= $this->input->post('email'); // Lấy giá trị từ vpersonaldata truyền vào name="..."
			$input=array(
						'password'=>$this->input->post('password'),
						);
			return $input;
		}
		// Function doi pass
		function updateNewPass(){
			$id = $_SESSION['front_user_id'];
			$this->form_validation->set_rules('password','Password','required|trim');
			$list_account = $this->Mmygametwist->getRowByColumn('fg_accounts','id',$id);
			$old_pass = $this->input->post('old_pass');
			//echo "trung dep zdai";die();
			if($old_pass == $list_account->password){
				$input= $this->_inputPassword();			
				if ($this->Mmygametwist->updateRowByColumn('fg_accounts','id',$id,$input))
				{
					$this->session->set_userdata('result','Mise à jour réussie!');
					redirect(base_url().'mygametwist');
				}
				}else{
					$this->session->set_userdata('result','Faux mot de passe actuel.');
					$this->changepass();
				}
		}
		//Lay dl tu form view
		function _inputPersonaldata()
		{
			//$input= $this->input->post('email'); // Lấy giá trị từ vpersonaldata truyền vào name="..."
			$input=array(
				'email'=>$this->input->post('email'),
				'fullname'=>$this->input->post('fullname'),
				'gender'=> $this->input->post('gender'),
				'country'=> $this->input->post('country'),
				'city'=>$this->input->post('city'),
				);
			return $input;
		}
		// Function cap nhat thong tin
		function updatePersonaldata(){
			$id = $_SESSION['front_user_id'];
			$input= $this->_inputPersonaldata();
			//var_dump($input);die();
			if($input == TRUE){
				if ($this->Mmygametwist->updateRowByColumn('fg_accounts','id',$id,$input))
					{//Update successful!!
						$this->session->set_userdata('result','Mise à jour réussie!');
					}
					redirect(base_url().'mygametwist');
			}
			redirect(base_url().'mygametwist');
		}
}