<?php
	class Danhmuc extends NIW_Controller
	{
		private $module;
		function __construct()
		{
			@session_start();
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->library('pagination');
			$this->load->model('Mdanhmuc');
			$this->data['title'] = 'Nội thất Tường Nhật | Danh mục sản phẩm';
		}
		
		function _remap($alias)
		{
			$segments=explode('-', $alias);
			$realAlias;
			$categoryId = $segments[0];
			$currentPage = $this->uri->segment(3);
			$this->detailCategory($categoryId, $currentPage);
		}
		
		/*
		 * Filter a list products by min and max price
		 */
		function filterByPrices($list)
		{
			if ($this->input->post("price-filter"))
			{
				if ($this->input->post("price-filter") != '0')
				{
					$valueFilter	=	$this->input->post("price-filter");
					$segments		=	explode('-', $valueFilter);
					$valueMin		=	$segments[0];
					$valueMax		=	$segments[1];
					$result			=	array();
					
					foreach ($list as $item)
					{
						if ($item->product_price > $valueMin && $item->product_price < $valueMax)
							$result[]	=	$item;
					}
				}
				else $result	=	$list;
			}
			else $result	=	$list;
			
			return $result;
		}
		
		/*
		 * Get detail of category
		 * $categoryId: id number of target category.
		 */
		function detailCategory($categoryId='0', $index='0')
		{
			//get category info by id
			$categoryInfo			=	$this->Mdanhmuc->getRowByColumn('tn_categories','category_id', $categoryId);
			$listFullByCategoryId	=	$this->Mdanhmuc->getListByColumn('tn_products', 'category_id', $categoryId);
			$listFullByCategoryId	=	$this->filterByPrices($listFullByCategoryId);// filter by price
			if ($categoryInfo)
			{
				//get list products by category id
				$listProducts		=	$this->Mdanhmuc->getListByColumnOffset('tn_products','category_id',$categoryId, $index, 21);
				$listProducts		=	$this->filterByPrices($listProducts);// filter by price
				//check filter
				
				//get list prices for filter
				$listPrices = $this->Mdanhmuc->getListByColumn('tn_price', 'is_active', '1');
				
				//set up pagination
				$config['base_url']		=	base_url().'danh-muc/'.$categoryId.'-'.$categoryInfo->alias;
				$config['per_page']		=	21;
				$config['total_rows']	=	count($listFullByCategoryId);
				$config['uri_segment']	=	3;
				$this->pagination->initialize($config);
				
				//--------
				if ($_SESSION['lang'] == 'en')
					$this->data['where']		=	$categoryInfo->category_name_e;
				else $this->data['where']		=	$categoryInfo->category_name_v;
				$this->data['totalProducts']	=	count($listFullByCategoryId);
				$this->data['filter']			=	$listPrices;
				$this->data['info']				=	$categoryInfo;
				$this->data['module']			=	$this->module;
				$this->data['page']				=	'front/vdetail';
				$this->data['listProducts'] = $listProducts;
				
				$this->load->view('front/container',$this->data);
			}
		}
	}
