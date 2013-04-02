<?php
	class Changelang extends NIW_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->library('session');
		}
		
		function change($lang='fr',$uri_string='')
		{
			session_start();
			
                	if(isset($_SESSION['lang']))
  			   unset($_SESSION['lang']);
			$_SESSION['lang']=$lang;
			//$this->session->set_userdata('lang',$lang);
			redirect(base_url().$uri_string,'refresh');
		}
	}
