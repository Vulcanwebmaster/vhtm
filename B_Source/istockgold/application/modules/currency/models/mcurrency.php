<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class MCurrency extends CI_Model
{



	function __construct()
    {
        parent::__construct();
	}

    

    function getAllProducts()
    {
        // getting all the products of the same categroy.
        $data = array();
        //$this->db->order_by('table_id','asc');
        $Q = $this->db->query('SELECT P.*, C.Name AS CatName FROM omc_products AS P
        LEFT JOIN omc_category AS C ON C.id = P.category_id
        ORDER BY table_id ASC ');
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
    
    /*
    function getNameByCode($code) 
    {
    	$data = array();
    	$this->db->select('c_name');
        $this->db->where('code',$code);
        $Q = $this->db->get('currency');
        if ($Q->num_rows() > 0)
        {
            foreach ($Q->result_array() as $row)
            {
                $data[] = $row;
            }
        }
        $Q->free_result();
        
        if (count($data) > 0)
        	return $data[0]['c_name'];
        else 
        	return null;
    }
    */
    
    function getBuyCurrency() 
    {
        $data = array();
        $this->db->where('is_show_src',1);
        $this->db->where('status', 1);
        $Q = $this->db->get('currency');
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
        $Q = $this->db->get('currency');
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
        $Q = $this->db->query('SELECT currencySource.code as code_src, currencyDest.code as code_dst, rate.rate_dst as rate FROM rate 
								LEFT JOIN currency as currencySource on rate.c_id_src = currencySource.c_id 
								LEFT JOIN currency as currencyDest  on rate.c_id_dst = currencyDest.c_id');
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
}//end class
?>