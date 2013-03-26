<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mphanhoi');
			$this->load->library('session');
		}
		
		function index()
		{
			$data['title']='Liên hệ';
			$data['bcCurrent']='Liên hệ';
			$data['list']=$this->Mphanhoi->getListFull('phanhoi');
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function detail($id=0)
		{
			$data['info']=$this->Mphanhoi->getRowByColumn('phanhoi','id',$id);
			$data['title']='Thông tin Liên hệ';
			$data['bcCurrent']='Liên hệ';
			$data['module']=$this->module;
			$data['page']='admin_vdetail';
			$this->load->view('admin/container',$data);
		}
		
		function delete($id=0)
		{
			if ($this->Mphanhoi->deleteRowByColumn('phanhoi','id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
?>