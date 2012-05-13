<?php
	class Get_inf extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function get($id)
		{
			$this->db->where('id',$id);
			$kq=$this->db->get('omc_products');
			if ($kq->num_rows()>0)
				return $kq->row(0);
			else return false;
		}
		
		function other_products($id)
		{			
			$item=$this->get($id);
			
			$this->db->where('category_id',$item->category_id);
			$ds=$this->db->get('omc_products');
			
			$count=0;
			$kq=array();
			while ($count<3)
			{
				$a=$ds->row($count);
				$kq[]=$a;
				$count++;
			}
			return $kq;
		}
	}
?>