<?php
class VideoController extends Zend_Controller_Action
{
	protected $mTintuc;
	protected $mDefault;
	protected $mVideo;
	function init()
	{
		$layoutPath = APPLICATION_PATH  . '/templates/front';
	    $option = array ('layout' => 'index', 
	                  'layoutPath' => $layoutPath);
	    Zend_Layout::startMvc ($option);
		
		$this->mDefault = new Default_Model_Mdefault();
		$this->mTintuc = new Default_Model_Mtintuc();
		$this->mVideo = new Default_Model_Mvideo();
	    session_start();	
	}
	
	function listAction()
	{
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/tiennd.js',"text/javascript");
		
		$this->view->listHotNews = $this->mDefault->getListHotNews();
		$this->view->listNewsMostView = $this->mDefault->getListMostView();
		$this->view->listHotNewsJs = $this->mDefault->getListHotNewsJs();
		$this->view->listParent = $this->mTintuc->getListParent();
		$this->view->listChild = $this->mTintuc->getListChild();	
		
		$paginator = Zend_Paginator::factory($this->mVideo->getListVideo());
        $paginator->setItemCountPerPage(5);        
        $currentPage = $this->_request->getParam('page',1);
        $paginator->setCurrentPageNumber($currentPage);
		$this->view->list = $paginator;
	}
}
	