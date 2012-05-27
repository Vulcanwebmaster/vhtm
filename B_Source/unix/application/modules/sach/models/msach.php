<?php
	class Msach extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function getlist($index)
		{
			$ds=$this->db->get('unix_sach',6,$index);
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
			$ds=$this->db->get('unix_sach');
			$list=array();
			foreach($ds->result() as $item)
			{
				$list[]=$item;
			}
			$ds->free_result();
			return count($list);
		}
		
		function getInf($id)
		{
			$this->db->where('sach_id',$id);
			$ds=$this->db->get('unix_sach');
			if ($ds->num_rows()>0)
			{
				$item=$ds->row(0);
				return $item;
			}			
			else return false;
		}
		
	function getSach()
	    {   
	        $data = array();
	        $query_string = "SELECT unix_sach.sach_id AS sach_id, 
	        						unix_sach.mota AS mota, 
	        						unix_sach.tensach AS tensach, 
	        						unix_sach.tacgia AS tacgia,
	        						unix_loaisach.loaisach_id AS loaisach_id, 
	        						unix_loaisach.tenloai AS tenloai
							FROM unix_sach, unix_loaisach
							WHERE unix_sach.loaisach_id = unix_loaisach.loaisach_id";
	        
	        $Q = $this->db->query($query_string);
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
	
	    function addSach($data)
	    {
	    	$this->db->insert('unix_sach', $data);
	    }
	    
	    function updateSach($data)
	    {
	   		if (isset($data['sach_id']))
	    	{
			   	$this->db->where('sach_id',$data['sach_id']);
	    		$this->db->update('unix_sach', $data);
	    	}
			else
			{
	    		$data_new = array( 
		    		'tensach'     => $data['tensach'],
		    		'mota'        => $data['mota'],
		    		'loaisach_id' => $data['loaisach_id'],
		    		'tacgia'      => $data['tacgia']
	    		);
	    		$this->db->where('sach_id',$data['sach_id']);
				$this->db->update('unix_sach', $data_new);
			}
	    }
	    
		function deleteitem($table, $id)
	    {
	        if($table =='unix_sach')
	        {
	            $idname = 'sach_id';
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
	        $query_string = "SELECT unix_sach.sach_id AS sach_id, 
	        						unix_sach.mota AS mota, 
	        						unix_sach.tensach AS tensach, 
	        						unix_sach.tacgia AS tacgia, 
	        						unix_loaisach.loaisach_id AS loaisach_id,
	        						unix_loaisach.tenloai AS tenloai
							FROM unix_sach, unix_loaisach
							WHERE unix_sach.loaisach_id = unix_loaisach.loaisach_id 
							  AND unix_sach.sach_id = ".$id;
	        
	        $Q = $this->db->query($query_string);
	        if ($Q->num_rows() > 0)
	        {
	            $data = $Q->row_array();
	        }
	        $Q->free_result();
	        return $data;
	    }
	}
?>