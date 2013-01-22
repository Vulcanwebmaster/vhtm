<?php
/**
 * 
 * This class is controller in front. 
 * There are some functions to list images, videos and get detail of them...
 * @author Tuyetnt
 * @date 2012/12/15
 *
 */
class Shop extends NIW_Controller
{
	
		function __construct()
		{
		@session_start();
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->library('pagination');
		$this->load->model('Mshop');
		$this->load->library('session');
		$this->load->helper('text');
		$this->loadLogin();
		
		}
		
		function loadLogin()
		{
			//Kiem tra neu ton tai session trong dangky/checklogin thi...			
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
			//$id = $_SESSION['front_user_id'];
			//$data['list_account'] = $this->Mshop->getRowByColumn('fg_accounts','id',$id);
			$data['module']=$this->module;
			$data['index'] = -1;
			$data['page']='vshop';
			$this->load->view('front/container',$data);
		}
}
		
		
		
		