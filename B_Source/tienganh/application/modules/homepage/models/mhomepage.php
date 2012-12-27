<?php
	class Mhomepage extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
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