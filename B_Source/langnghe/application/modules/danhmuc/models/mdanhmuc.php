<?php
	class Mdanhmuc extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		//lay gia tri cho danhmuc
		function getActive($is_active)
		{
			$this->db->select('category_id,is_active');
			$this->db->from('ln_category');
			$this->db->where(array('is_active' =>1));
			$query = $this->db->get();
		}
		
	}
