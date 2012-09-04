<?php
	class Mtintuc extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function loadListNews($index)
		{
			$this->db->order_by('tintuc_id','desc');
			$ds=$this->db->get('unix_tintuc',6,$index);
			$list=array();
			foreach($ds->result() as $news)
			{
				$list[]=$news;
			}
			$ds->free_result();
			return $list;
		}
		
		function loadListFull()
		{
			$this->db->order_by('tintuc_id','desc');
			$ds=$this->db->get('unix_tintuc');
			$list=array();
			foreach($ds->result() as $news)
			{
				$list[]=$news;
			}
			$ds->free_result();
			return $list;
		}
		
		function count()
		{
			$ds=$this->db->get('unix_tintuc');
			$amount=$ds->num_rows();
			$ds->free_result();
			return $amount;
		}
		
		function getDetailByAlias($alias)
		{
			$this->db->where('alias',$alias);
			$ds=$this->db->get('unix_tintuc');
			if ($ds->num_rows()>0)
			{
				$item=$ds->row(0);
				$ds->free_result();
				return $item;
			}
			else return false;
		}
		
		function getNewestNews($id)
		{
			$this->db->order_by('ngaythang','asc');
			$this->db->where('tintuc_id !=',$id);
			$ds=$this->db->get('unix_tintuc',4,0);
			
			$list=array();
			foreach($ds->result() as $news)
			{
				$list[]=$news;
			}
			$ds->free_result();
			return $list;
		}
		
		function insertNews($input)
		{
			$this->db->insert('unix_tintuc',$input);
		}
		
		function deleteNews($id)
		{
			$this->db->delete('unix_tintuc',array('tintuc_id'=>$id));
		}
		
		function getDetailByID($id)
		{
			$this->db->where('tintuc_id',$id);
			$ds=$this->db->get('unix_tintuc');
			if ($ds->num_rows()>0)
			{
				$item=$ds->row(0);
				$ds->free_result();
				return $item;
			}
			else return false;
		}
		
		function updateNews($id,$input)
		{
			$this->db->update('unix_tintuc',$input,array('tintuc_id'=>$id));
		}
	}
?>