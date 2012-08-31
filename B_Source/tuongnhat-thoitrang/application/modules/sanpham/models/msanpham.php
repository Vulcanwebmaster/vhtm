<?php
	class Msanpham extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function increaseView($id=0)
		{
			$current=$this->getRowByColumn('n_t_sanpham','id',$id);
			$crview=$current->xem;
			$crview++;
			if ($this->updateRowByColumn('n_t_sanpham','id',$id,array('xem'=>$crview)))
				return true;
			else return false;
		}
	}
?>