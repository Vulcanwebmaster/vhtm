<?php
class Mcategories extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('date');
	}
	function getDataWhyUs()
	{
		return $this->db->get('lee_categories_whyus')->result();
	}
	function getWhyUs($number, $offset){
	            $query =  $this->db->get('lee_categories_whyus',$number,$offset);
	            return $query->result();
	}
	function getWhyUsRow()
	{
	           return $this->db->get('lee_categories_whyus')->num_rows();
	}
	function insertWhyUs()
	{
		$data=(array(
				'title'=>$this->input->post('title'),
				'detail'=>$this->input->post('content')
		));
		if($this->db->insert('lee_categories_whyus',$data))
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
	function delWhyUs()
	{
		$id=$this->uri->segment(4);
		$this->db->where('id',$id);
		if($this->db->delete('lee_categories_whyus',$data))
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
	function getEditWhyUs()
	{
		$id=$this->uri->segment(4);
		$this->db->where('id',$id);
		return $this->db->get('lee_categories_whyus')->result();
	}
	function editWhyUs()
	{
		$id=$this->uri->segment(4);
		$this->db->where('id',$id);
		$data=(array(
				'title'=>$this->input->post('title'),
				'detail'=>$this->input->post('content')
		));
		if($this->db->update('lee_categories_whyus',$data))
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
	function getDataHelp()
	{
	           return $this->db->get('lee_categories_help')->result();
	}
	function getHelpRow()
	{
	           return $this->db->get('lee_categories_help')->num_rows();
	}
	function getHelp($number, $offset){
	            $query =  $this->db->get('lee_categories_help',$number,$offset);
	            return $query->result();
	}
	function postHelp()
	{
		$data=(array(
				'title'=>$this->input->post('title'),
				'content'=>$this->input->post('content'),
				'date'=> mdate('%Y-%m-%d %H:%i:%s',time())
		));
		if($this->db->insert('lee_categories_help',$data))
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
	function delHelp()
	{
		$id=$this->uri->segment(4);
		$this->db->where('id',$id);
		if($this->db->delete('lee_categories_help'))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	function getEditHelp()
	{
		$id=$this->uri->segment(4);
		$this->db->where('id',$id);
		return $this->db->get('lee_categories_help')->result();
	}
	function editHelp()
	{
	$id=$this->uri->segment(4);
		$this->db->where('id',$id);
		$data=(array(
				'title'=>$this->input->post('title'),
				'content'=>$this->input->post('content'),
				'date'=> mdate('%Y-%m-%d %H:%i:%s',time())
		));
		if($this->db->update('lee_categories_help',$data))
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
	function getImageRow()
	{
		return $this->db->get('lee_categories_outline')->num_rows();
	}
	function getDataImage($number, $offset)
	{
	            $query =  $this->db->get('lee_categories_outline',$number,$offset);
	            return $query->result();
	}
	function getImage()
	{
		return $this->db->get('lee_categories_outline')->result();
	}
	function postImage()
	{

		$img = $this->input->post('content');
		$img = str_replace("../../","../../../", $img);
		$data=(array(
			'image'=>$img
		));
		if($this->db->insert('lee_categories_outline',$data))
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
	function getEditImage()
	{
		$id=$this->uri->segment(4);
		$this->db->where('id',$id);
		return $this->db->get('lee_categories_outline')->result();
	}
	function editImage()
	{
		$id=$this->uri->segment(4);
		$data=(array(
			'image'=>$this->input->post('content')
		));
		$this->db->where('id',$id);
		if($this->db->update('lee_categories_outline',$data))
		{
			return true;
		}
		else 
		{
			return false;
		}
		
	}
	function delImage()
	{
		$id=$this->uri->segment(4);
		$this->db->where('id',$id);
		if($this->db->delete('lee_categories_outline'))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
		function fixImageLink ($ele)
    	{
    		//$temp = str_replace("../../../../", base_url(), $temp);
			$image = $this->input->post($ele,TRUE);
			$tmp = strstr(strstr($image, "src=\"../../../"),"../../../");
			$pos = strpos($tmp, "\"");
			$link = substr($tmp, 0, $pos);
			$link = str_replace("../../../", "", $link);
			return $link;
    	}
    	function fixImageLink_ToView ($image)
    	{
    		//$temp = str_replace("../../../../", base_url(), $temp);
			$tmp = strstr(strstr($image, "src=\"../../../"),"../../../");
			$pos = strpos($tmp, "\"");
			$link = substr($tmp, 0, $pos);
			$link = str_replace("../../../", "", $link);
			return $link;
    	}
	
}
?>