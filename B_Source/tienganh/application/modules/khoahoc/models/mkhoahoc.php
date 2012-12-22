<?php
class Mkhoahoc extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('date');
	}
	
	function getListCategory()
	{
		$this->db->select();
		$this->db->from('ta_courses');
		$this->db->join('ta_courses_cate','ta_courses_cate.id=ta_courses.courses_category');
		
		$ds=$this->db->get();
		//var_dump($ds); die();
		$list=array();
	 	foreach($ds->result() as $item)
	 	{
	 		$list[]=$item;
	 	}
	 	$ds->free_result();
	 	return $list;
		
	}
	
	function CountFull()
	{
		$list=$this->db->get('ta_courses');
		return $list->num_rows();
	}
	
	function getCoursesCate($id)
	{
		$query->$this->db->query("SELECT courses_name FROM ta_courses, ta_courses_cate WHERE ta_courses.courses_category=ta_courses_cate.id");
		return $query->result();
	}
	function getListFullCategory($tableName='')
	 	{
	 	$this->db->select();
		$this->db->from('ta_courses_cate');
		$this->db->join('ta_courses','ta_courses.courses_category=ta_courses_cate.id');
		
	 	$ds=$this->db->get();
		
	 	$list=array();
	 	foreach($ds->result() as $item)
	 	{
	 		$list[]=$item;
	 	}
	 	$ds->free_result();
		//var_dump($list);die();
	 	return $list;
		}
		
}