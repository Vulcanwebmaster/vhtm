<?php
class TimkiemController extends Zend_Controller_Action
{
	private $mTimkiem;
	private $mDefault;
	private $mTintuc;
	function init()
	{
		@session_start();
		$this->setAccess();
		$_SESSION['home'] = 'home';
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/switch_news.js',"text/javascript");

		$layoutPath = APPLICATION_PATH  . '/templates/front';
		$option = array ('layout' => 'index', 
                   'layoutPath' => $layoutPath );
		Zend_Layout::startMvc ( $option );
		$this->mTimkiem=new Default_Model_Mtimkiem();
		$this->mDefault=new Default_Model_Mdefault();
		$this->mTintuc=new Default_Model_Mtintuc();
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/switch_news.js',"text/javascript");
	}
	
	function indexAction()
	{
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/tiennd.js',"text/javascript");
		if ($this->_request->isPost())
		{
			
			$value_search=$this->_request->getPost('search-text');
			$list=$this->mTimkiem->getNewsByKey($value_search);
			
			$paginator = Zend_Paginator::factory($list);
	        $paginator->setItemCountPerPage(15);        
	        $currentPage = $this->_request->getParam('page',1);
	        $paginator->setCurrentPageNumber($currentPage);
	        
	        $this->view->list=$paginator;
        
			//---------Thêm template vào các chuyên mục----
			$listquangcao = $this->mDefault->getListAds();
			$this->view->listquangcao=$listquangcao;
			
			$listParents=$this->mTintuc->getListParent();
			$this->view->listParent = $listParents;
			$listChild=$this->mTintuc->getListChild();
			$this->view->listChild = $listChild;
			
			$this->view->listHotNews=$this->mDefault->getListHotNews();
			$this->view->listNewsMostView = $this->mDefault->getListMostView();
			$this->view->listHotNewsJs = $this->mDefault->getListHotNewsJs();
			//---------END Thêm template vào các chuyên mục----
		}
	}

	function searchvideoAction()
	{
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/switch_news.js',"text/javascript");
		if ($this->_request->isPost())
		{
			
			$value_search=$this->_request->getPost('search-text');
			$listvideo = $this->mTimkiem->getNewsByKeyVideo($value_search);
			//echo count($listvideo);die();
			if(count($listvideo) > 0)
			{
				$paginator = Zend_Paginator::factory($listvideo);
		        $paginator->setItemCountPerPage(15);
		        $currentPage = $this->_request->getParam('page',1);
		        $paginator->setCurrentPageNumber($currentPage);
		        
		        $this->view->listvideo = $paginator;
			}
			//---------Thêm template vào các chuyên mục----
			$listquangcao = $this->mDefault->getListAds();
			$this->view->listquangcao=$listquangcao;
			
			$listParents=$this->mTintuc->getListParent();
			$this->view->listParent = $listParents;
			$listChild=$this->mTintuc->getListChild();
			$this->view->listChild = $listChild;
			
//			$this->view->listNewsMostVideo = $this->mVideo->getListMostVideo();
	//		$this->view->listvideo = $this->mVideo->getListNewsVideo();
			$this->view->listHotNews=$this->mDefault->getListHotNews();
			$this->view->listNewsMostView = $this->mDefault->getListMostView();
			$this->view->listHotNewsJs = $this->mDefault->getListHotNewsJs();
			//---------END Thêm template vào các chuyên mục----
		}
	}
}
