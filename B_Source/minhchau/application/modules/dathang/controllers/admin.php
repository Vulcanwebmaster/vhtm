<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mdathang');
			$this->load->library('form_validation');
			$this->load->library('session');
		}
		
		function index()
		{
			$data['title']='Đặt hàng';
			$data['bcCurrent']='Đặt hàng';
			$data['list']=$this->Mdathang->getListFull('mc_order');
			$data['module']=$this->module;
			$data['page']='admin_list_order';
			$this->load->view('admin/container',$data);
		}
		
	function detail($id=0)
		{
			$data['info']=$this->Mdathang->getRowByColumn('mc_order','id',$id);
			$data['title']='Xem đặt hàng';
			$data['bcCurrent']='Đặt hàng';
			$data['module']=$this->module;
			$data['page']='admin_edit_order';
			$this->load->view('admin/container',$data);
		}
		
		function delete($id=0)
		{
			if ($this->Mdathang->deleteRowByColumn('mc_order','id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
?>