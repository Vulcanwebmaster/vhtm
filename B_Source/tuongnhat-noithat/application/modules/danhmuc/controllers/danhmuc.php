<?php
	class Danhmuc extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mdanhmuc');
			$this->data['title'] = 'Nội thất Tường Nhật | Danh mục sản phẩm';
		}
		
		function _remap($alias)
		{
			$segments=explode('-', $alias);
			$realAlias;
			$categoryId=$segments[0];
			$this->detailCategory($categoryId);
		}
		
		/*
		 * Get detail of category
		 * $categoryId: id number of target category.
		 */
		function detailCategory($categoryId='0')
		{
			$this->data['module']=$this->module;
			$this->data['page']='front/vdetail';
			$this->data['listProducts']=$this->Mdanhmuc->getListByColumn('tn_products','category_id',$categoryId);
			
			$this->load->view('front/container',$this->data);
		}
	}
