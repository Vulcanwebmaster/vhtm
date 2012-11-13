<?php
class IndexController extends Zend_Controller_Action
{
	protected $mDefault, $mVideo, $mDiachi, $mPoll, $mHinhanh;
	protected $mTintuc;
	protected $listThreadTitle;
	function init()
	{
		$layoutPath = APPLICATION_PATH  . '/templates/front';
	    $option = array ('layout' => 'index', 
	                  'layoutPath' => $layoutPath);
	    Zend_Layout::startMvc ($option);
		@session_start();
		$this->mVideo=new Default_Model_Mvideo();
	    $this->mDefault=new Default_Model_Mdf();
		$this->mTintuc = new Default_Model_Mtintuc();
		$this->mDiachi = new Default_Model_Mdiachi();
		$this->mPoll=new Default_Model_Mpoll();
		$this->mHinhanh= new Default_Model_Mhinhanh();
		
		$this->setAccess();
		$_SESSION['home'] = 'home';
		$_SESSION['page'] = 'tintuc';
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/switch_news.js',"text/javascript");
		
		$listThreadForum = $this->mDefault->getListThread();
		$this->listThreadTitle = array();
		foreach($listThreadForum as $thread)
		{
			//$content = file_get_contents('http://localhost'.$this->view->baseUrl().'/../forum/showthread.php?'.$thread['threadid']);
			$content = file_get_contents('http://localhost/unc/forum/showthread.php?'.$thread['threadid']);
			$preg1 = preg_match_all('#<span class="threadtitle">.*</span>#',$content,$match);
			if(isset($match)==0){
			$this->listThreadTitle[] = $thread['threadid'].strip_tags($match[0][0]);
			}
		}
	}

	public function indexAction()
	{
		$this->view->listImageRight = $this->mHinhanh->getListImageRight();
		$this->view->listThread = $this->listThreadTitle;
		$this->view->headTitle = "UNC - Trang chủ";
		$this->view->listVideo=$this->mDefault->getListVideoByLimit(4);
		$this->view->listHotNews = $this->mDefault->getListHotNews();
		$this->view->listHotNewsJs = $this->mDefault->getListHotNewsJs();
		$this->view->listNewsMostView = $this->mDefault->getListMostView();
		$this->view->listNewsMostVideo = $this->mVideo->getListMostVideo();
		
		//===== Social Network ==============================================
		$this->view->facebook = $this->mDiachi->getRecordByName('facebook');
		$this->view->twitter = $this->mDiachi->getRecordByName('twitter');
		//===================================================================
		$this->view->listdiachi = $this->mDiachi->getListDiachi();
		$this->view->listlienhe = $this->mDiachi->getListLienhe();
		$this->view->listvanmieu = $this->mDiachi->getListVanmieu();
		$this->view->listvomieu = $this->mDiachi->getListVomieu();
		$this->view->listcauhoi = $this->mDefault->getListPolls();
		$this->view->listtraloi = $this->mDefault->getListPolls1();
		$listParents=$this->mTintuc->getListParent();
		$this->view->listParent = $listParents;
		$listChild=$this->mTintuc->getListChild();
		$this->view->listChild = $listChild;
		$this->view->listNewsMostView=$this->mDefault->getListMostView();
		
		
		$listNews=array();
		foreach ($listParents as $parent)
		{
			$got=',';
			$listChild=$this->mTintuc->getListChildByParent($parent['category_id']);
			$listChildNews=array();
			foreach ($listChild as $child)
			{
				$newlist=$this->mTintuc->getListNewsByCategoryId($child['category_id']);
				foreach($newlist as $newNews)
				{
					if (strpos($got, ','.$newNews['news_id'].',')===false)
					{
						$listChildNews[]=$newNews;
						$got=$got.$newNews['news_id'].',';
					}
				}
			}
			$listNews[$parent['category_id']]=$listChildNews;
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
		$this->view->showpoll=$this->mPoll->showOrHidden();
		//Header title
		$this->view->headTitle('UNC - Trang chủ');
	}

	public function binhchonAction()
	{
		if ($this->_request->isPost())
		{
			$answer=$this->_request->getPost('answer');
			$result=$this->mPoll->increasePollById($answer);
			if ($result)
			{
				$_SESSION['voted']='true';
			}
		}
		$this->_redirect($this->view->baseUrl().'/../');
	}
}