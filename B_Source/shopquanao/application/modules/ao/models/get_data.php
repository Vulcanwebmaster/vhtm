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
		
	    	$Q=	$this->db->get("omc_products",10,$offset);
	
	        if ($Q->num_rows() > 0)
	        {
	            foreach ($Q->result() as $row)
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
	}
?>