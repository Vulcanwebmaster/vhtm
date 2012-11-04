<?php
class VideoController extends Zend_Controller_Action
{
	protected $mTintuc, $mDiachi;
	protected $mDefault;
	protected $mVideo;
	function init()
	{
		$layoutPath = APPLICATION_PATH  . '/templates/front';
	    $option = array ('layout' => 'index', 
	                  'layoutPath' => $layoutPath);
	    Zend_Layout::startMvc ($option);
		
		$this->mDefault = new Default_Model_Mdf();
		$this->mTintuc = new Default_Model_Mtintuc();
		$this->mVideo = new Default_Model_Mvideo();
		$this->mDiachi = new Default_Model_Mdiachi();
		@session_start();
		$this->setAccess();
		$_SESSION['home'] = 'home';
		$_SESSION['page'] = 'video';
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/switch_news.js',"text/javascript");
	
		unset($_SESSION['home']);
	}
	
	function listAction()
	{
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/switch_news.js',"text/javascript");
		
		$this->view->listHotNews = $this->mDefault->getListHotNews();
		$this->view->listNewsMostView = $this->mDefault->getListMostView();
		$this->view->listHotNewsJs = $this->mDefault->getListHotNewsJs();
		$this->view->listParent = $this->mTintuc->getListParent();
		$this->view->listChild = $this->mTintuc->getListChild();	
		$this->view->current_category=array('category_name'=>'Video');
		
		$this->view->listNewsMostVideo = $this->mVideo->getListMostVideo();
		$this->view->listvideo = $this->mVideo->getListNewsVideo();
		//var_dump($this->listvideo);die();
		$paginator = Zend_Paginator::factory($this->mVideo->getListVideo());
        $paginator->setItemCountPerPage(12);
        $currentPage = $this->_request->getParam('page',1);
        $paginator->setCurrentPageNumber($currentPage);
		$this->view->list = $paginator;
					//Lấy ra ảnh quảng cáo ngẫu nhiên
		$listquangcao = $this->mDefault->getListAds();

		$this->view->listdiachi = $this->mDiachi->getListDiachi();
		$this->view->listlienhe = $this->mDiachi->getListLienhe();
		$listquangcao1 = $this->mDefault->getListAds1();
		$listquangcao2 = $this->mDefault->getListAds2();
		$listquangcao3 = $this->mDefault->getListAds3();
		$listquangcao4 = $this->mDefault->getListAds4();
		$this->view->listquangcao = $listquangcao;
		$this->view->listquangcao1 = $listquangcao1;
		$this->view->listquangcao2 = $listquangcao2;
		$this->view->listquangcao3 = $listquangcao3;
		$this->view->listquangcao4 = $listquangcao4;

		$this->view->listquangcao = $listquangcao;
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
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/switch_news.js',"text/javascript");
		
		$this->view->listHotNews = $this->mDefault->getListHotNews();
		$this->view->listNewsMostView = $this->mDefault->getListMostView();
		$this->view->listHotNewsJs = $this->mDefault->getListHotNewsJs();
		$this->view->current_category=array('category_name'=>'Video');
		
		$video_id = $this->_request->getParam('videoid');
		$this->view->video = $this->mVideo->getVideoByVideoId($video_id);
		
		$this->view->listNewsMostVideo = $this->mVideo->getListMostVideo();
		$this->view->listvideo = $this->mVideo->getListNewsVideo();
		$listComment = $this->mVideo->getListCommentByVideoId($video_id);
		$listForumUser = $this->mVideo->getListForumUser();
		
		$listImage = array();
		$listAvatar = $this->mVideo->getListAvatar();
		
		$form = $this->setForm($video_id);
		$listquangcao = $this->mDefault->getListAds();
		$listParents = $this->mTintuc->getListParent();
		$listChild = $this->mTintuc->getListChild();
					//Lấy ra ảnh quảng cáo ngẫu nhiên
		$listquangcao1 = $this->mDefault->getListAds1();
		$listquangcao2 = $this->mDefault->getListAds2();
		$listquangcao3 = $this->mDefault->getListAds3();
		$listquangcao4 = $this->mDefault->getListAds4();
		$this->view->listquangcao1 = $listquangcao1;
		$this->view->listquangcao2 = $listquangcao2;
		$this->view->listquangcao3 = $listquangcao3;
		$this->view->listquangcao4 = $listquangcao4;

		$this->view->listImage = $listImage;
		$this->view->listParent = $listParents;
		$this->view->listChild = $listChild;
		$this->view->listquangcao = $listquangcao;
		$this->view->form = $form;
		$this->view->listComment = $listComment;
		
		/*$paginator = Zend_Paginator::factory($this->mVideo->getListCommentByVideoId($video_id));
	    $paginator->setItemCountPerPage(5);        
	    $currentPage = $this->_request->getParam('page',1);
	    $paginator->setCurrentPageNumber($currentPage);
		
		$this->view->listComment = $paginator;*/
	}
	
	function checkSql($data) 
	{
		//$data = trim(htmlentities(strip_tags($data)));
		
		if (get_magic_quotes_gpc()) 
			$data = stripslashes($data);
		
		$data = mysql_real_escape_string($data);
		
		return $data;
	}
	
	function addcommentAction()
	{
		echo '<meta charset="UTF-8"/>';
		
		$video_id = $this->_request->getParam('videoid');
		$name = $this->_request->getPost('name');
		$email = $this->_request->getPost('email');
		
		$comment_content = $this->_request->getPost('comment_content');
		$comment_content = trim($comment_content);
		$comment_content = $this->checkSql($comment_content);
		
		if($comment_content == "")
		{
			$_SESSION['fail'] = 'Vui lòng nhập nội dung bình luận !';
		}
		else if($comment_content != "")
		{
			if(strlen($comment_content) > 700)
				$_SESSION['fail'] = 'Nội dung bình luận giới hạn 700 kí tự, vui lòng thử lại !';
			else
				$this->mVideo->insertComment($name,$email,$video_id,$comment_content);
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
	