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
			$query=$this->db->get('xh_category');
			return $query->row();
		}
		
		function getProduct($id)
		{
			$this->db->where('id',$id);
			$query=$this->db->get('xh_product');
			return $query->row(0);
		}
		
		function CountFull()
		{
			$list=$this->db->get('xh_product');
			return $list->num_rows();
		}
		function DanhMuc()
		{
			$arrayList= $this->db->query('select * from  n_xh_category');
			return $arrayList->result_array();
		}
		function DanhSachSanPham()
		{
			$arrayList= $this->db->query('select * from  n_xh_product');
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