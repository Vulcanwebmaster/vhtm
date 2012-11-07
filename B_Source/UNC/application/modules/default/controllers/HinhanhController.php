<?php
class HinhanhController extends Zend_Controller_Action
{
	protected $mDefault,$mTintuc,$mHinhanh, $mDiachi;
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
	}
	
	function indexAction()
	{
		$this->view->listImageRight = $this->mHinhanh->getListImageRight();
		$this->view->listImageLeft = $this->mHinhanh->getListImageLeft();
		$this->view->listCategory = $this->mHinhanh->getListCategory();
		$this->view->listdiachi = $this->mDiachi->getListDiachi();
		$this->view->listlienhe = $this->mDiachi->getListLienhe();
	}
	function listAction()
	{
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/switch_news.js',"text/javascript");
		
		$this->view->listParent = $this->mTintuc->getListParent();
		$this->view->listChild = $this->mTintuc->getListChild();	
		$this->view->current_category=array('category_name'=>'Hinhanh');
		//var_dump($this->mVideo->getVideoByCategoryId('1'));die();
		
		$this->view->listImageRight = $this->mHinhanh->getListImageRight();
		$this->view->listThread = $this->listThreadTitle;
		$this->view->menuvideo = $this->mVideo->getVideoByCategoryName();
		
		//------Gọi ra  Hình ảnh---------
		$category_id = $this->_request->getParam('category_id');
		if ($category_id != 0)
			$paginator = Zend_Paginator::factory($this->mVideo->getVideoByCategoryId($category_id));
		else 
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
}
?>
