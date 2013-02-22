<?php
class Mnews extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('date');
	}
	
	function CountFull()
	{
		$list=$this->db->get('fg_news');
		return $list->row();
	}
	//top giai dau co so tien thuong cao nhat
	function Topgiaidau($limit)
	{
		$this->db->select();
		$this->db->from('fg_tournaments');
		$this->db->order_by("tienthuong", "desc");
		//$this->db->order_by("title", "desc"); 
		$this->db->limit($limit);
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
	
	function getListCategory()
	{
		$this->db->select();
		$this->db->from('fg_news');
		$this->db->join('fg_news_tag','fg_news_tag.id_news=fg_news.id');
		
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
	function getListTagvNews($tableName='',$columnName='',$id='')
	 {
 		
		 $this->db->select();
		 $this->db->from('fg_news_tag');
		 $this->db->where('id', $id); 
		 $this->db->join('fg_news','fg_news.id=fg_news_tag.id_news');
		 $ds=$this->db->get();
		 $list=array();
	 	 foreach($ds->result() as $item)
	 	 {
	 		 $list[]=$item;
	 	 }
	 	 $ds->free_result();
	 	 return $list;
	 }
	//top nguoi thang cuoc co so tien thuong cao nhat
	function Topwin($limit)
	{
		$this->db->select();
		$this->db->from('fg_accounts');
		$this->db->order_by("money", "desc");
		//$this->db->order_by("title", "desc"); 
		$this->db->limit($limit);
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
		
	// function getSpByParentID($id)
	 // {
	 	// // Gọi ra các sản phẩm của các danh mục con có id danh mục cha...
		  // $query= $this->db->query("SELECT n_sanpham.*, n_danhmuc.parent_id
										// FROM n_sanpham, n_danhmuc
										// WHERE n_danhmuc.parent_id ='".$id."'  and n_sanpham.danhmuc_id=n_danhmuc.id");
		  // return $query->result();
	 // }
}
?>