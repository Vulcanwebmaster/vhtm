<?php
class Mboutus extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('date');
		
	
	}
	function getAboutRow()
	{
		return $this->db->get('lee_aboutus')->num_rows();
	}
	function getdDataAbout($number, $offset)
	{
	            $query =  $this->db->get('lee_aboutus',$number,$offset);
	            return $query->result();
	}
	function getDataAboutById()
	{
		$id=$this->uri->segment(4);
		
	    $this->db->where('id',$id);
	    return $this->db->get('lee_aboutus')->result();
	}
	function editAbout()
	{
		$id=$this->uri->segment(4);
	    	$data=(array(
	    				'title'=>$this->input->post('title'),
		    			'content'=>$this->input->post('content'),
		    			'date'=>$this->input->post('nowdate')
	    	
	    	));
	    
	      		$this->db->where('id',$id);
	    		if($this->db->update('lee_aboutus',$data))
	    		{
	    			return true;
	    		}
	    	else{ 
	    			return false;
	    		}
	    	
	}
	function saveAbout()
	{
		
	    	$data=(array(
	    				'title'=>$this->input->post('title'),
		    			'content'=>(string)$this->input->post('content'),
	    				'date'=>$this->input->post('nowdate')
	    	
	    	));
	    	
	    	
	    		
	    		if($this->db->insert('lee_aboutus',$data))
	    		{
	    			return true;
	    		}
	    	else{ 
	    			return false;
	    		}
	    	
	}
	function delAbout()
	{
		$id=$this->uri->segment(4);
		$this->db->where('id',$id);
		if($this->db->delete('lee_aboutus'))
		{
			
	    			return true;
	    }
	   	else{ 
	    			return false;
	    		
		}
	}
	function getDataAbout()
	{
		return $this->db->get('lee_aboutus')->result();
	}
}
?>