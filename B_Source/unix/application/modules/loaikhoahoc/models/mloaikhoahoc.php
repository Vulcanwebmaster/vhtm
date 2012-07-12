<?php
	class MLoaiKhoaHoc extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
	    function getLoaiKhoaHoc()
	    {
	        $data = array();
	        $this->db->order_by('loaikhoahoc_id','asc');
	        $Q = $this->db->get('unix_loaikhoahoc');
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
		
	    function getLoaiKhoahocDropDown()
	    {
	        $data = array();
	        $this->db->select('loaikhoahoc_id,tenloai');
	        $this->db->order_by('loaikhoahoc_id','asc');
	        $Q = $this->db->get('unix_loaikhoahoc');
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
	
	    function addLoaiKhoaHoc($data)
	    {
	    	$this->db->insert('unix_loaikhoahoc', $data);
	    }
	    
	    function updateLoaiKhoaHoc($data)
	    {
	   		if (isset($data['loaikhoahoc_id']))
	    	{
			   	$this->db->where('loaikhoahoc_id',$data['loaikhoahoc_id']);
	    		$this->db->update('unix_loaikhoahoc', $data);
	    	}
			else
			{
	    		$data_new = array( 
		    		'tenloai' => $data['tenloai']
	    		);
	    		$this->db->where('loaikhoahoc_id',$data['loaikhoahoc_id']);
				$this->db->update('unix_loaikhoahoc', $data_new);
			}
	    }
	    
		function deleteitem($table, $id)
	    {
	        if($table =='unix_loaikhoahoc')
	        {
	            $idname = 'loaikhoahoc_id';
	        }    
	        else 
	        {
	            $idname = 'id';
	        }
		 $this->db->where($idname, $id)->delete($table);
	    }
	    
		function getInfo($id)
	    {
	        $data = array();                     
	        $options = array('loaikhoahoc_id' =>$id);
	        $Q = $this->db->get_where('unix_loaikhoahoc',$options,1);
	        if ($Q->num_rows() > 0)
	        {
	            $data = $Q->row_array();
	        }
	        $Q->free_result();
	        return $data;
	    }
	}
?>