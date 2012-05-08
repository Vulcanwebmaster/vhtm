<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class MSearch extends CI_Model
{

	function __construct()
    {
        parent::__construct();
	}

	function getSearch($search,$type_search)
    {   	
    	$data = array();
    	
    	//tim kiem theo ma san pham
    	if($type_search==1)
    	{   	
    	$this->db->from('omc_products');
    	$this->db->where('code',$search);
    	$this->db->join('shop_sanphamkho as sp','sp.id=omc_products.id','left');
    	$this->db->join('shop_kho as kho','kho.kho_id=sp.kho_id','left');        
    	$this->db->order_by('kho_code','asc');
        $Q = $this->db->get();
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
    	
    	//tim kiem theo san pham
   	 	elseif($type_search==2)
    	{   	
    	$this->db->from('shop_sanphamkho');
    	$this->db->where('kho_code',$search);
    	$this->db->join('omc_products as p','p.id=shop_sanphamkho.id','left'); 
    	$this->db->join('shop_kho as kho','kho.kho_id=shop_sanphamkho.kho_id','left');            
    	$this->db->order_by('code','asc');
        $Q = $this->db->get();
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

    	//hien thi tat ca
    	elseif($type_search==0)
    	{   	
    	$this->db->from('shop_sanphamkho');
    	$this->db->join('omc_products as p','p.id=shop_sanphamkho.id','left'); 
    	$this->db->join('shop_kho as kho','kho.kho_id=shop_sanphamkho.kho_id','left');            
    	$this->db->order_by('name','asc');
        $Q = $this->db->get();
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
    
 

 
}//end class
?>