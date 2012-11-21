<?php
class HinhanhController extends Zend_Controller_Action
{
	protected $mDefault,$mTintuc,$mHinhanh, $mDiachi;
	private $listThreadTitle;
	function init()
	{
		$layoutPath = APPLICATION_PATH  . '/templates/front';
	    $option = array ('layout' => 'index', 
	                  'layoutPath' => $layoutPath);
	    Zend_Layout::startMvc ($option);
		
		$this->mDefault = new Default_Model_Mdf();
		$this->mTintuc = new Default_Model_Mtintuc();
		$this->mHinhanh = new Default_Model_Mhinhanh();
		$this->mDiachi = new Default_Model_Mdiachi();
		
		@session_start();
		$_SESSION['page'] = 'hinhanh';
		$this->view->headTitle('UNC - Hình ảnh');
	}
	
	function listAction()
	{
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/switch_news.js',"text/javascript");
		
		$this->view->listParent = $this->mTintuc->getListParent();
		$this->view->listChild = $this->mTintuc->getListChild();	
		$this->view->current_category=array('category_name'=>'Hình ảnh');
		
		$this->view->listImageRight = $this->mHinhanh->getListImageRight();
		$this->view->listCategory = $this->mHinhanh->getListCategory();
		$this->view->listdiachi = $this->mDiachi->getListDiachi();
		$this->view->listlienhe = $this->mDiachi->getListLienhe();
		
		//------Gọi ra  Hình ảnh---------
		$category_id = $this->_request->getParam('category_id');
		if ($category_id != 0)
			$paginator = Zend_Paginator::factory($this->mHinhanh->getImagesByCategoryId($category_id));
		else 
			$paginator = Zend_Paginator::factory($this->mHinhanh->getListImagesAll());
        $paginator->setItemCountPerPage(25);
        $currentPage = $this->_request->getParam('page',1);
        $paginator->setCurrentPageNumber($currentPage);
		$this->view->listImageLeft = $paginator;
					//Lấy ra ảnh quảng cáo ngẫu nhiên
		$listquangcao = $this->mDefault->getListAds();
		
		//===== Social Network ==============================================
		$this->view->facebook = $this->mDiachi->getRecordByName('facebook');
		$this->view->twitter = $this->mDiachi->getRecordByName('twitter');
		//===================================================================
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
		
		//=== set current category ============
		$this->view->current_category_id=$category_id;
	}
}
