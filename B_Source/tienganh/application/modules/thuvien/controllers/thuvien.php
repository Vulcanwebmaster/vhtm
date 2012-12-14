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
		
		if ($category_id < 3) // if category is image category
		{
			// get list all of albums
			$data['list']		=	$this->Mthuvienanh->getListByColumnOffset('ta_albums', 'category_id',$category_id, $index, 6);
			$data['page']		=	'vdsalbum';
			
			$counting	=	array();
			foreach ($data['list'] as $item)
			{
				$listImages	=	$this->Mthuvienanh->getListByColumn('ta_image','image_album', $item->album_id);
				$counting[]	=	count($listImages); // count amount of images for each album
			}
			
			$data['counting']	=	$counting;
		}
		else // if category is video category
		{
			$data['list']		=	$this->Mthuvienanh->getListOffset('ta_vedio', $index, 6);
			$data['page']		=	'vdsvideo';
		}
		
		$this->load->view('front/container', $data);
	}
}