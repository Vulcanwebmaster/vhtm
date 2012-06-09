<?php
	class MHomepage extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function getHomePage()
	    {
	        $data = array();
	        $this->db->order_by('muc_id','asc');
	        $Q = $this->db->get('unix_homepage');
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

		function getIDs()
	    {
	    	$data = array();
	        $this->db->select('muc_id');
	        $this->db->order_by('muc_id','asc');
	        $Q = $this->db->get('unix_homepage');
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
	    
	    function updateHomePage($data)
	    {
	    	$this->db->where('muc_id',$data['muc_id']);
			$this->db->update('unix_homepage', $data);
	    }
	    
	}
?>