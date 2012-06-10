<?php
	class Getgioithieu extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function get()
		{
			$ds=$this->db->get('unix_gioithieu');
			if ($ds->num_rows()>0)
			{
				$kq=$ds->row(0);
				$ds->free_result();
				return $kq;
			}
			else return false;
		}
		
		function getListSubMenu()
		{
			$ds=$this->db->get('unix_gioithieu_submenu');
			$list=array();
			foreach($ds->result() as $item)
			{
				$list[]=$item;
			}
			$ds->free_result();
			return $list;
		}
		
		function getDetail($id)
		{
			$this->db->where('submenu_id',$id);
			$ds=$this->db->get('unix_gioithieu_submenu');
			if ($ds->num_rows()>0)
			{
				$kq=$ds->row(0);
				$ds->free_result();
				return $kq;
			}
			else return false;
		}
	}
?>