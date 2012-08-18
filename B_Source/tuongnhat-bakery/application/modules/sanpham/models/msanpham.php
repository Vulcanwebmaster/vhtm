<?php
	class Msanpham extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();			
		}
		
		function GetListCate()
		{
			$ds=$this->db->get('n_b_product_category');
			$list=array();
			foreach ($ds->result() as $cate)
			{
				$list[]=$cate;
			}
			$ds->free_result();
			return $list;
		}
		
		function GetCategoryById($id)
		{
			$this->db->where('category_id',$id);
			$ds=$this->db->get('n_b_product_category');	
			if ($ds->num_rows()>0)
			{
				$item=$ds->row(0);
				$ds->free_result();
				return $item;
			}
			else return false;
		}
		
		function GetProductByCategoryId($cate_id)
		{
			$this->db->where('category_id',$cate_id);
			$ds=$this->db->get('n_b_product');
			$list=array();
			foreach($ds->result() as $product)
			{
				$list[]=$product;
			}
			$ds->free_result();
			return $list;
		}
		
		function GetDetailProductById($product_id)
		{
			$this->db->where('product_id',$product_id);
			$ds=$this->db->get('n_b_product');
			if ($ds->num_rows()>0)
			{
				$item=$ds->row(0);
				$ds->free_result();
				return $item;
			}
			else false;
		}
	}
?>