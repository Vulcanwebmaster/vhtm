<?php
class Mtimkiem extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function getListByColumnLikeText($tableName='', $columnName='',$value='')
	 {
	 	echo '<meta charset="UTF-8"/>';
	 	mysql_set_charset('utf8');
	 	$ds=$this->db->query("select * from n_".$tableName." where ".$columnName." like '%".$value."%'");
	 	$list=array();
	 	foreach($ds->result() as $item)
	 	{
	 		$list[]=$item;
	 	}
	 	$ds->free_result();
	 	return $list;
	 }
	 
	 function getListByColumnOffsetLikeText($tableName='', $columnName='',$value='', $index='', $limit='')
	 {
	 	echo '<meta charset="UTF-8"/>';
	 	/*$this->db->like($columnName,$value);
	 	$ds=$this->db->get($tableName,$limit,$index);*/
	 	mysql_set_charset('utf8');
	 	$ds=$this->db->query("select * from n_".$tableName." where ".$columnName." like '%".$value."%' limit ".$limit." offset ".$index);
	 	$list=array();
	 	foreach($ds->result() as $item)
	 	{
	 		$list[]=$item;
	 	}
	 	$ds->free_result();
	 	return $list;
	 }
}