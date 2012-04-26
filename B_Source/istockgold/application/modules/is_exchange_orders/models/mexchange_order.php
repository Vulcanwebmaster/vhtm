<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class MExchange_order extends CI_Model
{
	function __construct()
    {
        parent::__construct();
	}
	
	function getAllOrder()
	{
		$data = array();
        $Q = $this->db->query('SELECT order_id, order_code, c_src, c_dst, amount_src, amount_dst, account_dst, f.value AS status_src, t.value AS status_dst, date_src, date_dst, email
								FROM is_order
								LEFT JOIN is_order_status AS f ON f.id = is_order.status_src
								LEFT JOIN is_order_status AS t ON t.id = is_order.status_dst');
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
	
	function getOrder($id) 
    {
        $data = array();
        $this->db->where('order_id',$id);
        $Q = $this->db->get('is_order');
		if ($Q->num_rows() > 0){
	      	$data = $Q->row_array();
	    }
	    $Q->free_result();    
	    return $data;
    }
    
	function getOrderStatus() 
    {
        $data = array();
        $Q = $this->db->get('is_order_status');
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
    
    function getSourceCurrency()
    {
    	$data = array();
    	$this->db->where('is_show_src',1);
        $Q = $this->db->get('is_currency');
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
    
    function getDestinationCurrency()
    {
    	$data = array();
    	$this->db->where('is_show_dst',1);
        $Q = $this->db->get('is_currency');
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
}//end class
?>