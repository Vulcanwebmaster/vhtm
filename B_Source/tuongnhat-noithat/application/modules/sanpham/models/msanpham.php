<?php
	class Msanpham extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->helper('date');
		}
		//$number, $offset
		function getListSanpham($number, $offset)
		{
			$query = $this->db->get('tn_products',$number, $offset);
			return $query->result();
		}
		
		function countSanpham()
		{
			$query = $this->db->get('tn_products');
			if($query->num_rows() > 0)
				return $query->num_rows();
			else return false;
		}
		
		function getSanphamById($product_id)
		{
			$this->db->where('product_id',$product_id);
			$query = $this->db->get('tn_products');
			return $query->row(0);
		}
		
		function editSanpham($product_id, $input)
		{
			if($this->db->update('tn_products',$input,array('product_id'=>$product_id))) return true;
			else return false;
		}
		
		function insertSanpham($data)
		{
			if($this->db->insert('tn_products',$data)) return true;
			else return false;
		}
		
		function delSanpham($product_id)
		{
			$this->db->where('product_id',$product_id);
			if($this->db->delete('tn_products')) return true;
			else return false;
		}

		function getListCategory()
		{
			$query = $this->db->query('select * from n_tn_categories order by category_parent_id asc');
			if($query->num_rows() > 0)
				return $query->result();
			else return false;
		}

		function getCategoryNameById($category_id)
		{
			$this->db->where('category_id',$category_id);
			$query = $this->db->get('tn_categories');
			if(count($query->num_rows()) > 0)
				return $query->row(0)->category_name_v;
			else return "";
		}
	}
	