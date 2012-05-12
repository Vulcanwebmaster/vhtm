<?php
	class Get_data extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function get_list()
		{
			$list=$this->db->get_where('omc_products',array('category_id'=>'26'));
			return $list->result();
		}
	}
?>