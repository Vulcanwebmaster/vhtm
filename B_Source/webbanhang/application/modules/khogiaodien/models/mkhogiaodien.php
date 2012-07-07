<?php
	class Mkhogiaodien extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function getListTemplate()
		{
			$ds=$this->db->get('niw_template');
			$list=array();
			foreach($ds->result() as $item)
			{
				$list[]=$item;
			}
			$ds->free_result();
			return $list;
		}
		
		function getImageById($id)
		{
			$this->db->where('template_id',$id);
			$ds=$this->db->get('niw_template');
			if ($ds->num_rows()>0)
			{
				$item=$ds->row(0);
				$ds->free_result();
				return $item->image;
			}
			else return false;
		}
	}
?>