<?php
	class Mkhoahoc extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function getlist($index)
		{
			$ds=$this->db->get('unix_khoahoc',6,$index);
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
			$ds=$this->db->get('unix_khoahoc');
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
			$this->db->where('khoahoc_id',$id);
			$ds=$this->db->get('unix_khoahoc');
			if ($ds->num_rows()>0)
			{
				$item=$ds->row(0);
				return $item;
			}			
			else return false;
		}
		
	function getKhoaHoc()
	    {
	        $data = array();
	        $this->db->order_by('khoahoc_id','asc');
	        $Q = $this->db->get('unix_khoahoc');
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
	
	    function addKhoaHoc($data)
	    {
	    	$this->db->insert('unix_khoahoc', $data);
	    }
	    
	    function updateKhoaHoc($data)
	    {
	   		if (isset($data['khoahoc_id']))
	    	{
			   	$this->db->where('khoahoc_id',$data['khoahoc_id']);
	    		$this->db->update('unix_khoahoc', $data);
	    	}
			else
			{
	    		$data_new = array( 
		    		'mota'     => $data['mota'],
		    		'batdau'    => $data['batdau'],
		    		'ketthuc'   => $data['ketthuc'],
		    		'hocphi'    => $data['hocphi']
	    		);
	    		$this->db->where('khoahoc_id',$data['khoahoc_id']);
				$this->db->update('unix_khoahoc', $data_new);
			}
	    }
	    
		function deleteitem($table, $id)
	    {
	        if($table =='unix_khoahoc')
	        {
	            $idname = 'khoahoc_id';
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
	        $options = array('khoahoc_id' =>$id);
	        $Q = $this->db->get_where('unix_khoahoc',$options,1);
	        if ($Q->num_rows() > 0)
	        {
	            $data = $Q->row_array();
	        }
	        $Q->free_result();
	        return $data;
	    }
	}
?>