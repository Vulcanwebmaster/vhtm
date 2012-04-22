<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class MCurrency extends CI_Model
{



	function __construct()
    {
        parent::__construct();
	}

    function getBuyCurrency() 
    {
        $data = array();
        $this->db->where('is_show_src',1);
        $this->db->where('status', 1);
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
    
	function getSellCurrency() 
    {
    	$data = array();
        $this->db->where('is_show_dst',1);
        $this->db->where('status', 1);
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
    
    /**
     * Get the matrix data of currency rate
     */
    function getRateData() 
    {
    	$data = array();
    	//$this->db->order_by('table_id','asc');
        $Q = $this->db->query('SELECT currencySource.code as code_src, currencyDest.code as code_dst, is_rate.rate_dst as rate FROM is_rate 
								LEFT JOIN is_currency as currencySource on is_rate.c_id_src = currencySource.c_id 
								LEFT JOIN is_currency as currencyDest  on is_rate.c_id_dst = currencyDest.c_id');
        if ($Q->num_rows() > 0)
        {
            foreach ($Q->result_array() as $row)
            {
                $data[$row['code_src']][$row['code_dst']] = $row['rate'];
            }
        }
        $Q->free_result();
        return $data;
    }
    
	function getAllCurency()
    {
        // getting all the currency
        $data = array();
        $Q = $this->db->query('SELECT * FROM is_currency');
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