<?php
class Sanpham extends NIW_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->module=strtolower(get_class());
	}
	
	function _remap($function)
	{
		if ($function=='index-san-pham')
		{
			$this->indexSanPham();
		}
	}
	
	function indexSanPham()
	{
		echo 'die'; die();
	}
}