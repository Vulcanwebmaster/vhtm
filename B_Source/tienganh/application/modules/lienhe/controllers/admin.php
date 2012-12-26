<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mlienhe');
			$this->load->library('session');
		}
		
		function index()
		{
			$data['title']='Liên hệ';
			$data['bcCurrent']='Liên hệ';
			$data['list']=$this->Mlienhe->getListFull('ta_contact_us');
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		
		function delete($id=0)
		{
			if ($this->Mlienhe->deleteRowByColumn('ta_contact_us','contact_id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
