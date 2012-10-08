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
			
			$reader_id = new Zend_Form_Element_Select('reader_id');
			$reader_id->addMultiOption('0', '');
			foreach($this->mComment->getListReader() as $reader)
			{
				$reader_id->addMultiOption($reader['comment_user_id'],$reader['comment_user_fullname']);
			}
			
			$comment_content->removeDecorator('HtmlTag')->removeDecorator('Label');
			$news_id->removeDecorator('HtmlTag')->removeDecorator('Label');
			$reader_id->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$form->addElements(array($comment_content,$news_id,$reader_id));
			return $form;
		}
		
		function _getInput($form)
		{
			$input = array(	
							'comment_content'	=> $form->getValue('comment_content'),
							'news_id'			=> $form->getValue('news_id'),
							'reader_id'			=> $form->getValue('reader_id')
			);
			return $input;
		}
		
		function editAction()
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
			$form->getElement('reader_id')->setValue($info['reader_id']);
			
			$this->view->title="Sửa comment";
			$this->view->form = $form;
			
			if($this->_request->isPost())
			{
				if($form->isValid($_POST))
				{
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
		
		function delAction()
		{
			$comment_id=$this->_request->getParam('comment_id');
			
			if ($this->mComment->deleteComment($comment_id))
				$_SESSION['result']='Xóa thành công';
			else $_SESSION['result']='Xóa không thành công';
			
			$this->_redirect($this->view->baseUrl().'/../admin/comment');
		}

	}