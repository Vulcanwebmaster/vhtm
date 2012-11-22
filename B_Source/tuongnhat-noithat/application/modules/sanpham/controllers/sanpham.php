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
		elseif ($function == 'chitiet')
		{
			$input=$this->uri->segment(3);
			$this->chitiet($input);
		}
		elseif ($function == 'index')
			$this->index();
	}
	
	function index()
	{
		redirect(base_url(), 'refresh');
	}
	
	function chitiet($alias)
	{
		// Sử dụng hàm explode để tách chuỗi. dựa vào kí tự "-"
		$temp = explode("-", $alias);
		if (isset($temp)){
			$category_id = $temp[0];
			$product_id = $temp[1];
		}
		
		$data['category']=$this->Msanpham->getRowByColumn('tn_categories','category_id',$category_id);
		$data['product']=$this->Msanpham->getRowByColumn('tn_products','product_id',$product_id);
		//var_dump($data['product']);die();
		$data['parents']=$this->Msanpham->getListByColumn('tn_categories','category_parent_id',0);
		$data['detail']=$this->Msanpham->getRowByColumn('tn_products','product_id',$product_id);
		
		$model=new CI_Model();
		
		$data['module']=$this->module;
		$category_id1=$data['detail']->category_id;
		$data['relates']=$this->Msanpham->getListByColumnOffset('tn_products','category_id',$category_id1,0,6);
		
		$data['page']='vdetail';
		$this->load->view('front/container',$data);
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