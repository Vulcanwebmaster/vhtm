<?php
class Mkhoahoc extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('date');
	}
	
	function CountFull()
	{
		$list=$this->db->get('ta_courses');
		return $list->num_rows();
	}
	function DanhMuc()
	{
		$arrayList= $this->db->query('select * from  ta_courses');
		return $arrayList->result_array();
	}
	function DanhSachSanPham()
	{
		$arrayList= $this->db->query('select * from  ta_courses');
		return $arrayList->result_array();
	}
	
	function getListFullkh($tableName='')
	 	{
	 	$this->db->select();
		$this->db->from('ta_courses');
		$this->db->join('ta_category','ta_category.id=ta_courses.category_id');
		
	 	$ds=$this->db->get();
		var_dump($ds);die();
		//var_dump($ds->result()); die();
	 	$list=array();
	 	foreach($ds->result() as $item)
	 	{
	 		$list[]=$item;
	 	}
	 	$ds->free_result();
	 	return $list;
		}
}