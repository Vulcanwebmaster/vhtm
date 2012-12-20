<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Memail');
			$this->load->library('session');
		}
		
		function index()
		{
			$data['title']='Email';
			$data['bcCurrent']='Email';
			$data['list']=$this->Memail->getListFull('email');
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function detail($id=0)
		{
			$data['info']=$this->Memail->getRowByColumn('email','id',$id);
			$data['title']='Sửa Email';
			$data['bcCurrent']='Email';
			$data['module']=$this->module;
			$data['page']='admin_vdetail';
			$this->load->view('admin/container',$data);
		}
		
		function delete($id=0)
		{
			if ($this->Memail->deleteRowByColumn('email','id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
