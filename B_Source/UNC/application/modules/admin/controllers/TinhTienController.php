<?php
	class Admin_TinhTienController extends Zend_Controller_Action
	{
		private $mTinhtien,$mTintuc;
		function init()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$layoutPath = APPLICATION_PATH  . '/templates/admin';
		      $option = array ('layout' => 'index', 
		                   'layoutPath' => $layoutPath );
		      Zend_Layout::startMvc ( $option );
			  $this->mChuyenmuc = new Admin_Model_Mchuyenmuc();
			  $this->mTinhtien = new Admin_Model_Mtinhtien();
			  $this->mTintuc = new Admin_Model_Mtintuc();
			  @session_start();
			  if(isset($_SESSION['role']))
			  	$this->role = $_SESSION['role'];
			  else {
				  $this->_redirect($this->view->baseUrl().'/../admin');
			  }
			  if(isset($_SESSION['user']))
			 	 $this->user = $_SESSION['user'];
			  else {
				  $this->_redirect($this->view->baseUrl().'/../admin');
			  }
		}
		function indexAction()
		{
			  $this->_redirect($this->view->baseUrl().'/../admin/tinhtien/thongke');
		}
		
		function thongkeAction()
		{
			$price_post=$this->mTinhtien->getPriceById(1);
			$price_review=$this->mTinhtien->getPriceById(2);
			$this->view->price_post=$price_post;
			$this->view->price_review=$price_review;
			if ($this->_request->isPost())
			{
				$from_date=$this->_request->getPost('fromdate');
				$to_date=$this->_request->getPost('todate');
				$_SESSION['from_date']=$from_date;
				$_SESSION['to_date']=$to_date;
				
				$listUser=$this->mTinhtien->getListUser();
				$listNews=$this->mTintuc->getListNews();
				$listMoney=array();
				foreach($listUser as $user)
				{
					$money=0;
					$userId=$user['user_id'];
					foreach ($listNews as $news)
					{
						if ($news['review_id']==$userId)
						{
							if ($from_date<str_replace('-', '/', $news['news_modified_date']) && str_replace('-', '/', $news['news_modified_date'])<=$to_date
								&& $news['news_status']=='Công khai')
								$money+=$price_review['price'];
						}
						elseif ($news['user_id']==$userId)
						{
							if ($from_date<=str_replace('-', '/',$news['news_post_date']) && str_replace('-', '/',$news['news_post_date'])<=$to_date
								&& $news['news_status']=='Công khai')
								$money+=$price_post['price'];
						}
					}
					$listMoney[]=$money;
				}
				$this->view->listMoney=$listMoney;
				$this->view->listUser=$listUser;
			}
			else 
			{
				$this->view->listMoney=array();
				$this->view->listUser=array();
			}
		}
		
		function priceAction()
		{
			$price_post=$this->_request->getPost('new-post-price');
			$price_review=$this->_request->getPost('review-price');
			$this->mTinhtien->updatePriceById('1', array('price'=>$price_post));
			$this->mTinhtien->updatePriceById('2', array('price'=>$price_review));
			$this->_redirect($this->view->baseUrl().'/../admin/tinhtien/thongke');
		}
	}
?>