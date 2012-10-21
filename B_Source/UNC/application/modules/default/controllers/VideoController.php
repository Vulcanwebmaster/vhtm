<?php
class VideoController extends Zend_Controller_Action
{
	protected $mTintuc;
	protected $mDefault;
	protected $mVideo;
	function init()
	{
		$layoutPath = APPLICATION_PATH  . '/templates/front';
	    $option = array ('layout' => 'index', 
	                  'layoutPath' => $layoutPath);
	    Zend_Layout::startMvc ($option);
		
		$this->mDefault = new Default_Model_Mdefault();
		$this->mTintuc = new Default_Model_Mtintuc();
		$this->mVideo = new Default_Model_Mvideo();
	    session_start();	
		unset($_SESSION['home']);
	}
	
	function listAction()
	{
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/tiennd.js',"text/javascript");
		
		$this->view->listHotNews = $this->mDefault->getListHotNews();
		$this->view->listNewsMostView = $this->mDefault->getListMostView();
		$this->view->listHotNewsJs = $this->mDefault->getListHotNewsJs();
		$this->view->listParent = $this->mTintuc->getListParent();
		$this->view->listChild = $this->mTintuc->getListChild();	
		
		$paginator = Zend_Paginator::factory($this->mVideo->getListVideo());
        $paginator->setItemCountPerPage(5);        
        $currentPage = $this->_request->getParam('page',1);
        $paginator->setCurrentPageNumber($currentPage);
		$this->view->list = $paginator;
	}
	
	function setForm($video_id)
	{
		$form=new Zend_Form;
		$form->setMethod('post')->setAction('');
			
		$user_name = new Zend_Form_Element_Text('user_name');
		$user_name->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Tên đăng nhập không được để trống'));
			
		$pass_word = new Zend_Form_Element_Password('pass_word');
		$pass_word->setAttrib('renderPassword', true);
		$pass_word->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Mật khẩu không được để trống'));
		
		$user_name->removeDecorator('HtmlTag')->removeDecorator('Label');	
		$pass_word->removeDecorator('HtmlTag')->removeDecorator('Label');
		
		$form->addElements(array($user_name,$pass_word));
		return $form;
	}
	
	function detailAction()
	{
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/tiennd.js',"text/javascript");
		
		$this->view->listHotNews = $this->mDefault->getListHotNews();
		$this->view->listNewsMostView = $this->mDefault->getListMostView();
		$this->view->listHotNewsJs = $this->mDefault->getListHotNewsJs();
		
		$video_id = $this->_request->getParam('videoid');
		$this->view->video = $this->mVideo->getVideoByVideoId($video_id);
		
		$listUser = array();
		
		$this->view->listUser = $listUser;
		
		$listParents=$this->mTintuc->getListParent();
		$this->view->listParent = $listParents;
		$listChild=$this->mTintuc->getListChild();

		$this->view->listChild = $listChild;
		
		$listquangcao = $this->mDefault->getListAds();
		$this->view->listquangcao=$listquangcao;
		
		$form = $this->setForm($video_id);
		$this->view->form = $form;
	}
	
	function addcommentAction()
	{
		$video_id = $this->_request->getParam('newsid');
		$reader_id = $this->_request->getParam('readerid');
		
		$comment_content = $this->_request->getPost('comment_content');
		$comment_content = trim($comment_content);
		//echo strlen($comment_content);die();
		if($comment_content == "")
		{
			$_SESSION['fail'] = 'Vui lòng nhập nội dung bình luận !';
		}
		else if($comment_content != "")
		{
			if(strlen($comment_content) > 600)
				$_SESSION['fail'] = 'Nội dung bình luận giới hạn 600 kí tự, vui lòng thử lại !';
			else
				$this->mTintuc->insertComment($reader_id,$video_id,$comment_content);
		}
		$this->_redirect($_SERVER['HTTP_REFERER']);	
	}	
	
	function loginAction()
	{
		$video_id = $this->_request->getParam('videoid');
		//echo $video_id;die();
		$form = $this->setForm($video_id);
		
		if($this->_request->isPost())
		{
			if($form->isValid($_POST))
			{
				$user_name = $form->getValue('user_name');
				$pass_word = $form->getValue('pass_word');
						
				if($this->mTintuc->isUserName($user_name))
				{
					$pass_word_salt = $this->mTintuc->getSaltByUserName($user_name);
					$pass_word_forum = $this->mTintuc->getPassWordByUserName($user_name);
					$pass_word = md5(md5($pass_word).$pass_word_salt);
					
					if($pass_word == $pass_word_forum)	
					{
						$_SESSION['logged'] = $user_name;
						$_SESSION['reader_id'] = $this->mTintuc->getUserIdByUserNameForum($user_name);
					}		
					else 
					{
						$_SESSION['fail'] = 'Tên đăng nhập hoặc mật khẩu không đúng !';	
					}
				}
				else 
				{
					$_SESSION['fail'] = 'Tên đăng nhập hoặc mật khẩu không đúng !';
				}
			}
			else
			{
				$_SESSION['fail'] = 'Vui lòng nhập đầy đủ thông tin !';
				$form->populate($_POST);
			}
		}
		
		$this->_redirect($_SERVER['HTTP_REFERER']);	
	}

	function logoutAction()
	{
		session_destroy();
		$this->_redirect($_SERVER['HTTP_REFERER']);
	}
}
	