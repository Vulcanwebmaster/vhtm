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
		
		//lay du lieu theo tung phan
        function list_all($number,$offset){ 
            $query =  $this->db->get('xh_product',$number,$offset); 
            return $query->result_array(); 
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
		
		function getListByColumnOff($tableName='',$columnName='', $index='', $limit='')
		{
			$this->db->where($columnName);
	 		$ds=$this->db->get($tableName);
	 		if ($ds->num_rows()>0)
	 		{
	 		$item=$ds->row(0);
	 		$ds->free_result();
	 		return $item;
	 		}
	 	else return false;
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