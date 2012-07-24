<?php
	class Mapp extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->helper('date');
			$this->load->helper('url');
			$this->load->library('string_library');

		}
		
		function getInfoByAlias($alias)
		{
			$this->db->where('alias',$alias);
			$ds=$this->db->get('lee_application');
			if ($ds->num_rows()>0)
			{
				$item=$ds->row(0);
				$ds->free_result();
				return $item;
			}
			else return false;
		}
		function getInfo()
		{
			$id=$this->uri->segment(3);
			$this->db->where('id',$id);
			$result=$this->db->get('lee_application');
			return $result->result();
		}
		function getAppRow()
		{
			return $this->db->get('lee_application')->num_rows();
		}
		function getdDataApp($number, $offset){
	            $query =  $this->db->get('lee_application',$number,$offset);
	            return $query->result();
	    }
	    function getDataAppById()
	    {
	    	$id=$this->uri->segment(4);
	    	$this->db->where('id',$id);
	    	return $this->db->get('lee_application')->result();
	    }
	    function savePostApplication()
	    {
	    	$title=$this->input->post('title');
	    	$alias=(string)$this->string_library->stringchange($title);
	    	$data=(array(
	    				'title'=>$title,
	    				'order'=>$this->input->post('order'),
	    				'alias'=>$alias,
	    				'shortcontent'=>$this->input->post('shortcontent'),
	    				'content'=>(string)$this->input->post('content'),
	    				'date'=>mdate('%Y-%m-%d %H:%i:%s',time())
	    	
	    	));
	    	
	    		
	    		if($this->db->insert('lee_application',$data))
	    		{
	    			return true;
	    		}
	    		else 
	    		{
	    			return false;
	    		}
	    	
	    }
	    function editApp()
	    {
	    	$id=$this->uri->segment(4);
	    	$title=$this->input->post('title');
	    	$alias=(string)$this->string_library->stringchange($title);
	    	$data=(array(
	    				'title'=>$title,
	    		    	'order'=>$this->input->post('order'),
	    				'alias'=>$alias,
	    				'shortcontent'=>$this->input->post('shortcontent'),
	    				'content'=>(string)$this->input->post('content'),
	    				'date'=>mdate('%Y-%m-%d %H:%i:%s',time())
	    	
	    	));
	    	
	    	
	    		$this->db->where('id',$id);
	    		if($this->db->update('lee_application',$data))
	    		{
	    			return true;
	    		}
	    	else{ 
	    			return false;
	    		}
	    	
	    	
	    }
	function delApp()
	{
		$id=$this->uri->segment(4);
		$this->db->where('id',$id);
		if($this->db->delete('lee_application'))
		{
			return true;
		}
		else 
		return false;
	}
	function loadApp()
	{
		$this->db->order_by("order", "asc");
		$this->db->limit(5);
		$query = $this->db->get('lee_application');
		return $query->result();
	}
	function detail()
	{
		$id=$this->uri->segment(3);
		$this->db->where('id',$id);
		$result=$this->db->get('lee_application');
		return $result->result();
	}
	
}
?>