<?php
	class MDangky extends CI_Model
	{
		function construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function getDangKy()
	    {
	        $data = array();
	        $this->db->order_by('dangky_id','asc');
	        $Q = $this->db->get('unix_dangky');
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
	}
?>