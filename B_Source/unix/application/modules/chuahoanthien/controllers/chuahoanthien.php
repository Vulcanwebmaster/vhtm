<?php
	class Chuahoanthien extends Shop_Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		
		function index()
		{
			$this->load->view('vchuahoanthien');
		}
	}
?>