<?php
	class Msanpham extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function getCategory($id)
		{
			$this->db->where('id',$id);
			$query=$this->db->get('mc_category');
			return $query->row();
		}
		
		function getProduct($id)
		{
			$this->db->where('id',$id);
			$query=$this->db->get('mc_product');
			return $query->row();
		}
		
		function CountFull()
		{
			$list=$this->db->get('mc_product');
			return $list->num_rows();
		}
		function DanhMuc()
		{
			$arrayList= $this->db->query('select * from  n_mc_category');
			return $arrayList->result_array();
		}
		function DanhSachSanPham()
		{
			$arrayList= $this->db->query('select * from  n_mc_product');
			return $arrayList->result_array();
		}
		
		function getListByColumnOffset($tableName='',$columnName='',$value='', $index='', $limit='')
		 {
		 	$this->db->where($columnName,$value);
		 	$ds=$this->db->get($tableName,$limit,$index);
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