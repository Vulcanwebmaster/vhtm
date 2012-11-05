<?php
class ThamdoController extends Zend_Controller_Action
{
	protected $mDefault;
	function init()
	{
		$layoutPath = APPLICATION_PATH  . '/templates/front';
	    $option = array ('layout' => 'index', 
	                  'layoutPath' => $layoutPath);
	    Zend_Layout::startMvc ($option);
		
		$this->mDefault = new Default_Model_Mdf();
		@session_start();
		$_SESSION['home'] = 'home';
		$_SESSION['page'] = 'thamdo';
	}
	
	function indexAction()
	{
		$this->view->listcauhoi = $this->mDefault->getListPolls();
		$this->view->listtraloi = $this->mDefault->getListPolls1();
	}
}
?>
