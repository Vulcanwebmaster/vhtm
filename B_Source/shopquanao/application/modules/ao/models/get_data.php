<?php
	class Get_data extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function type($type)
		{
			if ($type=='ao')
				$cat_id='26';
			elseif ($type=='quan')
				$cat_id='25';	
			elseif ($type=='phukien')
				$cat_id='27';				
			return $cat_id;
		}
		
		function get_list($type,$offset)
		{
			$cat_id=$this->type($type);
			
	        $this->db->where('category_id', $cat_id);	        
	        $data = array();
		
	    	$Q=	$this->db->get("omc_products",8,$offset);
	
	        if ($Q->num_rows() > 0)
	        {
	            foreach ($Q->result_array() as $row)
	            {
	                $data[] = $row;
	            }
	        }
	        $Q->free_result();
	        return $data;
		}
		
		function count($type)
		{
			$cat_id=$this->type($type);
			$this->db->where('category_id', $cat_id);
			$list=$this->db->get("omc_products");
			return $list->num_rows();
		}
		
		//=====HÀNG MỚI VỀ ==================================================================
		function hang_moi_ve($offset)
		{
			$this->db->where('other_feature', 'new product');	        
	        $data = array();
		
	    	$Q=	$this->db->get("omc_products",8,$offset);
	
	        if ($Q->num_rows() > 0)
	        {
	            foreach ($Q->result_array() as $row)
	            {
	                $data[] = $row;
	            }
	        }
	        $Q->free_result();
	        return $data;		
		}
		function count_hang_moi()
		{
			$this->db->where('other_feature', 'new product');	        
	        $data = array();
		
	    	$Q=	$this->db->get("omc_products");
			return $Q->num_rows();
		}
		
	}
?>