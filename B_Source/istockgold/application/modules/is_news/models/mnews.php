<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
/**
 * This is for ci_bep
 *
 */
class MNews extends CI_Model
{

    function __construct()
	{
		parent::__construct();
	}
	
	function getNewsByID($id = 0)
	{
		$data = array();
   		$this->db->where('id',id_clean($id));
		$Q = $this->db->get('is_news');
		if ($Q->num_rows() > 0){
	      	$data = $Q->row_array();
	    }
	    $Q->free_result();    
	    return $data;
	}
	
	function getNewsByTitle($title) {
		$data = array();
		$this->db->where('title',$title);
		$Q = $this->db->get('is_news');
		if ($Q->num_rows() > 0){
	      	$data = $Q->row_array();
	    }
	    $Q->free_result();    
	    var_dump($data);
	    die();
	    return $data;
	}
	
	function updateNewsByID($id = 0, $data)
	{
   		$this->db->where('id',id_clean($id));
   		$this->db->set('date', 'NOW()', FALSE);
		$this->db->update("is_news",$data);
	}
	
	function addNews($data)
	{
   		$this->db->set('date', 'NOW()', FALSE);
		$this->db->insert("is_news",$data);
	}
	
	//Author: tienlx
	function getTopNews(){
		$this->db->order_by('date',"DESC");
		$query = $this->db->get('is_news',5);
		$listnews = $query->result();
		return $listnews;
	}
	//End author: tienlx
	
	function getReviews($num, $offset)
    {
    	$data = array();
       	$this->db->select('id, name, location, title, date, comment, rating');
    	$this->db->order_by('date','desc');

    	$Q=	$this->db->get("is_reviews",$num,$offset);

        if ($Q->num_rows() > 0)
        {
            foreach ($Q->result_array() as $row)
            {
                $data[] = $row;
            }
        }
        $Q->free_result();
        return $data;
    }
	
}
?>