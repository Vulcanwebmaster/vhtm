<?php
class Login extends NIW_Controller
{
	public function __construct(){
		parent::__construct();
		$this->module=strtolower(get_class());
		$this->load->model("mlogin");
	}
	
	//action cho dang nhap
	public function dangnhap(){
		if($this->input->post('submit')){
			$datauser=$this->input->post('username');
			$datapass=$this->input->post('password');
			$mang=array();
			$mang['username']=$datauser;
			$mang['password']=$datapass;
			if($this->mlogin->getUsers($datauser,$datapass)){
				$mang=$this->mlogin->getUsers($datauser,$datapass);
				$this->load->view('vloginsuccess',$mang);
				
			}
			else {
				$this->load->view('vlogin',$mang);
			}
		}
	}
	public function index()
	{
		$data['list']=$this->load->mlogin->getUsers();
		$this->load->view('vlogin',$data);
	}
		 		 		                                
		
}