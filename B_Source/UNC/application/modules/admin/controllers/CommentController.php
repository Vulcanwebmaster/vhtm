<?php
	class Admin_CommentController extends Zend_Controller_Action
	{
		protected $mComment;
		function init()
		{
			$layoutPath = APPLICATION_PATH  . '/templates/admin';
		      $option = array ('layout' => 'index', 
		                   'layoutPath' => $layoutPath );
		      Zend_Layout::startMvc ( $option );
			  $this->mComment = new Admin_Model_Mcomment();
		}
		
		function indexAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$paginator = Zend_Paginator::factory($this->mComment->getListComment());
        	$paginator->setItemCountPerPage(5);        
        	$paginator->setPageRange(3);
        	$currentPage = $this->_request->getParam('page',1);
         	$paginator->setCurrentPageNumber($currentPage);
        	$this->view->list=$paginator;
			$this->view->title="Quản lý comment";
		}
		
		function _getInput()
		{
			$input = array(	
							'comment_id'		=> $this->_request->getParam('comment_id'),
							'comment_content'	=> $this->_request->getPost('comment_content'),
							'news_id'			=> $this->_request->getPost('news_id'),
							'reader_id'			=> $this->_request->getPost('reader_id')
			);
			return $input;
		}
		
		function editAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$comment_id=$this->_request->getParam('comment_id');
			$comment=$this->mComment->getCommentById($comment_id);
			
			$this->view->comment = $comment;
			$this->view->list = $this->mComment->getNewsOtherId($comment['news_id']);
			$this->view->title="Sửa comment";
			
			if($this->_request->isPost())
			{
				
				$input=$this->_getInput();
				if ($this->mComment->editComment($input))
				{
					$_SESSION['result']='Cập nhật thành công';
					$this->_redirect($this->view->baseUrl().'/../admin/comment');
				}
				else 
				{
					$_SESSION['result']='Thêm mới không thành công';
					$this->_redirect($this->view->baseUrl().'/../admin/comment');
				}
				
			}
		}
		
		function delAction()
		{
			$comment_id=$this->_request->getParam('comment_id');
			
			if ($this->mComment->deleteComment($comment_id))
				$_SESSION['result']='Xóa thành công';
			else $_SESSION['result']='Xóa không thành công';
			
			$this->_redirect($this->view->baseUrl().'/../admin/comment');
		}

	}
?>