<?php class Mdangky extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function dangky($input)
		{
			$this->db->insert('shopping_register',$input);
		}
		
		function getListDangKy()
		{
			$ds=$this->db->get('shopping_register');
			$list=array();
			foreach($ds->result() as $item)
			{
				$list[]=$item;
			}
			$ds->free_result();
			return $list;
		}
		
		function delete($id)
		{
			$this->db->delete('shopping_register',array('dangky_id'=>$id));
		}
	}
?>