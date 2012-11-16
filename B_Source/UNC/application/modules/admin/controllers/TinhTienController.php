<?php
	class Admin_TinhTienController extends Zend_Controller_Action
	{
		private $mTinhtien,$mTintuc;
		function init()
		{
			@session_start();
			if (isset($_SESSION['role_id']))
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
					  $_SESSION['backend_current_menu']="menu-quanlychung";
					  
					  $this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
					$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
					$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			}
			else $this->_redirect($this->view->baseUrl().'/../admin');
		}
		function indexAction()
		{
			$price_post=$this->mTinhtien->getPriceById(1);
			$price_review=$this->mTinhtien->getPriceById(2);
			$this->view->price_post=$price_post;
			$this->view->price_review=$price_review;
			  //$this->_redirect($this->view->baseUrl().'/../admin/tinhtien/thongke');
		}
		
		function thongkeAction()
		{
			$price_post=$this->mTinhtien->getPriceById(1);
			$price_review=$this->mTinhtien->getPriceById(2);
			$this->_helper->layout()->disableLayout();
			$name=$this->_request->getParam("name");
				$from_date=$this->_request->getParam('fromdate');
				$to_date=$this->_request->getParam('todate');
				$_SESSION['from_date']=$from_date;
				$_SESSION['to_date']=$to_date;
			$from_date=str_replace('-', '/',$from_date);
			$to_date=str_replace('-', '/',$to_date);
			if ($from_date && $to_date)
			{
				if (!$name)
					$listUser=$this->mTinhtien->getListUser();
				else 
				{
					$name=str_replace("***", " ", $name);
					$listUser=$this->mTinhtien->getListUserFilterByName($name);	
				}
				//echo count($listUser); die();
				$listNews=$this->mTintuc->getListNews();
				$listMoney=array();
				$listPost=array();
				$listCheck=array();
				foreach($listUser as $user)
				{
					$money=0;
					$post=0;
					$check=0;
					$userId=$user['user_id'];
					foreach ($listNews as $news)
					{
						if ($news['review_id']==$userId)
						{							
							if ($from_date<str_replace('-', '/', $news['news_modified_date']) && str_replace('-', '/', $news['news_modified_date'])<=$to_date
								&& $news['news_status']=='Công khai')
							{
								$check++;
								$money+=$price_review['price'];
							}
						}
						elseif ($news['user_id']==$userId)
						{							
							if ($from_date<=str_replace('-', '/',$news['news_post_date']) && str_replace('-', '/',$news['news_post_date'])<=$to_date
								&& $news['news_status']=='Công khai')
							{
								$post++;
								$money+=$price_post['price'];
							}
						}
					}
					$listMoney[]=$money;
					$listPost[]=$post;
					$listCheck[]=$check;
				}
				$this->view->listMoney=$listMoney;
				$this->view->listUser=$listUser;
				$this->view->listPost=$listPost;
				$this->view->listCheck=$listCheck;
			}
			else 
			{
			}
		}
		
		function priceAction()
		{
			if ($_SESSION['role_id']=='0')
			{
				$price_post=$this->_request->getPost('new-post-price');
				$price_review=$this->_request->getPost('review-price');
				$this->mTinhtien->updatePriceById('1', array('price'=>$price_post));
				$this->mTinhtien->updatePriceById('2', array('price'=>$price_review));
			}
			$this->_redirect($this->view->baseUrl().'/../admin/tinhtien');
		}
	}