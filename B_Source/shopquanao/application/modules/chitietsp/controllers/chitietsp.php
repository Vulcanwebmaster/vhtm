<?php
	class Chitietsp extends Shop_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
		}
		
		function index()
		{
			
		}
		
		function get_inf($id)
		{
			$data['inf']=$this->MProducts->getProductById($id);
			$data['other']=$this->MProducts->other_products($id);
			$data['kholist'] = $this->MKho->getKhoOfProduct($id);
			
			$data['title']='Chi tiết sản phẩm';
			$data['page']=$this->config->item('backendpro_template_shop').'chitietsp';
			$data['module']=$this->module;
			$this->load->view($this->_container,$data);
		}
	}
?>