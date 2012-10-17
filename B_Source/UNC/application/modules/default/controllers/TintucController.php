<?php
class TintucController extends Zend_Controller_Action
{
	protected $mTintuc;
	protected $mDefault;
	
	function init()
	{
		$layoutPath = APPLICATION_PATH  . '/templates/front';
	    $option = array ('layout' => 'index', 
	                  'layoutPath' => $layoutPath);
	    Zend_Layout::startMvc ($option);
	      
	    $this->mDefault = new Default_Model_Mdefault();
		$this->mTintuc = new Default_Model_Mtintuc();
	    session_start();	
	}
	
	function detailAction()
	{
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/tiennd.js',"text/javascript");
		
		$this->view->listHotNews = $this->mDefault->getListHotNews();
		$this->view->listNewsMostView = $this->mDefault->getListMostView();
		
		$news_id = $this->_request->getParam('newsid');
		$news = $this->mTintuc->getNewsByNewsId($news_id);
		$this->view->news = $news;
		
		$listParents=$this->mTintuc->getListParent();
		$this->view->listParent = $listParents;
		$listChild=$this->mTintuc->getListChild();
		$this->view->listChild = $listChild;
		/*
		$str = $news['news_summary'];
		//echo $str;die();
		//$str = "<info>abc123</info>";
		$ret = preg_match('#<br>.*</a>#',$str,$match);
		if($ret>0)
		{
			$str = str_replace($match[0],"",$str);
		}
		echo $str;die();
		echo $match[0];die();
		var_dump($match);die();
		 */
	}
	
	function listAction()
	{
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
					if($news['category_id'] == $categoryId['category_id'])
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
		
        $this->view->list=$paginator;
		$this->view->listquangcao=$listquangcao;
		//var_dump($listquangcao);die();
		$this->view->listHotNews = $this->mDefault->getListHotNews();
		$this->view->listNewsMostView = $this->mDefault->getListMostView();
		
		$listParents=$this->mTintuc->getListParent();
		$this->view->listParent = $listParents;
		$listChild=$this->mTintuc->getListChild();
		$this->view->listChild = $listChild;
	}
}
