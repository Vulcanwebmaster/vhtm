<?php
class Sanpham extends NIW_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->module=strtolower(get_class());
		
		$this->load->model('Msanpham');
		$this->load->library('pagination');
	}
	
	function _remap($function)
	{
		if ($function == 'timkiem')
		{
			$index = $this->uri->segment(3);
			$this->timKiem($index);
		}
		elseif ($function == 'index')
			$this->index();
	}
	
	function index()
	{
		redirect(base_url(), 'refresh');
	}
	
	/*
	 * set up pagination
	 */
	function _setupPagination($base_url = '', $per_page = 1, $total_rows = 1, $uri_segment = 3)
	{
		$config['base_url'] = $base_url;
		$config['per_page'] = $per_page;
		$config['total_rows'] = $total_rows;
		$config['uri_segment'] = $uri_segment;
		
		$this->pagination->initialize($config);
	}
	
	/*
	 * searching for products
	 */
	function timKiem($index = '0')
	{
		if ($_GET['searchTerm'])
		{
			$searchValue = $_GET['searchTerm'];
			$_SESSION['keySearch'] = $searchValue;
			
			//get all relate products
			$listFull = $this->Msanpham->getListByColumnLikeText('tn_products', 'product_name', $searchValue);
			
			if (count($listFull) > 0)
			{
				// if there are some relate products, 
				$base_url = base_url().'sanpham/timKiem';
				$total_rows = count($listFull);
				$per_page = 15;
				$this->_setupPagination($base_url, $per_page, $total_rows);
				
				//get some products for one page.
				$listRelateProducts = $this->Msanpham->getListByColumnOffsetLikeText('tn_products', 'product_name', $searchValue, $index, $per_page);
				
				$this->data['per_page'] = $per_page;
				$this->data['module'] = $this->module;
				$this->data['page'] = 'front/vtimkiem';
				$this->data['listProducts'] = $listRelateProducts;
				$this->data['totalProducts'] = count($listFull);
				$this->load->view('front/container', $this->data);
			}
		}
		else redirect(base_url());
	}
}