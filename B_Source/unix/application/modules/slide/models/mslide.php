<?php
	class Mslide extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->database();
			$this->load->library('session');
		}
		
		function getSlide($stt)
	    {
	        $query=$this->db->get('unix_slide');
			return $query->row($stt);
	    }
		
		function updateSlide($data)
	    {
	    	$this->db->where('id',$data['id']);
			$this->db->update('unix_slide', $data);
	    }
		
		function getIDs()
	    {
	    	$data = array();
	        $this->db->select('id');
	        $this->db->order_by('id','asc');
	        $Q = $this->db->get('unix_slide');
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