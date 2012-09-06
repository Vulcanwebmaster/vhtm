<?php
	class Danhmuc extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('MDanhmuc');
			$this->load->library('pagination');
		}
		
		function page($id)
		{		
			$data['tieude']="Nội dung chuyên mục";	
			$data['left']="Nội dung";
			$data['chuyenmuc']=$this->MDanhmuc->getChuyenMuc($id);	
			$data['page']=$this->config->item('backendpro_template_shop').'vthongtinchuyenmuc';
			$data['module']=$this->module;
			$this->load->view($this->_container,$data);
		}
		

	}
?>