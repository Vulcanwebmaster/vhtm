<?php
	class Mwebsite extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function getListInfo()
		{
			$ds=$this->db->get('lee_website');
			$list=array();
			foreach ($ds->result() as $item)
			{
				$list=$item;
			}
			$ds->free_result();
			return $list;
		}
		
		function getInfoByAlias($alias)
		{
			$this->db->where('alias',$alias);
			$ds=$this->db->get('lee_website');
			if ($ds->num_rows()>0)
			{
				$item=$ds->row(0);
				$ds->free_result();
				return $item;
			}
			else return false;
		}
	}
?>