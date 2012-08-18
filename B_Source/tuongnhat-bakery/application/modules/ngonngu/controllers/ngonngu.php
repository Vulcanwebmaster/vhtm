<?php
	class Ngonngu extends NIW_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->library('session');
		}
		
		function change($lang='vn',$current_uri='')
		{
			
			if ($lang=='en')
				$this->session->set_userdata('lang','eng');
			elseif ($lang=='vn') $this->session->set_userdata('lang','vn');
			
			redirect(base_url().$current_uri);
		}
	}
?>