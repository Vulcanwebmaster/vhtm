<?php
	class Dichvu extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
		}
		
		function index()
		{
			$this->load->library('recaptcha');
			$data['captcha']=$this->recaptcha->get_html();
			$data['page']=$this->config->item('backendpro_template_shop').'vdichvu';
			$data['module']=$this->module;
			$this->load->view($this->_container,$data);
		}
		
		function dangkytenmien()
		{
			$this->load->view('shop/dangkytenmien');
		}
		
		function thietkedohoa()
		{
			$this->load->view('shop/thietkedohoa');
		}
		
		function chuongtrinhdaily()
		{
			$this->load->view('shop/chuongtrinhdaily');
		}
		
		function chuongtrinhlienket()
		{
			$this->load->view('shop/chuongtrinhlienket');
		}
		
		function quangcao()
		{
			$this->load->view('shop/quangcao');
		}
	}
?>