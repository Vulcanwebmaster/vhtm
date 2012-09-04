<?php
	class Msukien extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function getList($index)
		{
			$kq=$this->db->get('unix_sukien',5,$index);
			$list=array();
			foreach($kq->result() as $item)
			{
				$list[]=$item;
			}
			$kq->free_result();
			return $list;
		}
		
		
	
	    function addSuKien()
	    {
	    	$data=array(
	    				'tieude'	=>	$this->input->post('tieude'),
						'mota'		=>	$this->input->post('mota'),
						'thoigian'	=>	$this->input->post('thoigian'),
						'diadiem'	=>	$this->input->post('diadiem')
						);
	    	$this->db->insert('unix_sukien', $data);
	    }
	    
	    function updateSuKien($id)
	    {
	   		$data=array(
	   					'tieude'	=>	$this->input->post('tieude'),
						'mota'		=>	$this->input->post('mota'),
						'thoigian'	=>	$this->input->post('thoigian'),
						'diadiem'	=>	$this->input->post('diadiem')
						);
			$this->db->update('unix_sukien',$data,array('id'=>$id));
	    }
	    
		function deleteSuKien($id)
	    {
	        $this->db->delete('unix_sukien',array('id'=>$id));
	    }
	    
	    
		function getInfo($id)
	    {
	        $data = array();                     
	        $options = array('id' =>$id);
	        $Q = $this->db->get_where('unix_sukien',$options,1);
	        if ($Q->num_rows() > 0)
	        {
	            $data = $Q->row_array();
	        }
	        $Q->free_result();
	        return $data;
	    }
		
		function getSuKien()
		{
			$query=$this->db->get('unix_sukien');
			if($query->num_rows()>0)
			{
				$row=$query->result();
				return $row;
			}
			else return false;
		}


	}
?>