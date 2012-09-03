<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->load->model('Mdangky');
			$this->module=strtolower(get_class());
		}
		
		function index()
		{
			$data['list']=$this->Mdangky->getListFull('n_tn_dangky');
			$data['module']=$this->module;
			$data['title']='Hỗ trợ khách hàng';
			$data['bcCurrent']='Hỗ trợ khách hàng';
			$data['page']='admin-list-dangky';
			$this->load->view('admin/container',$data);
		}
		
		function deleteById($id=0)
		{
			if ($this->Mdangky->deleteRowByColumn('n_tn_dangky','id',$id))			
				$this->session->set_userdata('backend_dangky_result','Dữ liệu được xóa thành công');			
			else 
				$this->session->set_userdata('backend_dangky_result','Dữ liệu chưa được xóa');
			$this->index();
		}
	}
?>