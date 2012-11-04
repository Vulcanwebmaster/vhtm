<?php
class TimkiemController extends Zend_Controller_Action
{
	private $mTimkiem, $mVideo;
	private $mDefault;
	private $mTintuc, $mDiachi;
	
	function init()
	{
		@session_start();
		$this->setAccess();
		$_SESSION['home'] = 'home';
		$_SESSION['page'] = 'tintuc';
		$_SESSION['page'] = 'video';
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/switch_news.js',"text/javascript");

		$layoutPath = APPLICATION_PATH  . '/templates/front';
		$option = array ('layout' => 'index', 
                   'layoutPath' => $layoutPath );
		Zend_Layout::startMvc ( $option );
		$this->mTimkiem=new Default_Model_Mtimkiem();
		$this->mDefault=new Default_Model_Mdf();
		$this->mTintuc=new Default_Model_Mtintuc();
		$this->mDiachi=new Default_Model_Mdiachi();
		$this->mVideo = new Default_Model_Mvideo();
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
			
			$this->view->listdiachi = $this->mDiachi->getListDiachi();
			$this->view->listlienhe = $this->mDiachi->getListLienhe();
			$this->view->listHotNews=$this->mDefault->getListHotNews();
			$this->view->listNewsMostView = $this->mDefault->getListMostView();
			$this->view->listHotNewsJs = $this->mDefault->getListHotNewsJs();
						//Lấy ra ảnh quảng cáo ngẫu nhiên
		$listquangcao = $this->mDefault->getListAds();
		
		$listquangcao1 = $this->mDefault->getListAds1();
		$listquangcao2 = $this->mDefault->getListAds2();
		$listquangcao3 = $this->mDefault->getListAds3();
		$listquangcao4 = $this->mDefault->getListAds4();
		//var_dump($listquangcao3);die();
		$this->view->listquangcao = $listquangcao;
		$this->view->listquangcao1 = $listquangcao1;
		$this->view->listquangcao2 = $listquangcao2;
		$this->view->listquangcao3 = $listquangcao3;
		$this->view->listquangcao4 = $listquangcao4;
			
			//---------END Thêm template vào các chuyên mục----
		}
		//Header title
		$this->view->headTitle('UNC - Tìm kiếm');		
	}

	function searchvideoAction()
	{
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/switch_news.js',"text/javascript");
		if ($this->_request->isPost())
		{
			
			$value_search=$this->_request->getPost('search-text');
			$list = $this->mTimkiem->getNewsByKeyVideo($value_search);
			$this->view->listNewsMostVideo = $this->mVideo->getListMostVideo();
			$this->view->listvideo = $this->mVideo->getListNewsVideo();
			//echo count($listvideo);die();
			if(count($list) > 0)
			{
				$paginator = Zend_Paginator::factory($list);
		        $paginator->setItemCountPerPage(15);
		        $currentPage = $this->_request->getParam('page',1);
		        $paginator->setCurrentPageNumber($currentPage);
		        
		        $this->view->list = $paginator;
			}
			//---------Thêm template vào các chuyên mục----
			$listquangcao = $this->mDefault->getListAds();
			$this->view->listquangcao=$listquangcao;
			$listParents=$this->mTintuc->getListParent();
			$this->view->listParent = $listParents;
			$listChild=$this->mTintuc->getListChild();
			$this->view->listChild = $listChild;
			
//			$this->view->listNewsMostVideo = $this->mVideo->getListMostVideo();
			$this->view->listdiachi = $this->mDiachi->getListDiachi();
			$this->view->listlienhe = $this->mDiachi->getListLienhe();
			$this->view->listHotNews=$this->mDefault->getListHotNews();
			$this->view->listNewsMostView = $this->mDefault->getListMostView();
			$this->view->listHotNewsJs = $this->mDefault->getListHotNewsJs();
						//Lấy ra ảnh quảng cáo ngẫu nhiên
		$listquangcao = $this->mDefault->getListAds();
		
		$listquangcao1 = $this->mDefault->getListAds1();
		$listquangcao2 = $this->mDefault->getListAds2();
		$listquangcao3 = $this->mDefault->getListAds3();
		$listquangcao4 = $this->mDefault->getListAds4();
		//var_dump($listquangcao3);die();
		$this->view->listquangcao = $listquangcao;
		$this->view->listquangcao1 = $listquangcao1;
		$this->view->listquangcao2 = $listquangcao2;
		$this->view->listquangcao3 = $listquangcao3;
		$this->view->listquangcao4 = $listquangcao4;
			
			//---------END Thêm template vào các chuyên mục----
		}
		//Header title
		$this->view->headTitle('UNC - Tìm kiếm video');
	}
}
