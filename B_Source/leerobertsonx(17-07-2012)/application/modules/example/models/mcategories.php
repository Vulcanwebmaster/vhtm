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
	function getDataHelp()
	{
	           return $this->db->get('lee_categories_help')->result();
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
	function getEditHelp()
	{
		$id=$this->uri->segment(4);
		$this->db->where('id',$id);
		return $this->db->get('lee_categories_help')->result();
	}
	function getImage()
	{
		return $this->db->get('lee_categories_outline')->result();
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