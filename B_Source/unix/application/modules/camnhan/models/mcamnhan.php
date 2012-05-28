<?php
	class MCamnhan extends CI_Model
	{
		function construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function getList($index)
		{
			$ds=$this->db->get('unix_camnhan',5,$index);
			$list=array();
			foreach($ds->result() as $item)
			{
				$list[]=$item;
			}
			$ds->free_result();
			return $list;
		}
		
		function count()
		{
			$ds=$this->db->get('unix_camnhan');
			$list=array();
			foreach($ds->result() as $item)
			{
				$list[]=$item;
			}
			$ds->free_result();
			return count($list);
		}
		function getCamNhan()
	    {
	        $data = array();
	        $this->db->order_by('camnhan_id','asc');
	        $Q = $this->db->get('unix_camnhan');
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
	
	    function addCamNhan($data)
	    {
	    	$this->db->insert('unix_camnhan', $data);
	    }
	    
	    function updateCamNhan($data)
	    {
	   		if (isset($data['camnhan_id']))
	    	{
			   	$this->db->where('camnhan_id',$data['camnhan_id']);
	    		$this->db->update('unix_camnhan', $data);
	    	}
			else
			{
	    		$data_new = array( 
		    		'noidung'    => $data['noidung'],
		    		'ngaythang'  => $data['ngaythang'],
		    		'nguoidang'  => $data['nguoidang']
	    		);
	    		$this->db->where('camnhan_id',$data['camnhan_id']);
				$this->db->update('unix_camnhan', $data_new);
			}
	    }
	    
		function deleteitem($table, $id)
	    {
	        if($table =='unix_camnhan')
	        {
	            $idname = 'camnhan_id';
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
	        $options = array('camnhan_id' =>$id);
	        $Q = $this->db->get_where('unix_camnhan',$options,1);
	        if ($Q->num_rows() > 0)
	        {
	            $data = $Q->row_array();
	        }
	        $Q->free_result();
	        return $data;
	    }
	}
?>