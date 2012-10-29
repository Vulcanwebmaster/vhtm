<?php
	class Mdanhmuc extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->helper('date');
		}
		//,$number, $offset
		function getList($number, $offset)
		{
			$query = $this->db->get('tn_categories',$number, $offset);
			return $query->result();
		}
		
		function count()
		{
			$query = $this->db->get('tn_categories');
			if($query->num_rows() > 0)
				return $query->num_rows();
			else return false;
		}
		
		function getCategoryNameById($category_id)
		{
			$this->db->where('category_id',$category_id);
			$query = $this->db->get('tn_categories');
			if(count($query->num_rows()) > 0)
				return $query->row(0)->category_name;
			else return "";
		}
		
		
		function getlistParent()
		{
			$query = $this->db->query('select * from n_tn_categories where category_parent_id = 0');
			if($query->num_rows() > 0)
				return $query->result();
			else return false;
		}
		
		function insert()
		{
			$data = array(
							'category_name'		=> $this->input->post('category_name'),
							'category_parent_id'=> $this->input->post('category_parent_id')
			);
			
			if($this->db->insert('tn_categories',$data)) return true;
			else return false;
		}
		
		function getDanhmucById($category_id)
		{
			$query = $this->db->query('select * from n_tn_categories where category_id ="'.$category_id.'"');
			return $query->row(0);
		}
		
		function edit($category_id)
		{
			$data = array(
							'category_name'	=> $this->input->post('category_name'),
							'category_parent_id'	=> $this->input->post('category_parent_id'),
			);
			$this->db->where('category_id',$category_id);
			if($this->db->update('tn_categories',$data)) return true;
			else return false;
		}
		
		function del($category_id)
		{
			$this->db->where('category_id',$category_id);
			if($this->db->delete('tn_categories')) return true;
			else return false;
		}
	}
?>