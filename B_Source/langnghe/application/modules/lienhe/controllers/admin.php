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
			$data['list']=$this->Mlienhe->getListFull('lienhe');
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function detail($id=0)
		{
			$data['info']=$this->Mlienhe->getRowByColumn('lienhe','id',$id);
			$data['title']='Sửa Liên hệ';
			$data['bcCurrent']='Liên hệ';
			$data['module']=$this->module;
			$data['page']='admin_vdetail';
			$this->load->view('admin/container',$data);
		}
		
		function delete($id=0)
		{
			if ($this->Mlienhe->deleteRowByColumn('lienhe','id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
?>