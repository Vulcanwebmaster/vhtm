<?php
class IndexController extends Zend_Controller_Action
{
	protected $mTintuc;
	public function init()
	{
		$layoutPath = APPLICATION_PATH  . '/templates/front';
	      $option = array ('layout' => 'index', 
	                   'layoutPath' => $layoutPath );
	      Zend_Layout::startMvc ( $option );
	      
	      $this->mTintuc = new Default_Model_Mtintuc();
	      session_start();
	}
	
	public function indexAction()
	{
		$listParents=$this->mTintuc->getListParent();
		$this->view->listParent = $listParents;
		$listChild=$this->mTintuc->getListChild();
		$this->view->listChild = $listChild;
		
		$listNews=array();
		foreach ($listParents as $parent)
		{
			$listNews[$parent['category_id']]=$this->mTintuc->getTinTuc($parent['category_id']);
		}
		$this->view->listNews=$listNews;
		//var_dump($this->mTintuc->getTinTuc());die();
	}

}