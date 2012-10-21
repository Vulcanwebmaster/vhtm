<?php
class TintucController extends Zend_Controller_Action
{
	protected $mTintuc;
	protected $mDefault;
	
	function init()
	{
		session_start();
		$layoutPath = APPLICATION_PATH  . '/templates/front';
	    $option = array ('layout' => 'index', 
	                  'layoutPath' => $layoutPath);
	    Zend_Layout::startMvc ($option);
		
	    $this->mDefault = new Default_Model_Mdefault();
		$this->mTintuc = new Default_Model_Mtintuc();
	}
	
	function setForm1($newsId,$readerId)
	{
		$form1 = new Zend_Form;
			 
		$form1->setMethod('post')->setAction($this->view->baseUrl().'/tintuc/addcomment/newsid/'.$newsId.'/readerid/'.$readerId);
			
		$comment_content = new Zend_Form_Element_Textarea('comment_content');
		$comment_content->setAttrib('rows',"5");
		$comment_content->setAttrib('style',"width:100%");
		$comment_content->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Vui lòng nhập nội dung bình luận'));
		$comment_content->removeDecorator('HtmlTag')->removeDecorator('Label');
		$form1->addElement($comment_content);
		return $form1;
	}
	
	function setForm($news_id)
	{
		$form=new Zend_Form;
		//$this->view->baseUrl().'/tintuc/detail/newsid/'.$newsId
		$form->setMethod('post')->setAction($this->view->baseUrl().'/tintuc/login/newsid/'.$news_id);
			
		$user_name = new Zend_Form_Element_Text('user_name');
		$user_name->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Tên đăng nhập không được để trống'));
			
		$pass_word = new Zend_Form_Element_Password('pass_word');
		//$pass_word->setAttrib('renderPassword', true);
		$pass_word->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Mật khẩu không được để trống'));
		
		$user_name->removeDecorator('HtmlTag')->removeDecorator('Label');	
		$pass_word->removeDecorator('HtmlTag')->removeDecorator('Label');
		
		$form->addElements(array($user_name,$pass_word));
		return $form;
	}
	
	function maHoaVbb()
	{
		$password = "thuanthanh";
		$password_salt = "'Yyfu5C>tPn7-a-M6M_O:(78p746&/";
		echo md5(md5($password).$password_salt) ;die();
		$user = $this->mTintuc->getUserByUserId(2);
		var_dump($user);die();
	}
	
	function addcommentAction()
	{
		$news_id = $this->_request->getParam('newsid');
		$reader_id = $this->_request->getParam('readerid');
		$form1 = $this->setForm1($news_id,$reader_id);
		if($this->_request->isPost())
		{
			if($form1->isValid($_POST))
			{
				$comment_content = $form1->getValue('comment_content');
				$this->mTintuc->insertComment($reader_id,$news_id,$comment_content);
			}
			else 
			{
				$form1->populate($_POST);
			}
			$this->_redirect($this->view->baseUrl().'/../tintuc/detail/newsid/'.$news_id);
		}
	}	
	
	function loginAction()
	{
		$news_id = $this->_request->getParam('newsid');
		$form = $this->setForm($news_id);
		
		if($form->isValid($_POST))
		{
			$user_name = $form->getValue('user_name');
			$pass_word = $form->getValue('pass_word');
					
			if($this->mTintuc->isUserName($user_name))
			{
				$pass_word_salt = $this->mTintuc->getSaltByUserName($user_name);
				$pass_word_forum = $this->mTintuc->getPassWordByUserName($user_name);
						
				$pass_word = md5(md5($pass_word).$pass_word_salt);
					//echo $pass_word;die();
				if($pass_word == $pass_word_forum)	
				{
					$_SESSION['logged'] = $user_name;
					$_SESSION['reader_id'] = $this->mTintuc->getUserIdByUserNameForum($user_name);
				}		
				else 
				{
					$_SESSION['fail'] = 'Tên đăng nhập hoặc mật khẩu không đúng';	
				}
			}
			else 
			{
				$_SESSION['fail'] = 'Tên đăng nhập hoặc mật khẩu không đúng';
			}
		}
		else
		{
			$form->populate($_POST);
		}
		
		$this->_redirect($this->view->baseUrl().'/../tintuc/detail/newsid/'.$news_id);	
	}
	
	function detailAction()
	{
		//unset($_SESSION['logged']);
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/tiennd.js',"text/javascript");
		
		$this->view->listHotNews = $this->mDefault->getListHotNews();
		$this->view->listNewsMostView = $this->mDefault->getListMostView();
		$this->view->listHotNewsJs = $this->mDefault->getListHotNewsJs();

		$news_id = $this->_request->getParam('newsid');
		$news = $this->mTintuc->getNewsByNewsId($news_id);
		
		$this->view->news = $news;
		$this->view->listComment = $this->mTintuc->getCommentByNewsId($news_id);
		
		$listUser = array();
		foreach($this->mTintuc->getCommentByNewsId($news_id) as $comment)
		{
			foreach($this->mTintuc->getListForumUser() as $user)
			{
				if($comment['reader_id'] == $user['userid'])
				{
					$listUser[] = $user;
				}
			}
		}
		
		$this->view->listUser = $listUser;
		
		$listParents=$this->mTintuc->getListParent();
		$this->view->listParent = $listParents;
		$listChild=$this->mTintuc->getListChild();

		$this->view->listChild = $listChild;
		
		$listquangcao = $this->mDefault->getListAds();
		$this->view->listquangcao=$listquangcao;
		
		$form = $this->setForm($news_id);
		$this->view->form = $form;
	}
		
	function listAction()
	{
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/tiennd.js',"text/javascript");
		$categoryId = $this->_request->getParam('categoryId');
		if($this->mTintuc->isParent($categoryId))
		{
			$list = array();
			$listNews = $this->mTintuc->getListNews();
			$listCategoryId = $this->mTintuc->getListChildByParent($categoryId);
			
			foreach($listCategoryId as $categoryId)
			{
				foreach($listNews as $news)
				{
					if($news['category_id'] == $categoryId['category_id'])
					{
						$list[] = $news;
					}
				}
			}
			$listquangcao = array();
			$listAds = $this->mTintuc->getListAds();
			foreach($listCategoryId as $categoryId)
			{
				foreach($listAds as $ads)
				{
					if($ads['category_id'] == $categoryId['category_id'])
					{
						$listquangcao[] = $ads;
					}
				}
			}
		}
		else 
		{
			$list = $this->mTintuc->getListNewsByCategoryId($categoryId);
			$listquangcao = $this->mTintuc->getListAdsByCategoryId($categoryId);
		}
		
		$paginator = Zend_Paginator::factory($list);
        $paginator->setItemCountPerPage(5);        
        $currentPage = $this->_request->getParam('page',1);
        $paginator->setCurrentPageNumber($currentPage);
		
        $this->view->list=$paginator;
		$this->view->listquangcao=$listquangcao;
		
		$this->view->listHotNews = $this->mDefault->getListHotNews();
		$this->view->listNewsMostView = $this->mDefault->getListMostView();
		$this->view->listHotNewsJs = $this->mDefault->getListHotNewsJs();
		
		$this->view->listParent = $this->mTintuc->getListParent();
		$this->view->listChild = $this->mTintuc->getListChild();
	}

	function logoutAction()
	{
		session_destroy();
		$this->_redirect($_SERVER['HTTP_REFERER']);
		
	}
	
}
