<?php
class Hoadon extends NIW_Controller
{
	private $Mhoadon;
	function __construct()
	{
		@session_start();
		parent::__construct();
		
		$this->Mhoadon	=	new CI_Model();
		$this->load->library('form_validation');
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
			$productInfo	=	$this->Mhoadon->getRowByColumn('tn_products', 'product_id', $item['id']);
			
			$perMoney		=	intval($productInfo->product_price) * $item['amount']; //compute money for each product
			$money			+=	$perMoney; 	//compute total money for basket
		}
		
		return $money;
	}
	
	/*
	 * Insert a new order
	 */
	function insertOrder()
	{
		echo '<meta charset="UTF-8"/>';
		if ($this->input->post('submit'))
		{
			//check validation
			$this->form_validation->set_rules('recaptcha_response_field','recaptcha_response_field','required|trim|valid_captcha');
			$this->form_validation->set_message('valid_captcha','Mã số nhập vào không chính xác');
			
			if ($this->form_validation->run())
			{
				$result	=	true;
				// receive data from order form
				$input	=	array('user_id'		=>	$_SESSION['front_user_id'],
								'email'			=>	$this->input->post('order-email'),
								'phone'			=>	$this->input->post('order-phone'),
								'address'		=>	$this->input->post('order-address'),
								'date'			=>	$this->input->post('order-date'),
								'time'			=>	$this->input->post('order-time'),
								'name'			=>	$this->input->post('order-name'),
								'create_date'	=>	date('Y-m-d',time()+7*3600),
								'total_price'	=>	$this->computeTotalBasketPrice());
				
				if ($this->Mhoadon->insertNewRow('tn_order', $input))
				{
					$result		=	true;
					$newestId	=	mysql_insert_id(); // get id of newest order in table
					
					//insert items in current basket for this order in n_tn_order_detail table
					foreach ($_SESSION['basket'] as $item)
					{
						$input	=	array('order_id'	=>	$newestId,
										'product_id'	=>	$item['id'],
										'quantity'		=>	$item['amount']);
						if ($this->Mhoadon->insertNewRow('tn_order_detail', $input))
							$result	=	true;
						else 
						{
							$result	=	false;
							break;
						}
					}
				}
				
				//show result
				if ($result)
					echo '<script language=javascript> alert("Đặt hàng thành công"); </script>';
				else 
					echo '<script language=javascript> alert("Có lỗi xảy ra. Đặt hàng không thành công"); </script>';
			}
			else 
			{
				echo '<script language=javascript>
					alert("Mã nhập vào không đúng");
				</script>';
			}
		}
		
		redirect(base_url().'/sanpham/xemgiohang', 'refresh');
	}
}