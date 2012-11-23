<?php
class ThamdoController extends Zend_Controller_Action
{
	protected $mDefault, $mPoll;
	function init()
	{
		@session_start();
		$layoutPath = APPLICATION_PATH  . '/templates/front';
	    $option = array ('layout' => 'index', 
	                  'layoutPath' => $layoutPath);
	    Zend_Layout::startMvc ($option);
		
		$this->mDefault = new Default_Model_Mdf();
		$this->mPoll=new Default_Model_Mpoll();
		$_SESSION['home'] = 'home';
		$_SESSION['page'] = 'thamdo';
		$this->setAccess();
	}
	
	function indexAction()
	{
		$this->view->listcauhoi = $this->mDefault->getListPolls();
		$this->view->listtraloi = $this->mDefault->getListPolls1();
	}
	
	public function binhchonAction()
	{
		$result=false;
		if ($this->_request->isPost())
		{
			$selectType=$this->getParam("select-type");
			if ($selectType=='0')
			{
				$answer=$this->_request->getPost('answer');
				$result=$this->mPoll->increasePollById($answer);
			}
			elseif ($selectType=='1')
			{
				foreach ($_POST['answer'] as $answer)
				{
					$result=$this->mPoll->increasePollById($answer);
				}
			}
			
			if ($result)
			{
				$_SESSION['voted']='true';
			}
		}
		$this->_redirect($this->view->baseUrl().'/../');
	}
}
