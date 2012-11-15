<?php
	class Admin_CommentController extends Zend_Controller_Action
	{
		protected $mComment;
		protected $role;
		protected $user;
		protected $user_id;
		function init()
		{
			@session_start();
			if (isset($_SESSION['role_id']))
			{
			$layoutPath = APPLICATION_PATH  . '/templates/admin';
		      $option = array ('layout' => 'index', 
		                   'layoutPath' => $layoutPath );
		      Zend_Layout::startMvc ( $option );
			  $this->mComment = new Admin_Model_Mcomment();
			  
			  if(isset($_SESSION['role']))
			  	$this->role = $_SESSION['role'];
			  else {
				  $this->_redirect($this->view->baseUrl().'/../admin');
			  }
			  if(isset($_SESSION['user_id']))
			 	 $this->user_id = $_SESSION['user_id'];
			  else {
				  $this->_redirect($this->view->baseUrl().'/../admin');
			  }
			  $_SESSION["backend_current_menu"]="menu-quanlytin";
			}
			else $this->_redirect($this->view->baseUrl().'/../admin');
		}
		
		function indexAction()
		{
			//echo $this->user_id.' --- '.$this->role;die();
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$listNewsTitle = array();
			$listReaderName = array();
			$listComments = array();
			$listNewsId = array();
			
			if($this->role =="0")
			{
				$listComments = $this->mComment->getListComment();				
				//Nếu là admin thì lấy ra danh sách tất cả các comment
				$paginator = Zend_Paginator::factory($listComments);
			}
			elseif($this->role =="1")	
			{
				//Nếu là trưởng ban
				//Lấy ra danh sách chuyên mục mà trưởng ban đó quản lý
				$listCategoryId = $this->mComment->getListCategoryId($this->user_id);
				$listNews = $this->mComment->getListNews();
				$comments = $this->mComment->getListComment();
				
				foreach($listCategoryId as $CategoryId)
				{
					//Lấy ra danh sách các tin thuộc các chuyên mục mà trưởng ban đó quản lý
					foreach($listNews as $news)
					{
						if($news['category_id'] == $CategoryId['category_id'])
						{
							//Danh sách ID của tin tức thuộc các chuyên mục mà trưởng ban đó quản lý
							$listNewsId[] = $this->mComment->getNewsByNewsId($news['news_id']);
						}
					}
				}
				
				foreach($comments as $comment)
				{
					foreach($listNewsId as $newsId)
					{
						if($newsId['news_id'] == $comment['news_id'])
						{
							$listComments[] = $this->mComment->getCommentById($comment['comment_id']);
						}
					}
				}
				//var_dump($listComments);die();
				$paginator = Zend_Paginator::factory($listComments);
			}
			elseif($this->role == "2")
			{
				$comments = $this->mComment->getListComment();
				//Nếu là phóng viên 
				//Lấy ra danh sách tin tức mà phóng viên đó viết
				$listNewsId = $this->mComment->getListNewsByAuthor($this->user_id);
				
				foreach($comments as $comment)
				{
					foreach($listNewsId as $newsId)
					{
						if($newsId['news_id'] == $comment['news_id'])
						{
							$listComments[] = $this->mComment->getCommentById($comment['comment_id']);
						}
					}
				}
				
				$paginator = Zend_Paginator::factory($listComments);
			}
			
			//var_dump($listComments);die();
			
			foreach($listComments as $comments)
			{				
				$listNewsTitle[] = $this->mComment->getNewsTitleByNewsId($comments['news_id']);
			}			
			
	        	$paginator->setItemCountPerPage(25);        
	        	$currentPage = $this->_request->getParam('page',1);
	         	$paginator->setCurrentPageNumber($currentPage);
				
			$this->view->page=$currentPage;
	        	$this->view->list=$paginator;
			$this->view->title="Quản lý comment";
			$this->view->listNewsTitle = $listNewsTitle;
			$this->view->listReaderName = $listReaderName;
		}
		
		function setForm()
		{
			$form = new Zend_Form;
			$form->setAction('')->setMethod('post');
			
			$comment_content = new Zend_Form_Element_Textarea('comment_content');
			$comment_content->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Nội dung bình luận không được để trống'));
			$comment_content->setAttrib('rows', '5');
			
			$news_id = new Zend_Form_Element_Select('news_id');
			
			foreach($this->mComment->getListNews() as $news)
			{
				$news_id->addMultiOption($news['news_id'],$news['news_title']);
			}
			
			$comment_content->removeDecorator('HtmlTag')->removeDecorator('Label');
			$news_id->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$form->addElements(array($comment_content,$news_id));
			return $form;
		}
		
		function _getInput($form)
		{
			$input = array(	
							'comment_content'	=> $form->getValue('comment_content'),
							'news_id'			=> $form->getValue('news_id'),
			);
			return $input;
		}
		
		function editAction()
		{
			if ($_SESSION['role_id']=='2')
			{
				$this->_redirect($this->view->baseUrl().'/../admin/comment');
			}
			else 
			{
				$this->view->headTitle('UNC - Admin website');
				$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
				$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
				$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
				
				$comment_id = $this->_request->getParam('comment_id');
				$info = $this->mComment->getCommentById($comment_id);
				
				$form = $this->setForm();
				$form->setAction($this->view->baseUrl().'/admin/comment/edit/comment_id/'.$comment_id);
				$form->getElement('comment_content')->setValue($info['comment_content']);
				$form->getElement('news_id')->setValue($info['news_id']);
				
				$this->view->title="Sửa comment";
				$this->view->form = $form;
				
				if($this->_request->isPost())
				{
					if($form->isValid($_POST))
					{
						//var_dump($this->mComment->editComment($comment_id,$input));die();
						$input = $this->_getInput($form);
						//var_dump($input);die();
						if ($this->mComment->editComment($comment_id,$input))
						{
							$_SESSION['result']='Cập nhật thành công';
							$this->_redirect($this->view->baseUrl().'/../admin/comment');
						}
						else 
						{
							$_SESSION['result']='Cập nhật không thành công';
							$this->_redirect($this->view->baseUrl().'/../admin/comment');
						}
					}
					else 
					{
						$form->populate($_POST);
					}
					
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