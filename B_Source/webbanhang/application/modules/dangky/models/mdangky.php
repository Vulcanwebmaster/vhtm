<?php class Mdangky extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function dangky($input)
		{
			$this->db->insert('shopping_register',$input);
		}
		
		function getListDangKy($user_id)
		{
			if ($user_id!='1')
				$this->db->where('admin_id',$user_id);
			//$this->db->or_where('admin_id','0');
			$ds=$this->db->get('shopping_register');
			$list=array();
			foreach($ds->result() as $item)
			{
				$list[]=$item;
			}
			$ds->free_result();
			return $list;
		}
		
		function EnableDemobyId($demo_id)
		{
			$update=array('status'=>'enable');
			$this->db->update('shopping_demo',$update,array('demo_id'=>$demo_id));
		}
		
		function delete($id)
		{
			$this->db->where('dangky_id',$id);
			$ds=$this->db->get('shopping_register');
			$item;
			if ($ds->num_rows()>0)
			{
				$item=$ds->row(0);
				$ds->free_result();
			}
			$this->db->delete('shopping_register',array('dangky_id'=>$id));
			$this->EnableDemobyId($item->demo_id);
		}
		
		function GetDangKyById($id)
		{
			$this->db->where('dangky_id',$id);
			$ds=$this->db->get('shopping_register');
			if ($ds->num_rows()>0)
			{
				$item=$ds->row(0);
				$ds->free_result();
				return $item;				
			}
			else return false;
		}
		
		function getEnableDemo()
		{
			$this->db->where('status','enable');
			$ds=$this->db->get('shopping_demo');
			if ($ds->num_rows()>0)
			{
				$item=$ds->row(0);
				$ds->free_result();
				return $item;
			}
			else
			{
				return false;
			}
		}
		
		function resetDemoTable()
		{
			$this->db->update('shopping_demo',array('status'=>'enable'));
		}
		
		function setDisableDemoById($demo_id)
		{
			$new=array('status'=>'disable');
			$this->db->update('shopping_demo',$new,array('demo_id'=>$demo_id));
		}
		
		function GetDemoById($demo_id)
		{
			$this->db->where('demo_id',$demo_id);
			$ds=$this->db->get('shopping_demo');
			if ($ds->num_rows()>0)
			{
				$item=$ds->row(0);
				$ds->free_result();
				return $item;
			}
			else return false;
		}
		
		function GetSellerByName($name)
		{
			$this->db->where('username',$name);
			$ds=$this->db->get('be_users');
			if ($ds->num_rows()>0)
			{
				$item=$ds->row(0);
				$ds->free_result();
				return $item;
			}
			else return false;
		}
	}
?>