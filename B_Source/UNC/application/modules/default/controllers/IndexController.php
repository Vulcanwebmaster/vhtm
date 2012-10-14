<?php
class IndexController extends Zend_Controller_Action
{
	public function init()
	{
		$layoutPath = APPLICATION_PATH  . '/templates/front';
	      $option = array ('layout' => 'index', 
	                   'layoutPath' => $layoutPath );
	      Zend_Layout::startMvc ( $option );
	      
	      $this->mTintuc=new Default_Model_Mtintuc();
	      session_start();
	}
	
	public function indexAction()
	{
		
	}
	
	public function tintucAction(){
		
	}
	
	

	
}