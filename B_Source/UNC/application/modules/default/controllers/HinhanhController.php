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
		
		$this->mDefault = new Default_Model_Mdefault();
		$this->mTintuc = new Default_Model_Mtintuc();
		$this->mHinhanh = new Default_Model_Mhinhanh();
		$this->mDiachi = new Default_Model_Mdiachi();
		
		$this->view->listParent = $this->mTintuc->getListParent();
		$this->view->listChild = $this->mTintuc->getListChild();
		@session_start();
		$_SESSION['page'] = 'hinhanh';
	}
	
	function indexAction()
	{
		$this->view->listImageRight = $this->mHinhanh->getListImageRight();
		$this->view->listImageLeft = $this->mHinhanh->getListImageLeft();
		$this->view->listCategory = $this->mHinhanh->getListCategory();
		$this->view->listdiachi = $this->mDiachi->getListDiachi();
	}
}
?>
