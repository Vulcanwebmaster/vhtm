<?php
	class Mdanhmuc extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function ListDanhMuc()
		{
			$query=$this->db->get('unix_danhmuc');
			return $query->result();
		}
			
		function getListDanhMuc()
		{
			$query=$this->db->get('unix_danhmuc',100,3);
			return $query->result();
		}
		
		function getChuyenMuc($id)
		{
			$this->db->where('id',$id);
			$query=$this->db->get('unix_chuyenmuc');
			return $query->row();
		}
		
		function getListChuyenMuc()
		{
			$query=$this->db->get('unix_chuyenmuc');
			return $query->result();
		}
		
		function insertDanhMuc()
		{
			$this->db->insert('unix_danhmuc',array('ten'=>$this->input->post('ten')));
		}
		
		
		function insertChuyenMuc($data)
		{
			$this->db->set('ngaydang','now()',false);
			$this->db->insert('unix_chuyenmuc',$data);
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
		
		function updateChuyenMuc($id,$data)
		{
			$this->db->where('id',$id);
			$this->db->set('ngaydang','now()',false);
			$this->db->update('unix_chuyenmuc',$data);
		}
		
		function deleteChuyenmuc($id)
		{
			$this->db->where('id',$id);
			$this->db->delete('unix_chuyenmuc');
		}

	}
	
?>