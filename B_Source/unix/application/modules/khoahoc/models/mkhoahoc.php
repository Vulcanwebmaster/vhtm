<?php
	class Mkhoahoc extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->helper('date');
		}
		
		function getlist($id_doituong,$index)
		{
			$this->db->order_by('thoigian','desc');
			if ($id_doituong>0)
				$this->db->where('loaikhoahoc_id',$id_doituong);
			$ds=$this->db->get('unix_khoahoc',4,$index);
			$list=array();
			foreach($ds->result() as $item)
			{
				$list[]=$item;
			}
			$ds->free_result();
			return $list;
		}
		
		function count($id_doituong)
		{
			if ($id_doituong>0)
				$this->db->where('loaikhoahoc_id',$id_doituong);
			$ds=$this->db->get('unix_khoahoc');
			$list=array();
			foreach($ds->result() as $item)
			{
				$list[]=$item;
			}
			$ds->free_result();
			return count($list);
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
	    			'tieude'     => $data['tieude'],
		    		'mota'       => $data['mota'],
		    		'thoigian'     => $data['thoigian'],
		    		'hocphi'     => $data['hocphi'],
	    		    'doituong'     => $data['loaikhoahoc_id'],
	    			'anhdaidien' => $data['anhdaidien']
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
	    
	    function getListDoiTuong()
	    {
	    	$ds=$this->db->get('unix_loaikhoahoc');
	    	$list=array();
	    	foreach($ds->result() as $item)
	    	{
	    		$list[]=$item;
	    	}
	    	$ds->free_result();
	    	return $list;
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
		
		function get_KhoaHoc_Default()
		{
			$query=$this->db->get('unix_khoahoc_default');
			if($query->num_rows()>0)
			{
				$row=$query->row();
				return $row;
			}
			else return false;
		}
		
		function update_KhoaHoc_Default($id,$data)
		{
			$this->db->set('ngaydang','now()',false);
	    	$this->db->update('unix_khoahoc_default', $data,array('id'=>$id));
		}
				
		
	}
?>