<?php
	class App extends Shop_Controller
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
			$data['page']=$this->config->item('backendpro_template_shop').'vapp';
			$data['module']=$this->module;
			$data['title']="L.R.X | Applications";
			$data['maintitle']="Applications";
			$data['vcontent1']=$this->Mapp->getInfoByAlias('application-services');
			$data['vcontent2']=$this->Mapp->getInfoByAlias('mobile-applications');
			$this->load->view($this->_container,$data);
		}
		
		function appServices()
		{
			$data['page']=$this->config->item('backendpro_template_shop').'vapp';
			$data['module']=$this->module;
			$data['title']="L.R.X | Applications";
			$data['maintitle']="Applications";
			$data['vcontent1']=$this->Mapp->getInfoByAlias('application-services');
			$this->load->view($this->_container,$data);
		}
		
		function mobileApp()
		{
			$data['page']=$this->config->item('backendpro_template_shop').'vapp';
			$data['module']=$this->module;
			$data['title']="L.R.X | Applications";
			$data['maintitle']="Applications";
			$data['vcontent2']=$this->Mapp->getInfoByAlias('mobile-applications');
			$this->load->view($this->_container,$data);
		}
	}
?>