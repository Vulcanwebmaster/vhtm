<?php
	class Mapp extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function getInfoByAlias($alias)
		{
			$this->db->where('alias',$alias);
			$ds=$this->db->get('lee_application');
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