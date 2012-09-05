<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->load->model('Mhotro');
			$this->module=strtolower(get_class());
		}
		
		function index()
		{
			$data['list']=$this->Mhotro->getListFull('n_t_hotro');
			$data['module']=$this->module;
			$data['title']='Hỗ trợ khách hàng';
			$data['bcCurrent']='Hỗ trợ khách hàng';
			$data['page']='admin-list-hotro';
			$this->load->view('admin/container',$data);
		}
		
		function deleteById($id=0)
		{
			if ($this->Mhotro->deleteRowByColumn('n_t_hotro','id',$id))			
				$this->session->set_userdata('backend_hotro_result','Dữ liệu được xóa thành công');			
			else 
				$this->session->set_userdata('backend_hotro_result','Dữ liệu chưa được xóa');
			$this->index();
		}
	}
?>