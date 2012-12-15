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
	private $data = array();
	function __construct()
	{
		parent::__construct();
		$this->module	=	strtolower(get_class());
		
		$this->load->model('Mthuvienanh');
		$this->data['list_doitac']	=	$this->Mthuvienanh->getListFull('doitac');
	}
	
	function index()
	{
		$this->data['module']			=	$this->module;
		$this->data['page']			=	'vthuvien';
		
		$this->load->view('front/container', $this->data);
	}
	
	/*
	 * a function to get detail of a category by category id
	 * $category_id: id number of the category that will be got detail
	 */
	function category($category_id = '0', $index = 0)
	{
		$this->data['module']		=	$this->module;
		$this->data['category_id']	=	$category_id;
		
		if ($category_id < 3) // if category is image category
		{
			// get list all of albums
			$this->data['list']		=	$this->Mthuvienanh->getListByColumnOffset('ta_albums', 'category_id',$category_id, $index, 6);
			$this->data['page']		=	'vdanhmucanh';
			
			$counting	=	array();
			foreach ($this->data['list'] as $item)
			{
				$listImages	=	$this->Mthuvienanh->getListByColumn('ta_image','image_album', $item->album_id);
				$counting[]	=	count($listImages); // count amount of images for each album
			}
			
			$this->data['counting']	=	$counting;
		}
		else // if category is video category
		{
			$this->data['list']		=	$this->Mthuvienanh->getListOffset('ta_vedio', $index, 6);
			$this->data['page']		=	'vdanhmucvideo';
		}
		
		$this->load->view('front/container', $this->data);
	}
	
	/*
	 * A function to get detail of a album
	 * @album_id: id number of the album that will be got detail
	 */
	function album($album_id = '0')
	{
		$this->data['module']	=	$this->module;
		$this->data['page']		=	'vchitietalbum';
		$this->data['list']		=	$this->Mthuvienanh->getListByColumn('ta_image', 'image_album', $album_id);
		
		$this->load->view('front/container', $this->data);
	}
}