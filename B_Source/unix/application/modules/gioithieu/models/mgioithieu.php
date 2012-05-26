<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class MGioithieu extends CI_Model
{

	function __construct()
    {
        parent::__construct();
	}

    
    function getGioiThieu()
    {
         // getting all the products of the same categroy.
        $data = array();
        $this->db->order_by('gioithieu_id','asc');
        $Q = $this->db->get('unix_gioithieu');
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

    function addGioiThieu($data)
    {
    	$this->db->insert('unix_gioithieu', $data);
    }
    
    function updateGioiThieu($data)
    {
   		if (isset($data['gioithieu_id']))
    	{
		   	$this->db->where('gioithieu_id',$data['gioithieu_id']);
    		$this->db->update('unix_gioithieu', $data);
    	}
		else
		{
    		$data_new = array( 
    		'noidung' => $data['noidung']
    		);
    		$this->db->where('gioithieu_id',$data['gioithieu_id']);
			$this->db->update('unix_gioithieu', $data_new);
		}
    }
    
	function deleteitem($table, $id)
    {
        if($table =='unix_gioithieu')
        {
            $idname = 'gioithieu_id';
        }    
        else 
        {
            $idname = 'id';
        }
	 $this->db->where($idname, $id)->delete($table);
    }
    
    
	function getInfo($id)
    {
        $data = array();                     
        $options = array('gioithieu_id' =>$id);
        $Q = $this->db->get_where('unix_gioithieu',$options,1);
        if ($Q->num_rows() > 0)
        {
            $data = $Q->row_array();
        }
        $Q->free_result();
        return $data;
    }
}
?>