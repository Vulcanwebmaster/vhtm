<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
/**
 * This is for ci_bep
 *
 */
class MBan extends CI_Model
{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }


    function getProductByCode($code)
    {
        $data = array();
		$this->db->select('id');
        $this->db->where('code',$code);
        $Q = $this->db->get('omc_products');
        if ($Q->num_rows() > 0)
        {
        	foreach ($Q->result_array() as $row)
		    {
		         	if (isset($row['id']))
		         	{
		           	   $data = $row;
		           	   break;
		         	}
		    }
        }
        $Q->free_result();    
        return $data;    
    }
    
	function getTotalProductByIdAndKhoId($id,$kho_id)
    {
        $data = array();
		$this->db->select('total');
        $this->db->where('id',$id);
        $this->db->where('kho_id',$kho_id);
        $Q = $this->db->get('shop_sanphamkho');
        if ($Q->num_rows() > 0)
        {
        	foreach ($Q->result_array() as $row)
		    {
		         	if (isset($row['total']))
		         	{
		           	   $data = $row;
		           	   break;
		         	}
		    }
        }
        $Q->free_result();    
        return $data;    
    }
    
	function updateTotalProductByIdAndKhoId($id,$kho_id,$data)
    {
        $this->db->where('id',$id);
        $this->db->where('kho_id',$kho_id);
        $this->db->update('shop_sanphamkho',$data);
    }
}
?>