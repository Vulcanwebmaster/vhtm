<?php
class Mgiangvien extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('date');
	}
	
	function getListByColumnOffsetsp($tableName='',$columnName='',$value='', $index='', $limit='')
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
		
		function getlistGV(){
			
		}
		
		// đếm tổng số record trong table book 
        function count_all(){
			$where = "category_lecturers = 'Trợ giảng'";
			$this->db->where($where);
			$query=$this->db->from('ta_lecturers');
			return $query;
        }
}