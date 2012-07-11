<?php
	class Website extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('Mwebsite');
		}
		
		function index()
		{
			$data['page']=$this->config->item('backendpro_template_shop').'vwebsite';
			$data['module']=$this->module;
			$data['maintitle']='Web design';
			$data['title']='L.R.X | Website';
			$this->load->view($this->_container,$data);
		}
		
		function detail($alias='')
		{
			$data['page']=$this->config->item('backendpro_template_shop').'vdetail';
			$data['module']=$this->module;
			$data['detail']=$this->Mwebsite->getInfoByAlias($alias);
			$data['maintitle']=$data['detail']->title;
			$data['title']='L.R.X | Website';
			$this->load->view($this->_container,$data);
		}
		
		function pricingTable()
		{
			$data['page']=$this->config->item('backendpro_template_shop').'vpricingtable';
			$data['module']=$this->module;
			$data['maintitle']='Pricing Tables';
			$data['title']='L.R.X | Website';
			$this->load->view($this->_container,$data);
		}
		
		function webDesign()
		{
			$data['page']=$this->config->item('backendpro_template_shop').'vwebdesign';
			$data['module']=$this->module;
			$data['maintitle']='Web design';
			$data['title']='L.R.X | Website';
			$this->load->view($this->_container,$data);
		}
		
		function webDevelopement()
		{
			$data['page']=$this->config->item('backendpro_template_shop').'vwebdevelopement';
			$data['module']=$this->module;
			$data['maintitle']='Web developement';
			$data['title']='L.R.X | Website';
			$this->load->view($this->_container,$data);
		}
		
		function seo()
		{
			$data['page']=$this->config->item('backendpro_template_shop').'vseo';
			$data['module']=$this->module;
			$data['vcontent']=$this->Mwebsite->getInfoByAlias('seo');
			$data['maintitle']=$data['vcontent']->title;
			$data['title']='L.R.X | Website';
			$this->load->view($this->_container,$data);
		}
	}
?>