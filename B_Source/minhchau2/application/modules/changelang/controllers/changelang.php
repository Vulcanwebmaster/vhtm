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
			/*echo '<script language=javascript>
				alert("'.$uri_string.'");
			</script>';*/
			
			$this->session->set_userdata('lang',$lang);
			redirect(base_url().$uri_string,'refresh');
		}
	}
?>