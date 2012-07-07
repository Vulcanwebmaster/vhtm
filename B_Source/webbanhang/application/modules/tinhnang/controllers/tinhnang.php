<?php
	class Tinhnang extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('Mtinhnang');
		}
		
		function index()
		{
			$this->load->library('recaptcha');
			$data['captcha']=$this->recaptcha->get_html();
			$data['listTemplate']=$this->Mtinhnang->getListTemplate();
			$data['page']=$this->config->item('backendpro_template_shop').'vtinhnang';
			$data['module']=$this->module;
			$this->load->view($this->_container,$data);
		}
	}
?>