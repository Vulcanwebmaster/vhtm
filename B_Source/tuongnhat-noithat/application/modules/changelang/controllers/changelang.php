<?php
	class Changelang extends NIW_Controller
	{
		function __construct()
		{
			@session_start();
			parent::__construct();
		}
		
		function change($lang='vn')
		{
			$_SESSION['lang'] = $lang;
			redirect(base_url(),'refresh');
		}
	}
