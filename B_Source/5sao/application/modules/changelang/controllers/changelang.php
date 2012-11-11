<?php
	class Changelang extends NIW_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->library('session');
		}
		
		function change($lang='vn',$uri_string='')
		{
			//$this->session->set_userdata('lang',$lang);
			redirect("homepage/index");
		}
	}
?>