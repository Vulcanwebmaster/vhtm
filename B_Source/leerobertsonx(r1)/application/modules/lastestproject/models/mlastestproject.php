<?php class Mlastestproject extends CI_Model
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
	function getLogoPaging($number, $offset)
		{
	            $query =  $this->db->get('lee_homepage_logo',$number,$offset);
	            return $query->result();
	    }
	    function getRowLogo()
	    {
	    	return $this->db->get('lee_homepage_logo')->num_rows();
	    }
	function getLogo()
	 {
	 	return $this->db->get('lee_homepage_logo')->result();
	 }
	 function getLogoById()
	 {
	 	$id=$this->uri->segment(4);
	 	$this->db->where('id',$id);
	 	return $this->db->get('lee_homepage_logo')->result();
	 } 
	 function saveLogo()
	 {
	 	$linkimage = str_replace("../../", "../../../", $this->input->post('imageslide'));
	 $data=(array(
	 		'title'=>$this->input->post('title'),
	 		'logo'=>$linkimage,
	 		'link'=>$this->input->post('link')
	 	));
	 	if($this->db->insert('lee_homepage_logo',$data))
	 	{
	 		return true;
	 	}
	 	else
	 	{
	 		return false;
	 	}
	 }
	function editLogo()
	 {
	 	$id=$this->uri->segment(4);
	 $data=(array(
	 		'title'=>$this->input->post('title'),
	 		'logo'=>$this->input->post('imageslide'),
	 		'link'=>$this->input->post('link')
	 	));
	 	$this->db->where('id',$id);
	 	if($this->db->update('lee_homepage_logo',$data))
	 	{
	 		return true;
	 	}
	 	else
	 	{
	 		return false;
	 	}
	 }
	 function delLogo()
	 {
	 	$id=$this->uri->segment(4);
	 	$this->db->where('id',$id);
	 	if($this->db->delete('lee_homepage_logo'))
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