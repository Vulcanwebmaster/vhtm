<?php
	class App extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('Mapp');
		}
		
		function index()
		{
			$data['page']='site/vapp';
			$data['module']=$this->module;
			$data['title']="L.R.X | Applications";
			$data['maintitle']="Applications";
			$data['vcontent']=$this->Mapp->loadApp();

			
			$this->load->view("front/container",$data);
		}
		
		function appServices()
		{
			$data['page']='site/vapp';
			$data['module']=$this->module;
			$data['title']="L.R.X | Applications";
			$data['maintitle']="Applications";
			$data['vcontent1']=$this->Mapp->getInfoByAlias('application-services');
			$this->load->view("front/container",$data);
		}
		
		function mobileApp()
		{
			$data['page']='site/vapp';
			$data['module']=$this->module;
			$data['title']="L.R.X | Applications";
			$data['maintitle']="Applications";
			$data['vcontent2']=$this->Mapp->getInfoByAlias('mobile-applications');
			$this->load->view("front/container",$data);
		}
		function detail()
		{
			$data['list']=$this->Mapp->detail();
			$data['module']=$this->module;
			$data['title']="L.R.X | Applications";
			$data['maintitle']="Applications";
			$data['page']='site/vappdetail';
			$this->load->view("front/container",$data);
		}
		
		
	}
?>