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
			$kq=$this->db->get('unix_hoithao',6,$index);
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
	}
?>