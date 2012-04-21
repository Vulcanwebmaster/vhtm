<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MOrders extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
 
	 
	function addOrder($data,$return_id=FALSE)
    {
        $module_table = 'is_order';
        
        $this->db->insert($module_table, $data);
        
        if($return_id==TRUE)
        {
            $retuened_id=$this->db->insert_id();
            return $retuened_id;
        }
    }
    
	function getOrder($id)
    {
        $data = array();
		$data = array();
		
    	//$this->db->order_by('table_id','asc');
        $Q = $this->db->query('SELECT statusSrc.value as statusSrcStr, statusDst.value as statusDstStr, is_order.* FROM is_order 
								LEFT JOIN is_order_status as statusSrc on is_order.status_src = statusSrc.id 
								LEFT JOIN is_order_status as statusDst  on is_order.status_dst = statusDst.id
								WHERE is_order.order_id = '.id_clean($id));
        if ($Q->num_rows() > 0)
        {
            foreach ($Q->result_array() as $row)
            {
                $data[] = $row;
            }
        }
        $Q->free_result();
        
        if(count($data) > 0)
        	return $data[0];
        else 
        	return null;	
    }
}//end class
?>