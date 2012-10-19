<?php
class Msanpham extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('date');
	}
	
	function CountFull()
	{
		$list=$this->db->get('sanpham');
		return $list->num_rows();
	}
	function DanhMuc()
	{
		$arrayList= $this->db->query('select * from  n_danhmuc');
		return $arrayList->result_array();
	}
	function DanhSachSanPham()
	{
		$arrayList= $this->db->query('select * from  n_sanpham');
		return $arrayList->result_array();
	}
}
?>