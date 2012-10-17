<?php
class TimkiemController extends Zend_Controller_Action
{
	private $mTimkiem;
	private $mDefault;
	function init()
	{
		
		$layoutPath = APPLICATION_PATH  . '/templates/front';
		$option = array ('layout' => 'index', 
                   'layoutPath' => $layoutPath );
		Zend_Layout::startMvc ( $option );
		$this->mTimkiem=new Default_Model_Mtimkiem();
		$this->mDefault=new Default_Model_Mdefault();
	}
	
	function indexAction()
	{
		if ($this->_request->isPost())
		{
			$value_search=$this->_request->getPost('search-text');
			$list=$this->mTimkiem->getNewsByKey($value_search);
			$this->view->list=$list;
			$this->view->listHotNews=$this->mDefault->getListHotNews();
		}
	}
}