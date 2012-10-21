<?php
class IndexController extends Zend_Controller_Action
{
	protected $mDefault;
	protected $mTintuc;
	public function init()
	{
		$layoutPath = APPLICATION_PATH  . '/templates/front';
	    $option = array ('layout' => 'index', 
	                  'layoutPath' => $layoutPath );
	    Zend_Layout::startMvc ( $option );
	      
	
	    $this->mDefault=new Default_Model_Mdefault();
		$this->mTintuc = new Default_Model_Mtintuc();
		session_start();
		$this->setAccess();
		$_SESSION['home'] = 'home';
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/switch_news.js',"text/javascript");
	}

	public function indexAction()
	{
		//var_dump($this->mDefault->getVideoDefault());die();
		$this->view->listHotNews = $this->mDefault->getListHotNews();
		$this->view->listHotNewsJs = $this->mDefault->getListHotNewsJs();
		//var_dump($this->mDefault->getListHotNewsJs());die();
		$this->view->listNewsMostView = $this->mDefault->getListMostView();

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
		$this->view->listquangcao = $listquangcao;
		$this->view->listNews = $listNews;
		
		$this->view->video = $this->mDefault->getVideoDefault();
	}


}