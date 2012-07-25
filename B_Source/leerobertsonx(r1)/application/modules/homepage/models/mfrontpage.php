<?php
class Mfrontpage extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('date');
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
    //slide
	function getSlidePaging($number, $offset)
		{
	            $query =  $this->db->get('lee_homepage_slide',$number,$offset);
	            return $query->result();
	    }
	    function getRowSlide()
	    {
	    	return $this->db->get('lee_homepage_slide')->num_rows();
	    }
	function getSlide()
	 {
	    	return $this->db->get('lee_homepage_slide')->result();
	 }
	 
	 function saveSlide()
	 {
	 	$linkimage = str_replace("../../", "../../../", $this->input->post('imageslide'));
	 	$data=(array(
	 		'title'=>$this->input->post('title'),
	 		'descriptiontitle'=>$this->input->post('description'),
	 		'order'=>$this->input->post('order'),
	 		'detailtitle'=>$this->input->post('detailtitle'),
	 		'detaildescription'=>$this->input->post('detaildescription'),
	 		'linkimage'=>$linkimage,
	 		'link'=>$this->input->post('link')
	 	));
	 	if($this->db->insert('lee_homepage_slide',$data))
	 	{
	 		return true;
	 	}
	 	else
	 	{
	 		return false;
	 	}
	 }
	 function getSlideById()
	 {
	 	$id=$this->uri->segment(4);
	 	$this->db->where('id',$id);
	 	return $this->db->get('lee_homepage_slide')->result();
	 }
 	function editSlide()
	 {
	 	$id=$this->uri->segment(4);
	 	$data=(array(
	 		'title'=>$this->input->post('title'),
	 		'descriptiontitle'=>$this->input->post('description'),
	 		'order'=>$this->input->post('order'),
	 		'detailtitle'=>$this->input->post('detailtitle'),
	 		'detaildescription'=>$this->input->post('detaildescription'),
	 		'linkimage'=>$this->input->post('imageslide'),
	 		'link'=>$this->input->post('link')
	 	));
	 	
	 	$this->db->where('id',$id);
	 	if($this->db->update('lee_homepage_slide',$data))
	 	{
	 		return true;
	 	}
	 	else
	 	{
	 		return false;
	 	}
	 }
	function delSlide()
	 {
	 	$id=$this->uri->segment(4);
	 	
	 	$this->db->where('id',$id);
	 	if($this->db->delete('lee_homepage_slide'))
	 	{
	 		return true;
	 	}
	 	else
	 	{
	 		return false;
	 	}
	 }
	 //Slogan
	 function getSlogan()
	 {
	 	return $this->db->get('lee_homepage_slogan')->result();
	 }
	function editSlogan()
	 {
	 	
	 	$data=(array(
	 		'slogan'=>$this->input->post('slogan')
	 	));
	 	if($this->db->update('lee_homepage_slogan',$data))
	 	{
	 		return true;
	 	}
	 	else
	 	{
	 		return false;
	 	}
	 }
	
}
?>