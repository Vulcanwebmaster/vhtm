<?php
class TintucController extends Zend_Controller_Action
{
	protected $mTintuc;
	protected $mDefault;
	
	function init()
	{
		$layoutPath = APPLICATION_PATH  . '/templates/front';
	    $option = array ('layout' => 'index', 
	                  'layoutPath' => $layoutPath);
	    Zend_Layout::startMvc ($option);
	      
	    $this->mDefault = new Default_Model_Mdefault();
		$this->mTintuc = new Default_Model_Mtintuc();
	    session_start();	
	}
	
	function setForm()
	{
		$form=new Zend_Form;
			 
		$form->setMethod('post')->setAction('');
			
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
		$reader_id = $this->_request->getParam('readerId');
		$comment_content = $this->_request->getPost('comment_content');
		$this->mTintuc->insertComment($reader_id,$news_id,$comment_content);
		$this->_redirect($this->view->baseUrl().'/../tintuc/detail/'.$news_id);
	}	
	
	function detailAction()
	{
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
<<<<<<< .mine
		
		if(!isset($_SESSION['success']))
=======
		
		
		$listquangcao = $this->mDefault->getListAds();
		$this->view->listquangcao=$listquangcao;
		/*
		$str = $news['news_summary'];
		//echo $str;die();
		//$str = "<info>abc123</info>";
		$ret = preg_match('#<br>.*</a>#',$str,$match);
		if($ret>0)
>>>>>>> .r845
		{
			$form = $this->setForm();
			$this->view->form = $form;
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
						//echo $pass_word;die();
						if($pass_word == $pass_word_forum)	
						{
							//echo ' abc';die();
							$_SESSION['success'] = $user_name;
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
			}
		}
		
		
	}
	
	function logoutAction()
	{
		session_destroy();
		$this->_redirect($this->view->baseUrl().'/../tintuc/list/categoryId/1');
	}
	
	function listAction()
	{
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
		//var_dump($listquangcao);die();
		$this->view->listHotNews = $this->mDefault->getListHotNews();
		$this->view->listNewsMostView = $this->mDefault->getListMostView();
		$this->view->listHotNewsJs = $this->mDefault->getListHotNewsJs();
		
		$listParents=$this->mTintuc->getListParent();
		$this->view->listParent = $listParents;
		$listChild=$this->mTintuc->getListChild();
		$this->view->listChild = $listChild;
	}
}
