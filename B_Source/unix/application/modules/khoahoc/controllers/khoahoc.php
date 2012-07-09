<?php
	class Khoahoc extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('Mkhoahoc');
			$this->load->library('pagination');
		}
		
		function index()
		{
			$data['page']=$this->config->item('backendpro_template_shop').'vkhoahoc';
			$data['module']=$this->module;
			$data['listdoituong']=$this->Mkhoahoc->getListDoiTuong();
			$data['flag_DanhMuc']=1;
			$this->load->view($this->_container,$data);
			//$this->pages();
		}
		
		function pages($id_doituong=0)
		{
			$data['list']=$this->Mkhoahoc->getlist($id_doituong);
			$this->load->view('shop/vlist',$data);
		}
		
		function detail($id=0)
		{
			$data['page']=$this->config->item('backendpro_template_shop').'vdetail';
			$data['module']=$this->module;
			if ($this->Mkhoahoc->getInf($id))
				$data['info']=$this->Mkhoahoc->getInf($id);
			$this->load->view($this->_container,$data);
		}
	}
?>