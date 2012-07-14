<?php
	class Website extends NIW_Controller
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
			$data['page']='site/vwebsite';
			$data['module']=$this->module;
			$data['maintitle']='Web design';
			$data['title']='L.R.X | Website';
			$this->load->view('front/container',$data);
		}
		
		function detail($alias='')
		{
			$data['page']='site/vdetail';
			$data['module']=$this->module;
			$data['detail']=$this->Mwebsite->getInfoByAlias($alias);
			$data['maintitle']=$data['detail']->title;
			$data['title']='L.R.X | Website';
			$this->load->view('front/container',$data);
		}
		
		function pricingTable()
		{
			$data['page']='site/vpricingtable';
			$data['module']=$this->module;
			$data['maintitle']='Pricing Tables';
			$data['title']='L.R.X | Website';
			$this->load->view('front/container',$data);
		}
		
		function webDesign()
		{
			$data['page']='site/vwebdesign';
			$data['module']=$this->module;
			$data['maintitle']='Web design';
			$data['title']='L.R.X | Website';
			$this->load->view('front/container',$data);
		}
		
		function webDevelopement()
		{
			$data['page']='vwebdevelopement';
			$data['module']=$this->module;
			$data['maintitle']='Web developement';
			$data['title']='L.R.X | Website';
			$this->load->view('front/container',$data);
		}
		
		function seo()
		{
			$data['page']='site/vseo';
			$data['module']=$this->module;
			$data['vcontent']=$this->Mwebsite->getInfoByAlias('seo');
			$data['maintitle']=$data['vcontent']->title;
			$data['title']='L.R.X | Website';
			$this->load->view('front/container',$data);
		}
	}
	
/* End of file website.php */
/* Location: ./application/modules/website/website.php */
