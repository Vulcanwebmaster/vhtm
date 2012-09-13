<?php
	class Msanpham extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function getCategory($id)
		{
			$this->db->where('id',$id);
			$query=$this->db->get('mc_category');
			return $query->row();
		}
		
		function getProduct($id)
		{
			$this->db->where('id',$id);
			$query=$this->db->get('mc_product');
			return $query->row();
		}
	}
?>