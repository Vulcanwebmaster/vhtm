<?php
	class Mtimkiem extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();			
		}
		
		function searchByName($str,$lang)
		{
			if ($lang=='vn')
				$this->db->like('product_name_vn',$str,'both');
			else $this->db->like('product_name_en',$str,'both');
			$ds=$this->db->get('n_b_product');
			$list=array();
			foreach($ds->result() as $item)
			{
				$list[]=$item;
			}
			$ds->free_result();
			return $list;
		}
	}
?>