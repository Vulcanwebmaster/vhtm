<?php
	class MLoaisach extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
	    function getLoaiSach()
	    {
	        $data = array();
	        $this->db->order_by('loaisach_id','asc');
	        $Q = $this->db->get('unix_loaisach');
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
		
	    function getLoaiSachDropDown()
	    {
	        $data = array();
	        $this->db->select('loaisach_id,tenloai');
	        $this->db->order_by('loaisach_id','asc');
	        $Q = $this->db->get('unix_loaisach');
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
	
	    function addLoaiSach($data)
	    {
	    	$this->db->insert('unix_loaisach', $data);
	    }
	    
	    function updateLoaiSach($data)
	    {
	   		if (isset($data['loaisach_id']))
	    	{
			   	$this->db->where('loaisach_id',$data['loaisach_id']);
	    		$this->db->update('unix_loaisach', $data);
	    	}
			else
			{
	    		$data_new = array( 
		    		'tenloai' => $data['tenloai'],
		    		'mota'    => $data['mota']
	    		);
	    		$this->db->where('loaisach_id',$data['loaisach_id']);
				$this->db->update('unix_loaisach', $data_new);
			}
	    }
	    
		function deleteitem($table, $id)
	    {
	        if($table =='unix_loaisach')
	        {
	            $idname = 'loaisach_id';
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
	        $options = array('loaisach_id' =>$id);
	        $Q = $this->db->get_where('unix_loaisach',$options,1);
	        if ($Q->num_rows() > 0)
	        {
	            $data = $Q->row_array();
	        }
	        $Q->free_result();
	        return $data;
	    }
	}
?>