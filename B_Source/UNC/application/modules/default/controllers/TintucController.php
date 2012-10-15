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
		
		$listNews = $this->mTintuc->getNewsByCategoryId('3');
		var_dump($listNews);die();
	}
	
	function detailAction()
	{
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/tiennd.js',"text/javascript");
		
		$this->view->listHotNews = $this->mDefault->getListHotNews();
		$this->view->listNewsMostView = $this->mDefault->getListMostView();
		
		$news_id = $this->_request->getParam('newsid');
		$this->view->news = $this->mTintuc->getNewsByNewsId($news_id);
	}
}
