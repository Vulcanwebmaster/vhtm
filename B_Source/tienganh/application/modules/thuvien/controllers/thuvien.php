<?php
/**
 * 
 * This class is controller of Thu vien in front. 
 * There are some functions to list images, videos and get detail of them...
 * @author Manhnt
 * @date 2012/12/15
 *
 */
class Thuvien extends NIW_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->module	=	strtolower(get_class());
		
		$this->load->model('Mthuvienanh');
	}
	
	function index()
	{
		$data['module']			=	$this->module;
		$data['page']			=	'vthuvien';
		$data['list_doitac']	=	$this->Mthuvienanh->getListFull('doitac');
		
		$this->load->view('front/container', $data);
	}
	
	/*
	 * a function to get detail of a category by category id
	 * $category_id: id number of category that will be got detail
	 */
	function category($category_id = '0', $index = 0)
	{
		$data['module']			=	$this->module;
		$data['category_id']	=	$category_id;
		$data['list']			=	$this->Mthuvienanh->getListByColumnOffset('ta_image', 'image_category',$category_id, $index, 6);
		
		if ($category_id < 3)
		{
			$data['page']		=	'vdsanh';
		}
		else $data['page']		=	'vdsvideo';
		
		$this->load->view('front/container', $data);
	}
}