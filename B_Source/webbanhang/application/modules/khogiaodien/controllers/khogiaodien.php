<?php
	class Khogiaodien extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('Mkhogiaodien');
		}
		
		function index()
		{
			$this->load->library('recaptcha');
			$data['captcha']=$this->recaptcha->get_html();
			$data['page']=$this->config->item('backendpro_template_shop').'vkhogiaodien';
			$data['module']=$this->module;
			$data['listTemplate']=$this->Mkhogiaodien->getListTemplate();
			$this->load->view($this->_container,$data);
		}
	}
?>