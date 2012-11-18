<?php
class Danhmuc extends NIW_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->module=strtolower(get_class());
		$this->load->model('Mdanhmuc');
	}
	
	function _remap($alias)
	{
		$category=$this->Mdanhmuc->getRowByColumn('tn_categories','category_alias',$alias);
		echo $alias; die();
		$this->detailCategory($category['category_id']);
	}
	
	function detailCategory($categoryId='0')
	{
		$list=$this->Mdanhmuc->getListByColumn('tn_products','category_id',$categoryId);
		$this->data['listProducts']=$list;
		$this->data['page']='vdetail';
		$this->data['module']=$this->module;
		
		$this->load->view('front/container',$this->data);
	}
}