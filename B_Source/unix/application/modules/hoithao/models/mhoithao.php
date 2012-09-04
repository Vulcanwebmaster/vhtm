<?php
	class Mhoithao extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function getList($index)
		{
			$this->db->order_by('thoigian','desc');
			$kq=$this->db->get('unix_hoithao',5,$index);
			$list=array();
			foreach($kq->result() as $item)
			{
				$list[]=$item;
			}
			$kq->free_result();
			return $list;
		}
		
		function full()
		{
			$this->db->order_by('thoigian','desc');
			$kq=$this->db->get('unix_hoithao');
			$list=array();
			foreach($kq->result() as $item)
			{
				$list[]=$item;
			}
			$kq->free_result();
			return $list;
		}
		
		function getInf($id)
		{
			$this->db->where('hoithao_id',$id);
			$ds=$this->db->get('unix_hoithao');
			if ($ds->num_rows()>0)
			{
				$item=$ds->row(0);
				return $item;
			}			
			else return false;
		}
		
	    function getHoiThao()
	    {
	        $data = array();
	        $this->db->order_by('hoithao_id','asc');
	        $Q = $this->db->get('unix_hoithao');
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
	
	    function addHoiThao($data)
	    {
	    	$this->db->insert('unix_hoithao', $data);
	    }
	    
	    function updateHoiThao($data)
	    {
	   		if (isset($data['hoithao_id']))
	    	{
			   	$this->db->where('hoithao_id',$data['hoithao_id']);
	    		$this->db->update('unix_hoithao', $data);
	    	}
			else
			{
	    		$data_new = array( 
		    		'tieude'     => $data['tieude'],
		    		'noidung'    => $data['noidung'],
		    		'thoigian'   => $data['thoigian'],
		    		'phanhoi'    => $data['phanhoi'],
		    		'anhdaidien' => $data['anhdaidien']
	    		);
	    		$this->db->where('hoithao_id',$data['hoithao_id']);
				$this->db->update('unix_hoithao', $data_new);
			}
	    }
	    
		function deleteitem($table, $id)
	    {
	        if($table =='unix_hoithao')
	        {
	            $idname = 'hoithao_id';
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
	        $options = array('hoithao_id' =>$id);
	        $Q = $this->db->get_where('unix_hoithao',$options,1);
	        if ($Q->num_rows() > 0)
	        {
	            $data = $Q->row_array();
	        }
	        $Q->free_result();
	        return $data;
	    }
		
		function get_HoiThao_Default()
		{
			$query=$this->db->get('unix_hoithao_default');
			if($query->num_rows()>0)
			{
				$row=$query->row();
				return $row;
			}
			else return false;
		}

		function update_HoiThao_Default($id,$data)
		{
			$this->db->set('ngaydang','now()',false);
	    	$this->db->update('unix_hoithao_default', $data,array('id'=>$id));
		}

	}
?>