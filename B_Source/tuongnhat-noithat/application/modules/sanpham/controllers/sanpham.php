<?php
class Sanpham extends NIW_Controller
{
	function __construct()
	{
		@session_start();
		parent::__construct();
		$this->module=strtolower(get_class());

		$this->load->model('Msanpham');
		$this->load->library('pagination');
		$this->load->library('recaptcha');
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
		elseif ($function == 'themgiohang')
		{
			$productId = $this->uri->segment(3);
			$this->insertBasket($productId);
		}
		elseif ($function == 'xemgiohang')
			$this->showBasket();
		elseif ($function == 'xoasanphamgiohang')
		{
			$id=$this->uri->segment(3);
			$this->removeFromBasket($id);
		}
		elseif ($function == 'updateQuantity')
		{
			$productId	=	$this->uri->segment(3);
			$quantity	=	$this->uri->segment(4);
			
			$this->updateQuantityBasket($productId, $quantity);
		}
		elseif ($function == 'computeTotal')
			$this->computeTotalBasketPrice();
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
		
		$this->data['category']=$this->Msanpham->getRowByColumn('tn_categories','category_id',$category_id);
		$this->data['product']=$this->Msanpham->getRowByColumn('tn_products','product_id',$product_id);
		//var_dump($data['product']);die();
		$this->data['parents']=$this->Msanpham->getListByColumn('tn_categories','category_parent_id',0);
		$this->data['detail']=$this->Msanpham->getRowByColumn('tn_products','product_id',$product_id);
		
		$model=new CI_Model();
		
		$this->data['module']=$this->module;
		$category_id1=$this->data['detail']->category_id;
		$this->data['relates']=$this->Msanpham->getListByColumnOffset('tn_products','category_id',$category_id1,0,6);
		
		$this->data['page']='vdetail';
		$this->load->view('front/container',$this->data);
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
			if ($_SESSION['lang'] == 'en')
				$listFull = $this->Msanpham->getListByColumnLikeText('tn_products', 'product_name_e', $searchValue);
			else $listFull = $this->Msanpham->getListByColumnLikeText('tn_products', 'product_name_v', $searchValue);
			
			// if there are some relate products, 
			$base_url = base_url().'sanpham/timKiem';
			$total_rows = count($listFull);
			$per_page = 15;
			$this->_setupPagination($base_url, $per_page, $total_rows);
			
			//get some products for one page.
			if ($_SESSION['lang'] == 'en')
				$listRelateProducts = $this->Msanpham->getListByColumnOffsetLikeText('tn_products', 'product_name_e', $searchValue, $index, $per_page);
			else $listRelateProducts = $this->Msanpham->getListByColumnOffsetLikeText('tn_products', 'product_name_v', $searchValue, $index, $per_page);
			
			$this->data['where'] = 'Kết quả tìm kiếm'; 
			$this->data['per_page'] = $per_page;
			$this->data['module'] = $this->module;
			$this->data['page'] = 'front/vtimkiem';
			$this->data['listProducts'] = $listRelateProducts;
			$this->data['totalProducts'] = count($listFull);
			$this->load->view('front/container', $this->data);
		}
		else redirect(base_url());
	}

	/*
	 * use 'basket' session for storing id numbers of selected products 
	 */
	/*
	 * check exist of a id in current basket
	 */
	function isExistInBasket($productId)
	{
		foreach ($_SESSION['basket'] as $item)
		{
			if ($item['id'] == $productId)
				return true;
		}
		return false;
	}
	
	/*
	 * insert a new product id in user basket online
	 */
	function insertBasket($productId)
	{
		echo '<meta charset="UTF-8"/>';
		if (isset($_SESSION['basket']))
		{
			if ($this->isExistInBasket($productId))
			{
				// if this id is exist in current basket, increase amount of it
				$count=0;
				foreach ($_SESSION['basket'] as $item)
				{
					if ($item['id'] == $productId)
					{
						$_SESSION['basket'][$item['id']]['amount']++;
						break;
					}
					$count++;
				}
			}
			else 
			{
				// if this id isn't exist in current basket, insert new item
				$newItem = array('id'	=>	$productId,
								'amount'	=>	1);
				$_SESSION['basket'][$productId] = $newItem;
			}
			
			echo '<script language = javascript>
					alert("Đã thêm vào giỏ hàng");		
				</script>';
		}
		else 
		{
			echo '<script language = javascript>
				alert("Lỗi: Giỏ hàng không tồn tại.");		
			</script>';
			redirect(base_url(), 'refresh');
		}
	}
	
	/*
	 * List all items in current basket
	 */
	function showBasket()
	{
		if (isset($_SESSION['basket']))
		{
			$currentBasket	=	$_SESSION['basket'];
			
			//for each id in current basket, get a product in database
			$listProducts	=	array();
			$amount			=	array();
			foreach ($currentBasket as $product)
			{
				$currentProduct	=	$this->Msanpham->getRowByColumn('tn_products', 'product_id', $product['id']);
				$listProducts[]	=	$currentProduct; // put that product into a list
				$amount[]		=	$product['amount']; //put amount into list
			}
			
			$this->data['amount']		=	$amount;
			$this->data['listProducts']	=	$listProducts;
			$this->data['page']			= 	'front/vgiohang';
			$this->data['module']		= 	$this->module;
			$this->data['where']		= 	'Giỏ hàng của bạn';
			$this->data['captcha']		=	$this->recaptcha->recaptcha_get_html();
			$this->load->view('front/container', $this->data);
		}
		else redirect(base_url());
	}

	/*
	 * Remove a item from current basket
	 * $productId: id number of the product which you want to remove
	 */
	function removeFromBasket($productId)
	{
		$count = 0;
		foreach ($_SESSION['basket'] as $item)
		{
			if ($item['id'] == $productId)
			{
				unset($_SESSION['basket'][$productId]);//($_SESSION['basket'][$count]);
				break;
			}
			$count++;
		}
		redirect(base_url().'sanpham/xemgiohang');
	}
	
	/*
	 * update quantity for one product in current basket
	 */
	function updateQuantityBasket($productId, $quantity)
	{
		//get product info
		$productInfo	=	$this->Msanpham->getRowByColumn('tn_products', 'product_id', $productId);
		
		foreach ($_SESSION['basket'] as $item)
		{
			if ($item['id'] == $productId)
			{
				$_SESSION['basket'][$productId]['amount'] = $quantity; //update quantity
				break;
			}
		}
		echo intval($productInfo->product_price) * $quantity.' VNĐ'; die(); 
	}
	
	/*
	 * Compute total money for current basket
	 */
	function computeTotalBasketPrice()
	{
		$money = 0;
		foreach ($_SESSION['basket'] as $item)
		{
			// get product info
			$productInfo	=	$this->Msanpham->getRowByColumn('tn_products', 'product_id', $item['id']);
			
			$perMoney		=	intval($productInfo->product_price) * $item['amount']; //compute money for each product
			$money			+=	$perMoney; 	//compute total money for basket
		}
		
		echo $money.' VNĐ'; die();
	}
}