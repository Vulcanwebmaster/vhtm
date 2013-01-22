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
		$this->load->library('pagination');
		$this->load->model('Mmygametwist');
		$this->load->library('session');
		$this->load->helper('text');
		$this->loadLogin();
		
		}
		
		function loadLogin()
		{
			if(isset($_SESSION['front_user_id'])){
				$id = $_SESSION['front_user_id'];
				return $id;
			}else{
				redirect(base_url().'dangky/dangnhap');
			}
		}
		function index()
		{
			$this->page();
		}
	
		function page()
		{
			$id = $_SESSION['front_user_id'];
			$data['list_account'] = $this->Mmygametwist->getRowByColumn('fg_accounts','id',$id);
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vmygametwist';
			$this->load->view('front/container',$data);
		}
		
		function personaldata()
		{
			$id = $_SESSION['front_user_id'];
			$data['list_account'] = $this->Mmygametwist->getRowByColumn('fg_accounts','id',$id);
			$model=new CI_Model();
			$data['menuleft']  =  0;
			$data['module']  =  $this->module;
			$data['page']  =  'vpersonaldata';
			$data['index']  =  -1;
			$this->load->view('front/container',$data);
		}
			
		function changepass()
		{
			$id = $_SESSION['front_user_id'];
			$data['list_account'] = $this->Mmygametwist->getRowByColumn('fg_accounts','id',$id);
			$model=new CI_Model();
			$data['menuleft']  =  1;
			$data['module']  =  $this->module;
			$data['page']  =  'vchangepass';
			$data['index']  =  -1;
			$this->load->view('front/container',$data);
		}
		
		function _inputPassword()
		{
			//$input= $this->input->post('email'); // Lấy giá trị từ vpersonaldata truyền vào name="..."
			$input=array(
						'password'=>$this->input->post('password'),
						);
			return $input;
		}
		
		function updateNewPass(){
				$id = $_SESSION['front_user_id'];
			$list_account = $this->Mmygametwist->getRowByColumn('fg_accounts','id',$id);
			$old_pass = $this->input->post('old_pass');
			//echo "trung dep zdai";die();
			if($old_pass == $list_account->password){
				$input= $this->_inputPassword();			
				if ($this->Mmygametwist->updateRowByColumn('fg_accounts','id',$id,$input))
				{
					$this->session->set_userdata('result','Update successful!!');
					redirect(base_url().'mygametwist');
				}
				}else{
					$this->session->set_userdata('result','Current password false.');
					$this->changepass();
				}
		}
		
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
		
		function updatePersonaldata(){
			$id = $_SESSION['front_user_id'];
			$input= $this->_inputPersonaldata();
			//var_dump($input);die();
			if($input == TRUE){
				if ($this->Mmygametwist->updateRowByColumn('fg_accounts','id',$id,$input))
					{
						$this->session->set_userdata('result','Update successful!!');
					}
					redirect(base_url().'mygametwist');
			}
			redirect(base_url().'mygametwist');
		}
}