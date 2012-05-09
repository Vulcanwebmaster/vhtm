<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class MSearch extends CI_Model
{

	function __construct()
    {
        parent::__construct();
	}

	function getSearch($num,$offset,$masanpham,$makho)
    {   	
    	$data = array();
    	
    	//tim kiem theo ma san pham
    	if($masanpham!=''&&$makho!='')
    	{   	   	
    	//$this->db->from('shop_sanphamkho');
    	$this->db->where('kho_code',$makho);
    	$this->db->where('code',$masanpham);
    	$this->db->join('omc_products as p','p.id=shop_sanphamkho.id','left'); 
    	$this->db->join('shop_kho as kho','kho.kho_id=shop_sanphamkho.kho_id','left');            
    	$this->db->order_by('code','asc');
        $Q = $this->db->get('shop_sanphamkho',$num,$offset);
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
    	
    	//hien thi theo ma san pham
    	elseif($makho==''&&$masanpham!='')
    	{   	
    	//$this->db->from('shop_sanphamkho');
    	$this->db->where('code',$masanpham);
    	$this->db->join('omc_products as p','p.id=shop_sanphamkho.id','left'); 
    	$this->db->join('shop_kho as kho','kho.kho_id=shop_sanphamkho.kho_id','left');            
    	$this->db->order_by('name','asc');
        $Q = $this->db->get('shop_sanphamkho',$num,$offset);
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
    	
    	//hien thi theo ma kho
    	elseif($makho!=''&&$masanpham=='')
    	{   	
    	//$this->db->from('shop_sanphamkho');
    	$this->db->where('kho_code',$makho);
    	$this->db->join('omc_products as p','p.id=shop_sanphamkho.id','left'); 
    	$this->db->join('shop_kho as kho','kho.kho_id=shop_sanphamkho.kho_id','left');            
    	$this->db->order_by('name','asc');
        $Q = $this->db->get('shop_sanphamkho',$num,$offset);
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
    	elseif($makho==''&&$masanpham=='')
    	{   	
    	//$this->db->from('shop_sanphamkho');
    	$this->db->join('omc_products as p','p.id=shop_sanphamkho.id','left'); 
    	$this->db->join('shop_kho as kho','kho.kho_id=shop_sanphamkho.kho_id','left');            
    	$this->db->order_by('name','asc');
        $Q = $this->db->get('shop_sanphamkho',$num,$offset);
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
    
	function getNumSearch($masanpham,$makho){
	$data = array();
    	
    	//tim kiem theo ma san pham
    	if($masanpham!=''&&$makho!='')
    	{   	   	
    	$this->db->from('shop_sanphamkho');
    	$this->db->where('kho_code',$makho);
    	$this->db->where('code',$masanpham);
    	$this->db->join('omc_products as p','p.id=shop_sanphamkho.id','left'); 
    	$this->db->join('shop_kho as kho','kho.kho_id=shop_sanphamkho.kho_id','left');            
    	$this->db->order_by('code','asc');
        $Q = $this->db->get();
        
        return $Q->num_rows();
    	}
    	
    	//hien thi theo ma san pham
    	elseif($makho==''&&$masanpham!='')
    	{   	
    	$this->db->from('shop_sanphamkho');
    	$this->db->where('code',$masanpham);
    	$this->db->join('omc_products as p','p.id=shop_sanphamkho.id','left'); 
    	$this->db->join('shop_kho as kho','kho.kho_id=shop_sanphamkho.kho_id','left');            
    	$this->db->order_by('name','asc');
        $Q = $this->db->get();
        
        return $Q->num_rows();
    	}
    	
    	//hien thi theo ma kho
    	elseif($makho!=''&&$masanpham=='')
    	{   	
    	$this->db->from('shop_sanphamkho');
    	$this->db->where('kho_code',$makho);
    	$this->db->join('omc_products as p','p.id=shop_sanphamkho.id','left'); 
    	$this->db->join('shop_kho as kho','kho.kho_id=shop_sanphamkho.kho_id','left');            
    	$this->db->order_by('name','asc');
        $Q = $this->db->get();
        
        return $Q->num_rows();
    	}

    	//hien thi tat ca
    	elseif($makho==''&&$masanpham=='')
    	{   	
    	//$this->db->from('shop_sanphamkho');
    	$this->db->join('omc_products as p','p.id=shop_sanphamkho.id','left'); 
    	$this->db->join('shop_kho as kho','kho.kho_id=shop_sanphamkho.kho_id','left');            
    	$this->db->order_by('name','asc');
        $Q = $this->db->get('shop_sanphamkho');
       
        return $Q->num_rows();
    	}

    }
    
 

 
}//end class
?>