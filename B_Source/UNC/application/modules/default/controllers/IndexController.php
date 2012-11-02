<?php
class IndexController extends Zend_Controller_Action
{
	protected $mDefault, $mVideo, $mDiachi;
	protected $mTintuc;
	protected $listThreadTitle;
	public function init()
	{
		$layoutPath = APPLICATION_PATH  . '/templates/front';
	    $option = array ('layout' => 'index', 
	                  'layoutPath' => $layoutPath );
	    Zend_Layout::startMvc ( $option );
	      
		@session_start();
		$this->mVideo=new Default_Model_Mvideo();
	    $this->mDefault=new Default_Model_Mdefault();
		$this->mTintuc = new Default_Model_Mtintuc();
		$this->mDiachi = new Default_Model_Mdiachi();
		$this->setAccess();
		$_SESSION['home'] = 'home';
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/switch_news.js',"text/javascript");
	
		$listThreadForum = $this->mDefault->getListThread();
		$this->listThreadTitle = array();
		foreach($listThreadForum as $thread)
		{
			$content = file_get_contents('http://localhost/unc/forum/showthread.php?'.$thread['threadid']);
			$preg1 = preg_match_all('#<span class="threadtitle">.*</span>#',$content,$match);
			$this->listThreadTitle[] = $thread['threadid'].strip_tags($match[0][0]);
		}
	}

	public function indexAction()
	{
		$this->view->listThread = $this->listThreadTitle;
		
		$this->view->listVideo=$this->mDefault->getListVideoByLimit(4);
		$this->view->listHotNews = $this->mDefault->getListHotNews();
		$this->view->listHotNewsJs = $this->mDefault->getListHotNewsJs();
		$this->view->listNewsMostView = $this->mDefault->getListMostView();
		$this->view->listNewsMostVideo = $this->mVideo->getListMostVideo();
		$this->view->listdiachi = $this->mDiachi->getListDiachi();
		$this->view->listlienhe = $this->mDiachi->getListLienhe();
		$this->view->listvanmieu = $this->mDiachi->getListVanmieu();
		$this->view->listvomieu = $this->mDiachi->getListVomieu();
		$listParents=$this->mTintuc->getListParent();
		$this->view->listParent = $listParents;
		$listChild=$this->mTintuc->getListChild();
		$this->view->listChild = $listChild;
		
		
		$listNews=array();
		foreach ($listParents as $parent)
		{
			$listNews[$parent['category_id']]=$this->mTintuc->getTinTuc($parent['category_id']);
		}
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

		$this->view->listNews = $listNews;

		$this->view->listNews = $listNews;

	}


}