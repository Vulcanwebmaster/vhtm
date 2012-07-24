<?php
	class Contactus extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('Mcontactus');
		}
		
		function index()
		{
			$data['page']='site/vcontactus';
			$data['module']=$this->module;
			$data['title']='L.R.X | Contact Us';
			$data['contact_info']=$this->Mcontactus->getcontactus();
			$this->load->view("front/container",$data);
		}
		function postMessage()
		{	
			if($this->Mcontactus->postMessage()==true)
			{
				redirect('contactus/');
			}
		}
	}
?>