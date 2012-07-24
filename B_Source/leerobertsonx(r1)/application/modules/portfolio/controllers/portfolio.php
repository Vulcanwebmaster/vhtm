<?php
	class Portfolio extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('Mportfolio');
			$this->load->helper('date');
			$this->load->library('editor_library');
			$this->load->helper(array('form', 'url'));
		}
		
		function index()
		{
			$data['page']='site/vportfolio';
			$data['module']=$this->module;
			$data['title']='L.R.X | Portfolio';
			$data['types']=$this->Mportfolio->getListTypes();
			$data['categories']=$this->Mportfolio->getListCategories();
			$data['portfolios']=$this->Mportfolio->getListPortfolio();
			$this->load->view("front/container",$data);
		}

	}
?>