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
			$kq=$this->db->get('hoithao',6,$index);
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
			$kq=$this->db->get('hoithao');
			$list=array();
			foreach($kq->result() as $item)
			{
				$list[]=$item;
			}
			$kq->free_result();
			return $list;
		}
	}
?>