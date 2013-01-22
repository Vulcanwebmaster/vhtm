<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter Model Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/libraries/config.html
 */
class CI_Model {

	/**
	 * Constructor
	 *
	 * @access public
	 */
	function __construct()
	{
		log_message('debug', "Model Class Initialized");
	}

	/**
	 * __get
	 *
	 * Allows models to access CI's loaded classes using the same
	 * syntax as controllers.
	 *
	 * @param	string
	 * @access private
	 */
	function __get($key)
	{
		$CI =& get_instance();
		return $CI->$key;
	}
	
	//===================== MY FUNCTIONS ========================================
	 
function getRowByColumn($tableName='',$columnName='',$value='')
	 {
	 	$this->db->where($columnName,$value);
	 	$ds=$this->db->get($tableName);
	 	if ($ds->num_rows()>0)
	 	{
	 		$item=$ds->row(0);
	 		$ds->free_result();
	 		return $item;
	 	}
	 	else return false;
	 }
	 
	 function getListFull($tableName='')
	 {
	 	$ds=$this->db->get($tableName);
	 	$list=array();
	 	foreach($ds->result() as $item)
	 	{
	 		$list[]=$item;
	 	}
	 	$ds->free_result();
	 	return $list;
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
	 
	 function getListOffset($tableName='',$offset='',$index='')
	 {
	 	$ds=$this->db->get($tableName,$offset,$index);
	 	$list=array();
	 	foreach($ds->result() as $item)
	 	{
	 		$list[]=$item;
	 	}
	 	$ds->free_result();
	 	return $list;
	 }
	 
	 function getListByColumn($tableName='',$columnName='',$value='')
	 {
	 	$this->db->where($columnName,$value);
	 	$ds=$this->db->get($tableName);
	 	$list=array();
	 	foreach($ds->result() as $item)
	 	{
	 		$list[]=$item;
	 	}
	 	$ds->free_result();
	 	return $list;
	 }
	 
	function getListWithOutColumn($tableName='',$columnName='',$value='')
	 {
	 	$this->db->where($columnName.' !=',$value);
	 	$ds=$this->db->get($tableName);
	 	$list=array();
	 	foreach($ds->result() as $item)
	 	{
	 		$list[]=$item;
	 	}
	 	$ds->free_result();
	 	return $list;
	 }
	 
	 function insertNewRow($tableName='',$input)
	 {
	 	if ($this->db->insert($tableName,$input))
	 		return true;
	 	else return false;
	 }
	 
	 function deleteRowByColumn($tableName='',$columnName='',$value='')
	 {
	 	if ($this->db->delete($tableName,array($columnName=>$value)))
	 		return true;
	 	else return false;
	 }
	 
	 function updateRowByColumn($tableName='',$columnName='',$value='',$input)
	 {
	 	//var_dump($input);die();
	 	if ($this->db->update($tableName,$input,array($columnName=>$value)))
	 		return true;
	 	else return false;
	 }
	 
	 function cutString($str,$offset=100)
	 {
	 	$length=strlen($str);
	 	if ($length>$offset)
	 	{
	 		while ($str[$offset]!=' ' && $offset<$length)
	 			$offset++;
	 	}
	 	else $offset=$length;
	 	return substr($str,0, $offset);
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
	 
	 function getListOrderByColumn($tableName='', $columnName='', $typeOrder='', $index='', $limit='')
	 {
	 	$this->db->order_by($columnName,$typeOrder);
	 	$this->db->where($columnName,$value);
	 	if ($limit!='')
	 		$ds=$this->db->get($tableName,$limit,$index);
	 	else $ds=$this->db->get($tableName);
	 	$list=array();
	 	foreach($ds->result() as $item)
	 	{
	 		$list[]=$item;
	 	}
	 	$ds->free_result();
	 	return $list;
	 }
	 
	 function getSpByParentID($id){
	 	// Gọi ra các sản phẩm của các danh mục con có id danh mục cha...
		  $query= $this->db->query("SELECT DISTINCT n_sanpham.*, n_danhmuc.parent_id
										FROM n_sanpham, n_danhmuc
										WHERE n_danhmuc.parent_id ='".$id."'  and n_sanpham.danhmuc_id=n_danhmuc.id");
		  return $query->result();
	 }
}
// END Model Class

/* End of file Model.php */
/* Location: ./system/core/Model.php */