<?php
	class Admin_TinhTienController extends Zend_Controller_Action
	{
		
		function init()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$layoutPath = APPLICATION_PATH  . '/templates/admin';
		      $option = array ('layout' => 'index', 
		                   'layoutPath' => $layoutPath );
		      Zend_Layout::startMvc ( $option );
			  $this->mChuyenmuc = new Admin_Model_Mchuyenmuc();
			  session_start();
			  
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
			  $obj=new Admin_Model_Mtinhtien();
			  if($this->_request->isPost())
			  {
			  	$fromdate = $this->_request->getParam('fromdate');
				$todate = $this->_request->getParam('todate');
				if($fromdate==""&&$todate=="")
				{
					$this->view->totalmoney= $obj->tinhtienover();
				}
				else
				{
					if($fromdate!=""&&$todate=="")
					{
						$this->view->totalmoney= $obj->tinhtien($fromdate,Zend_Date::now());
					}
					else
					{
						$this->view->totalmoney= $obj->tinhtien($fromdate,$todate);	
					}
							
				}
					
			  }
			  else
			  {
					$this->view->totalmoney= $obj->tinhtienover(); 	  
			  }
			  $this->view->data=$obj->getlist();
			  
		}
		function danhmuctienluongAction()
		{
			$obj= new Admin_Model_Mtinhtien();
			$this->view->data= $obj->getlist();
			if($this->_request->isPost())
			{
				$create= $this->_request->getParam('create');
				$obj->updategia('create',$create);
				$review= $this->_request->getParam('review');
				$obj->updategia('review',$review);
				$this->view->data= $obj->getlist();
				
			}
		}
	}
?>