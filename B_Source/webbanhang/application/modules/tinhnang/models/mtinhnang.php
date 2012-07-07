<?php
	class Mtinhnang extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		
		function getListTemplate()
		{
			$ds=$this->db->get('niw_template',3,0);
			$list=array();
			foreach($ds->result() as $item)
			{
				$list[]=$item;
			}
			$ds->free_result();
			return $list;
		}
	}
?>