<?php
class TimkiemController extends Zend_Controller_Action
{
	private $mTimkiem;
	function init()
	{
		
		$layoutPath = APPLICATION_PATH  . '/templates/front';
		$option = array ('layout' => 'index', 
                   'layoutPath' => $layoutPath );
		Zend_Layout::startMvc ( $option );
		$this->mTimkiem=new Default_Model_Mtimkiem();
	}
	
	function indexAction()
	{
		if ($this->_request->isPost())
		{
			$value_search=$this->_request->getPost('search-text');
			$list=$this->mTimkiem->getNewsByKey($value_search);
			$this->view->list=$list;
		}
	}
}