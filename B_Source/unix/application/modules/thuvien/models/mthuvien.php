<?php
	class Mthuvien extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function getNameType($idtype)
		{
			$this->db->where('loaisach_id',$idtype);
			$ds=$this->db->get('unix_loaisach');
			if ($ds->num_rows()>0)
			{
				$target=$ds->row(0);
				return $target->tenloai;
			}
			else return false;
		}
		
		function getListType()
		{
			$ds=$this->db->get('unix_loaisach');
			$list=array();
			foreach($ds->result() as $item)
			{
				$list[]=$item;
			}
			$ds->free_result();
			return $list;
		}
		
		//================================ FULL ====================================
		function countFull($loaisach_id)
		{
			if ($loaisach_id>0)
				$this->db->where('loaisach_id',$loaisach_id);
			$ds=$this->db->get('unix_sach');
			$list=array();
			foreach ($ds->result() as $item)
			{
				$list[]=$item;
			}
			$ds->free_result();
			return count($list);
		}
		
		function getListFull($loaisach_id, $index)
		{
			if ($loaisach_id>0)
				$this->db->where('loaisach_id',$loaisach_id);
			$ds=$this->db->get('unix_sach',4,$index);
			$list=array();
			foreach ($ds->result() as $item)
			{
				$list[]=$item;
			}
			$ds->free_result();
			return $list;
		}
		
		//=======================FILTER=================================
		function count($idtype)
		{
			if ($idtype!='0')
			{
				$this->db->where('loaisach_id',$idtype);
			}
			$ds=$this->db->get('unix_sach');
			$list=array();
			foreach ($ds->result() as $item)
			{
				$list[]=$item;
			}
			$ds->free_result();
			return count($list);
		}
		
		function getList($idtype)
		{
			if ($idtype!='0')
			{
				$this->db->where('loaisach_id',$idtype);
			}
			$ds=$this->db->get('unix_sach');
			$list=array();
			foreach ($ds->result() as $item)
			{
				$list[]=$item;
			}
			$ds->free_result();
			return $list;
		}
		
		//=====================================DETAIL================================
		function getDetail($id)
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
	}
?>