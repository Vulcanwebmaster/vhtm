<?php
class TimkiemController extends Zend_Controller_Action
{
	private $mTimkiem;
	private $mDefault;
	private $mTintuc;
	function init()
	{
		session_start();
		$this->setAccess();
		$layoutPath = APPLICATION_PATH  . '/templates/front';
		$option = array ('layout' => 'index', 
                   'layoutPath' => $layoutPath );
		Zend_Layout::startMvc ( $option );
		$this->mTimkiem=new Default_Model_Mtimkiem();
		$this->mDefault=new Default_Model_Mdefault();
		$this->mTintuc=new Default_Model_Mtintuc();
	}
	
	function indexAction()
	{
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/tiennd.js',"text/javascript");
		if ($this->_request->isPost())
		{
			$value_search=$this->_request->getPost('search-text');
			$list=$this->mTimkiem->getNewsByKey($value_search);
			$this->view->list=$list;
			
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
}