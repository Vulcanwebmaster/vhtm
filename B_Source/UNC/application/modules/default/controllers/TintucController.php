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
		$this->setAccess();
		unset($_SESSION['home']);
	}
	
	function setForm1()
	{
		$form1 = new Zend_Form;
		$form1->setMethod('post')->setAction('');
			
		$start_time = new Zend_Form_Element_Text('start_time');
		$start_time->setAttrib('class',"datepicker");
		$start_time->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Vui lòng nhập ngày bắt đầu !'));
		
		$end_time = new Zend_Form_Element_Text('start_time');
		$end_time->setAttrib('class',"datepicker");
		$end_time->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Vui lòng nhập ngày kết thúc !'));
		
		$start_time->removeDecorator('HtmlTag')->removeDecorator('Label');
		$end_time->removeDecorator('HtmlTag')->removeDecorator('Label');
		$form1->addElement($start_time,$end_time);
		return $form1;
	}
	
	function setForm($news_id)
	{
		$form = new Zend_Form;
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
	
	function maHoaVbb()
	{
		$password = "thuanthanh";
		$password_salt = "'Yyfu5C>tPn7-a-M6M_O:(78p746&/";
		echo md5(md5($password).$password_salt) ;die();
		$user = $this->mTintuc->getUserByUserId(2);
		var_dump($user);die();
	}
	
	function checkSql($data) 
	{
		$data = trim(htmlentities(strip_tags($data)));
		
		if (get_magic_quotes_gpc()) 
			$data = stripslashes($data);
		
		$data = mysql_real_escape_string($data);
		
		return $data;
	}
	
	function addcommentAction()
	{
		$news_id = $this->_request->getParam('newsid');
		$reader_id = $this->_request->getParam('readerid');
		
		$comment_content = $this->_request->getPost('comment_content');
		$comment_content = $this->checkSql($comment_content);
		
		if($comment_content == "")
		{
			$_SESSION['fail'] = 'Vui lòng nhập nội dung bình luận !';
		}
		else if($comment_content != "")
		{
			if(strlen($comment_content) > 600)
				$_SESSION['fail'] = 'Nội dung bình luận giới hạn 600 kí tự, vui lòng thử lại !';
			else
			{
				if(!$this->mTintuc->insertComment($reader_id,$news_id,$comment_content))
				{
					$_SESSION['fail'] = 'Không thể chèn nội dung bình luận !';
				}
			}
		}
		$this->_redirect($_SERVER['HTTP_REFERER']);	
	}	
	
	function loginAction()
	{
		$news_id = $this->_request->getParam('newsid');
		//echo $news_id;die();
		$form = $this->setForm($news_id);
		
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
	
	function detailAction()
	{
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/switch_news.js',"text/javascript");
		
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

		$listImage = array();
		$listAvatar = $this->mTintuc->getListAvatar();
		foreach($listUser as $user)
		{
			$count = 0;
			foreach($listAvatar as $avatar)
			{
				if($avatar['userid'] == $user['userid'])
				{
					$count = 1;break;
				}
			}
			if($count == 1) $listImage[] = $avatar['dateline'];
				else $listImage[] = 0;
		}
		$this->view->listImage = $listImage;
		$this->view->listUser = $listUser;
		
		$listParents = $this->mTintuc->getListParent();
		$this->view->listParent = $listParents;
		$listChild=$this->mTintuc->getListChild();

		$this->view->listChild = $listChild;
		
					//Lấy ra ảnh quảng cáo ngẫu nhiên
		$listquangcao1 = $this->mDefault->getListAds1();
		$listquangcao2 = $this->mDefault->getListAds2();
		$listquangcao3 = $this->mDefault->getListAds3();
		$listquangcao4 = $this->mDefault->getListAds4();
		$this->view->listquangcao = $listquangcao;
		$this->view->listquangcao1 = $listquangcao1;
		$this->view->listquangcao2 = $listquangcao2;
		$this->view->listquangcao3 = $listquangcao3;
		$this->view->listquangcao4 = $listquangcao4;

		$listquangcao = $this->mDefault->getListAds();
		$this->view->listquangcao=$listquangcao;
		$this->view->video_default = $this->mDefault->getVideoDefault();
		$form = $this->setForm($news_id);
		$this->view->form = $form;
	}
	
	function timkiemAction()
	{
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/switch_news.js',"text/javascript");
					//Lấy ra ảnh quảng cáo ngẫu nhiên
		$listquangcao1 = $this->mDefault->getListAds1();
		$listquangcao2 = $this->mDefault->getListAds2();
		$listquangcao3 = $this->mDefault->getListAds3();
		$listquangcao4 = $this->mDefault->getListAds4();
		$this->view->listquangcao1 = $listquangcao1;
		$this->view->listquangcao2 = $listquangcao2;
		$this->view->listquangcao3 = $listquangcao3;
		$this->view->listquangcao4 = $listquangcao4;

		$this->view->listquangcao = $listquangcao;
		$this->view->listquangcao = $this->mDefault->getListAds();
		$this->view->listHotNews = $this->mDefault->getListHotNews();
		$this->view->listNewsMostView = $this->mDefault->getListMostView();
		$this->view->listHotNewsJs = $this->mDefault->getListHotNewsJs();
		$this->view->listParent = $this->mTintuc->getListParent();
		$this->view->listChild = $this->mTintuc->getListChild();
		$this->view->video_default = $this->mDefault->getVideoDefault();
		
		if($this->_request->isPost())
		{
			$start_time = $this->_request->getPost('start_time');
			$end_time = $this->_request->getPost('end_time');
			
			$listNews = $this->mTintuc->getListNewsByDate($start_time,$end_time);
			$paginator = Zend_Paginator::factory($listNews);
	        $paginator->setItemCountPerPage(5);        
	        $currentPage = $this->_request->getParam('page',1);
	        $paginator->setCurrentPageNumber($currentPage);
			
	        $this->view->list = $paginator;
		}
	}
	
	function listAction()
	{
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/switch_news.js',"text/javascript");
		//echo 'abc';die();
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/switch_news.js',"text/javascript");
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
		
        $this->view->list = $paginator;
		$this->view->listquangcao = $listquangcao;
		
		$this->view->listHotNews = $this->mDefault->getListHotNews();
		
		$this->view->listNewsMostView = $this->mDefault->getListMostView();
		$this->view->listHotNewsJs = $this->mDefault->getListHotNewsJs();
		
		//$this->view->form = $this->setForm1();
		$this->view->listParent = $this->mTintuc->getListParent();
		$this->view->listChild = $this->mTintuc->getListChild();
		$this->view->video_default = $this->mDefault->getVideoDefault();
		
					//Lấy ra ảnh quảng cáo ngẫu nhiên
		$listquangcao = $this->mDefault->getListAds();
		
		$listquangcao1 = $this->mDefault->getListAds1();
		$listquangcao2 = $this->mDefault->getListAds2();
		$listquangcao3 = $this->mDefault->getListAds3();
		$listquangcao4 = $this->mDefault->getListAds4();
		$this->view->listquangcao = $listquangcao;
		$this->view->listquangcao1 = $listquangcao1;
		$this->view->listquangcao2 = $listquangcao2;
		$this->view->listquangcao3 = $listquangcao3;
		$this->view->listquangcao4 = $listquangcao4;

	}

	function logoutAction()
	{
		session_destroy();
		$this->_redirect($_SERVER['HTTP_REFERER']);
	}
	
}
