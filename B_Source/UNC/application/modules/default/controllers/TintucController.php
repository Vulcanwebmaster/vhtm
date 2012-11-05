<?php
class TintucController extends Zend_Controller_Action
{
	protected $mTintuc, $mDiachi;
	protected $mDefault;
	protected $listThreadTitle;
	
	function init()
	{
		//session_start();
		$layoutPath = APPLICATION_PATH  . '/templates/front';
	    $option = array ('layout' => 'index', 
	                  'layoutPath' => $layoutPath);
	    Zend_Layout::startMvc ($option);
	    $this->mDefault = new Default_Model_Mdf();
		$this->mTintuc = new Default_Model_Mtintuc();
		$this->mDiachi = new Default_Model_Mdiachi();
		$this->setAccess();
		unset($_SESSION['home']);
		$_SESSION['page'] = 'tintuc';
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/switch_news.js',"text/javascript");
		$_SESSION['page'] ='tintuc';
		$listThreadForum = $this->mDefault->getListThread();
		$this->listThreadTitle = array();
		//var_dump($listThreadForum);die();
		foreach($listThreadForum as $thread)
		{
			$content = file_get_contents('http://localhost/unc/forum/showthread.php?'.$thread['threadid']);
			$preg1 = preg_match_all('#<span class="threadtitle">.*</span>#',$content,$match);
			$this->listThreadTitle[] = $thread['threadid'].strip_tags($match[0][0]);
		}
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
		$form = $this->setForm();
		if($form->isValid($_POST)){
			$comment_captcha = $this->_request->getPost('comment_captcha');
			if($this->isCaptchaValid($comment_captcha)){
				//echo 'Ngon !';die();
				$input = array(
						'comment_name'		=> $this->_request->getPost('comment_name'),
						'comment_email'		=> $this->_request->getPost('comment_email'),
						'comment_content'	=> $this->_request->getPost('comment_content')
						);
				$this->mTintuc->insertComment($this->_request->getParam('newid'),$input);
				$_SESSION['addComment'] = 'Gửi bình luận thành công';
			}
			else{
				$_SESSION['addComment'] = 'Hình ảnh xác nhận không chính xác';
			}
		}
		else {
			$_SESSION['addComment'] = 'Vui lòng nhập đầy đủ thông tin';
		}
		$this->_redirect($_SERVER['HTTP_REFERER']);	
	}	
	
	function isCaptchaValid($captcha)
	{
		$capId = $captcha['id']; 
        $capInput = $captcha['input']; 
        $capSession = new Zend_Session_Namespace('Zend_Form_Captcha_'.$capId); 
        $capWord = $capSession->getIterator(); 
        if(isset($capWord['word']) && $capWord['word'] == $capInput){ 
            return TRUE; 
        }else{ 
            return FALSE; 
        } 
	}
	
	function setForm()
	{
		$form = new Zend_Form;
		$form->setMethod('post')->setAction('');
		
		$comment_name = new Zend_Form_Element_Text('comment_name');
		$comment_name->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Vui lòng nhập tên người gửi !'));
		$comment_name->setAttrib('class','n');
		$comment_name->setAttrib("onfocus","if (this.value == 'Nhập tên của bạn') {this.value = '';}");
		$comment_name->setAttrib("onblur","if (this.value == '') {this.value = 'Nhập tên của bạn';}");
		$comment_name->setValue("Nhập tên của bạn");
		
		$comment_email = new Zend_Form_Element_Text('comment_email');
		$comment_email->addValidator('EmailAddress',true,array('messages'=>'Địa chỉ email không hợp lệ'));
		$comment_email->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Vui lòng nhập địa chỉ email !'));
		$comment_email->setAttrib('class','e');
		$comment_email->setAttrib('onfocus',"if (this.value == 'Nhập địa chỉ email của bạn') {this.value = '';}");
		$comment_email->setAttrib('onblur',"if (this.value == '') {this.value = 'Nhập địa chỉ email của bạn';}");
		$comment_email->setValue('Nhập địa chỉ email của bạn');
		
		$comment_content = new Zend_Form_Element_Textarea('comment_content');
		$comment_content->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Vui lòng nhập nội dung bình luận!'));
		$comment_content->setAttrib('class','m');
		$comment_content->setAttrib('onfocus',"if (this.value == 'Nhập nội dung bình luận') {this.value = '';}");
		$comment_content->setAttrib('onblur',"if (this.value == '') {this.value = 'Nhập nội dung bình luận';}");
		$comment_content->setValue('Nhập nội dung bình luận');
		
		$comment_captcha = new Zend_Form_Element_Captcha('comment_captcha',array( 
                            'label' => 'Captcha_image', 
                             'captcha' => array( 
                                    'captcha' => 'Image', 
                                    'wordLen' => 6, 
                                    'timeout' => 300, 
                                    'font' => APPLICATION_PATH.'/templates/front/fonts/tiennd.TTF', 
                                    'imgDir' => APPLICATION_PATH.'/templates/front/captcha/', 
                                    'imgUrl' => $this->view->baseUrl().'/application/templates/front/captcha/', 
                                    'height' => 100, 
                                    'width' => 200, 
                                    'fontSize' => 50, 
                                ), 
        ));
        $comment_captcha->setAttrib('class','captcha_image1');
        $comment_captcha->setAttrib('onfocus',"if (this.value == 'Nhập hình ảnh xác nhận') {this.value = '';}");
		$comment_captcha->setAttrib('onblur',"if (this.value == '') {this.value = 'Nhập hình ảnh xác nhận';}");
        $comment_captcha->setValue('Nhập hình ảnh xác nhận');
		
		$comment_name->removeDecorator('HtmlTag')->removeDecorator('Label');
		$comment_email->removeDecorator('HtmlTag')->removeDecorator('Label');
		$comment_content->removeDecorator('HtmlTag')->removeDecorator('Label');
		$comment_captcha->removeDecorator('HtmlTag')->removeDecorator('Label');
		
		$form->addElements(array($comment_name,$comment_email,$comment_content,$comment_captcha));
		return $form;
	}
	
	function detailAction()
	{
		$form = $this->setForm();
		$news_id = $this->_request->getParam('newsid');
		$this->view->news_id = $news_id;
		$news = $this->mTintuc->getNewsByNewsId($news_id);
		$categoryid = $this->mTintuc->getCategoryIdByNewsId($news_id);
		// Get first categoryid in list 
		$first_categoryid = $this->mTintuc->getFirstCategoryIdByNewsId($news_id);
		
		$this->view->current_category=$this->mTintuc->getCategoryNameByCategoryId($categoryid);
		
		$parentId = $this->mTintuc->getParentByChild($categoryid);
		$this->view->child = $this->mTintuc->getCategoryNameByCategoryId($categoryid);
		$this->view->parent = $this->mTintuc->getCategoryNameByCategoryId($parentId);
		
		$this->view->listNewestNews = $this->mTintuc->getNewestNews();
		$this->view->listNewsPosted = $this->mTintuc->getNewsPosted($categoryid);
		
		// Get Relate News with first category id of news
		$this->view->listNewsRelate = $this->mTintuc->getNewsRelate($first_categoryid);
		
		$this->view->listHotNews = $this->mDefault->getListHotNews();
		$this->view->listNewsMostView = $this->mDefault->getListMostView();
		$this->view->listHotNewsJs = $this->mDefault->getListHotNewsJs();
		$this->view->listdiachi = $this->mDiachi->getListDiachi();
		$this->view->listlienhe = $this->mDiachi->getListLienhe();
		$this->view->news = $news;

		$listParents = $this->mTintuc->getListParent();
		$this->view->listParent = $listParents;
		$listChild = $this->mTintuc->getListChild();

		$this->view->listChild = $listChild;
		
		//Lấy ra ảnh quảng cáo ngẫu nhiên
		$this->view->listquangcao1 = $this->mDefault->getListAds1();
		$this->view->listquangcao2 = $this->mDefault->getListAds2();
		$this->view->listquangcao3 = $this->mDefault->getListAds3();
		$this->view->listquangcao4 = $this->mDefault->getListAds4();

		$listquangcao = $this->mDefault->getListAds();
		$this->view->listquangcao = $listquangcao;
		
		
		$this->view->listComment = $this->mTintuc->getCommentByNewsId($news_id);
		$this->view->listThread = $this->listThreadTitle;
		$this->view->form = $form;
		
		$mask = APPLICATION_PATH."/templates/front/captcha/*.png"; 
        array_map("unlink",glob($mask));
		
		//Header title
		$this->view->headTitle('UNC - '.$news['news_title']);
		if($this->_request->isPost())
		{
			if($form->isValid($_POST)){
				$comment_captcha = $this->_request->getPost('comment_captcha');
				$news_id_comment = $this->_request->getPost('news_id_commented');
				$comment_time = gmdate('Y-m-d h:i:s',time() + 7*3600);
				$input = array(
						'comment_name'		=> $form->getValue('comment_name'),
						'reader_email'		=> $form->getValue('comment_email'),
						'comment_time'		=> $comment_time,
						'news_id'			=> $news_id_comment,
						'comment_content'	=> $form->getValue('comment_content')
				);
				//var_dump($input);die();
				$this->mTintuc->insertComment($input);
				$_SESSION['addComment'] = 'Gửi bình luận thành công';
				$this->_redirect($_SERVER['HTTP_REFERER']);	
			}
		}
		
	}
	
	
	function timkiemAction()
	{
		//Lấy ra ảnh quảng cáo ngẫu nhiên
		$listquangcao1 = $this->mDefault->getListAds1();
		$listquangcao2 = $this->mDefault->getListAds2();
		$listquangcao3 = $this->mDefault->getListAds3();
		$listquangcao4 = $this->mDefault->getListAds4();
		$this->view->listquangcao1 = $listquangcao1;
		$this->view->listquangcao2 = $listquangcao2;
		$this->view->listquangcao3 = $listquangcao3;
		$this->view->listquangcao4 = $listquangcao4;

		$this->view->listquangcao = $this->mDefault->getListAds();
		$this->view->listHotNews = $this->mDefault->getListHotNews();
		$this->view->listNewsMostView = $this->mDefault->getListMostView();
		$this->view->listHotNewsJs = $this->mDefault->getListHotNewsJs();
		$this->view->listParent = $this->mTintuc->getListParent();
		$this->view->listChild = $this->mTintuc->getListChild();
		$this->view->listdiachi = $this->mDiachi->getListDiachi();
		$this->view->listlienhe = $this->mDiachi->getListLienhe();
		
		if($this->_request->isPost())
		{
			$_SESSION['start_time'] = $this->_request->getPost('start_time');
			$_SESSION['end_time'] = $this->_request->getPost('end_time');
		}
		
		if(isset($_SESSION['start_time']))
		{
			$listNews = $this->mTintuc->getListNewsByDate($_SESSION['start_time'],$_SESSION['end_time']);
			$paginator = Zend_Paginator::factory($listNews);
			$paginator->setItemCountPerPage(5);        
			$currentPage = $this->_request->getParam('page',1);
			$paginator->setCurrentPageNumber($currentPage);
					
			$this->view->list = $paginator;
		}
		//Header title
		$this->view->headTitle('UNC - Tìm kiếm tin tức');		
	}
	
	function listAction()
	{
		//var_dump($this->listThreadTitle);die();
		$this->view->listThread = $this->listThreadTitle;
		$categoryid = $this->_request->getParam('categoryId');
		$this->view->categoryid = $categoryid;
		$this->view->current_parent=$this->mTintuc->getParentByChild($categoryid);
		$is_parent = 0;
		
		if($this->mTintuc->isParent($categoryid))
		{
			$is_parent = 1;
			$listCategoryId = $this->mTintuc->getListChildByParent($categoryid);
			$listHot = array();
			$listHotNews = $this->mTintuc->getListHotNews();
			foreach($listHotNews as $hotNews)
			{
				$check = 0;
				foreach($listCategoryId as $categoryId)
				{
					if($hotNews['category_id'] == $categoryId['category_id'])
					{
						$check = 1;break;
					}
				}
				if($check == 1) $listHot[] = $hotNews;
			}
			
			$list = array();
			$listNews = $this->mTintuc->getListNews();
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
			
			$this->view->listHotNews = $listHot;
		}
		else 
		{
			$list = $this->mTintuc->getListNewsByCategoryId($categoryid);
			$listquangcao = $this->mTintuc->getListAdsByCategoryId($categoryid);
			$this->view->listHotNews = $this->mDefault->getListHotNews();
		}
		
		$this->view->is_parent = $is_parent;
		$paginator = Zend_Paginator::factory($list);
        $paginator->setItemCountPerPage(8);        
        $currentPage = $this->_request->getParam('page',1);
        $paginator->setCurrentPageNumber($currentPage);
        
		if($is_parent == "1") 
		{
			$this->view->parent = $this->mTintuc->getCategoryNameByCategoryId($categoryid);
		}
		else 
		{
			$parentId = $this->mTintuc->getParentByChild($categoryid);
			$this->view->child = $this->mTintuc->getCategoryNameByCategoryId($categoryid);
			$this->view->parent = $this->mTintuc->getCategoryNameByCategoryId($parentId);
		}		
		
		$this->view->current_category=$this->mTintuc->getCategoryNameByCategoryId($categoryid);
		$parent_current_category_id=$this->mTintuc->getParentByChild($categoryid);
		$this->view->parent_current_category=$this->mTintuc->getCategoryNameByCategoryId($parent_current_category_id);
        $this->view->list = $paginator;
		$this->view->listquangcao = $listquangcao;
		
		$this->view->listNewsMostView = $this->mDefault->getListMostView();
		$this->view->listHotNewsJs = $this->mDefault->getListHotNewsJs();
		
		$this->view->listParent = $this->mTintuc->getListParent();
		$this->view->listChild = $this->mTintuc->getListChild();
		$this->view->listdiachi = $this->mDiachi->getListDiachi();
		$this->view->listlienhe = $this->mDiachi->getListLienhe();
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
		//echo $this->_request->getParam('page');die();
		$this->view->listThread = $this->listThreadTitle;
		
		//Header title
		$this->view->headTitle('UNC - '.$this->view->current_category['category_name']);		
	}

	function logoutAction()
	{
		session_destroy();
		$this->_redirect($_SERVER['HTTP_REFERER']);
	}
	
}
