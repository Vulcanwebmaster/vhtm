<?php
	class Mwebsite extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function getListInfo()
		{
			$ds=$this->db->get('lee_website');
			$list=array();
			foreach ($ds->result() as $item)
			{
				$list=$item;
			}
			$ds->free_result();
			return $list;
		}
		
		function getInfoByAlias($alias)
		{
			$this->db->where('alias',$alias);
			$ds=$this->db->get('lee_website');
			if ($ds->num_rows()>0)
			{
				$item=$ds->row(0);
				$ds->free_result();
				return $item;
			}
			else return false;
		}
		
//Admin function
		//Category
		function getListCategories()
		{
			$query=$this->db->get('lee_website_categories');
			return $query->result();
		}
	    function getCategoryByID()
    	{
	    	$id=$this->uri->segment(4);
	    	$this->db->where('id',$id);
	    	$result=$this->db->get('lee_website_categories');
	    	return $result->result();
    	}
		function saveCategory()
		{
			$id = $this->uri->segment('4');
			$data=(
				array(
				'name'=>$this->input->post('ctg_name'),
				'date' => mdate('%Y-%m-%d %H:%i:%s',time())
				)
			);
			$this->db->where('id',$id);
			if($this->db->update('lee_website_categories',$data))
			{
				return true;
			}
			else {
				return false;
			}
		}
		//Article
    	function getLstArticleByCtg()
    	{
    		$id=$this->uri->segment(4);
    		$this->db->where('category',$id);
    		$query = $this->db->get('lee_website');
    		return $query->result();
    	}
    	function getArticleByID()
    	{
    		$id=$this->uri->segment(4);
    		$this->db->where('id',$id);
    		$query = $this->db->get('lee_website');
    		return $query->result();
    	}
    	function insertArticle()
    	{
   			$data=(
				array(
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content'),
				'category'=>$this->input->post('category'),
				'date' => mdate('%Y-%m-%d %H:%i:%s',time())
				)
			);
			if($this->db->insert('lee_website',$data))
			{
				return true;
			}
			else {
				return false;
			}
    		
    	}
    	function saveArticle()
    	{
    		$id = $this->uri->segment('4');
			$data=(
				array(
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content'),
				'category'=>$this->input->post('category'),
				'date' => mdate('%Y-%m-%d %H:%i:%s',time())
				)
			);
			$this->db->where('id',$id);
			if($this->db->update('lee_website',$data))
			{
				return true;
			}
			else {
				return false;
			}
    	}
    	function delArticle()
    	{
    		$id=$this->uri->segment(5);
			$this->db->where('id',$id);
			if($this->db->delete('lee_website'))
			{
	   			return true;
			}
	  		else 
	  		return false;
    	}
    	
	}
?>