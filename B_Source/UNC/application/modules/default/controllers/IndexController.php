<?php
class IndexController extends Zend_Controller_Action
{
<<<<<<< .mine
	protected $mDefault;
	function init()
=======
	protected $mTintuc;
	public function init()
>>>>>>> .r816
	{
		$layoutPath = APPLICATION_PATH  . '/templates/front';
	    $option = array ('layout' => 'index', 
	                  'layoutPath' => $layoutPath );
	    Zend_Layout::startMvc ( $option );
	      
<<<<<<< .mine
	    $this->mDefault=new Default_Model_Mdefault();
	    session_start();	
=======
	      $this->mTintuc = new Default_Model_Mtintuc();
	      session_start();
>>>>>>> .r816
	}
	
<<<<<<< .mine
	function indexAction()
=======
	public function indexAction()
>>>>>>> .r816
	{
<<<<<<< .mine
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/tiennd.js',"text/javascript");
		$this->view->listHotNews = $this->mDefault->getListHotNews();
		$this->view->listNewsMostView = $this->mDefault->getListMostView();
	}
	
=======
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
>>>>>>> .r816

}