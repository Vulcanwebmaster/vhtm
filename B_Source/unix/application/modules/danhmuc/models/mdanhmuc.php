<?php
	class Mdanhmuc extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
				
		function getListDanhMuc()
		{
			$query=$this->db->get('unix_danhmuc');
			return $query->result();
		}
		
		function insert()
		{
			$this->db->insert('unix_danhmuc',array('ten'=>$this->input->post('ten')));
		}
		
		function updateDanhMuc($data)
		{
			$this->db->where('id',$data['id']);
			$this->db->update('unix_danhmuc', $data);
		}
		
		function getIDs()
	    {
	    	$data = array();
	        $this->db->select('id');
	        $this->db->order_by('id','asc');
	        $Q = $this->db->get('unix_danhmuc');
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