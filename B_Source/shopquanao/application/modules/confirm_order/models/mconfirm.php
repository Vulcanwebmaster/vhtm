<?php
	class Mconfirm extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		
		function get_input()
		{
			$input=array('first_name'=>$this->input->post('customer_first_name'),);
		}
	}
?>