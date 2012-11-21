<?php
	class Admin_ThamdoController extends Zend_Controller_Action
	{
		protected $mDiachi, $mTintuc, $mThamdo;
		protected $role;
		protected $user;
		protected $user_id;
		function init()
		{
			@session_start();
			if (isset($_SESSION['role_id']))
			{
				$layoutPath = APPLICATION_PATH  . '/templates/admin';
			      $option = array ('layout' => 'index', 
			                   'layoutPath' => $layoutPath );
			      Zend_Layout::startMvc ( $option );
				  $this->mDiachi = new Admin_Model_Mdiachi();
				  $this->mTintuc = new Admin_Model_Mtintuc();
				  $this->mThamdo = new Admin_Model_Mthamdo();
				  if(isset($_SESSION['role']))
				  	$this->role = $_SESSION['role'];
				  else {
					  $this->_redirect($this->view->baseUrl().'/../admin');
				  }
				  if(isset($_SESSION['user_id']))
				 	 $this->user_id = $_SESSION['user_id'];
				  else {
					  $this->_redirect($this->view->baseUrl().'/../admin');
				  }
				  $_SESSION['backend_current_menu']="menu-quanlychung";
				  
				  $this->view->headTitle('UNC - Admin website');
				$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
				$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
				$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			}
			else $this->_redirect($this->view->baseUrl().'/../admin');
		}
		
		function indexAction()
		{
			$list=$this->mTintuc->getListAllThamdo();
			$questionList=array();
			$answerList=array();
			foreach ($list as $item)
			{
				if ($item['polls_type']=='0')
				{
					$questionList[] = $item;
					$answers=$this->mThamdo->getAnswersByQuestionId($item['polls_id']);
					$answerList[]=$answers;
				}
			}
	        $this->view->questList=$questionList;
	        $this->view->ansList=$answerList;
	        $this->view->list = $list;
			$this->view->title = "Quản lý thăm dò";
			$this->view->role = $this->role;
			$this->view->isshow=$this->mThamdo->getActiveIndex();
		}
		function _getInput($form)
		{
			$input = array(	
							'polls_content'	=> $form->getValue('polls_content'),
							'polls_type'	=> $form->getValue('polls_type'),
							'question_id'	=> $form->getValue('question_id'),
							'multiselect'	=> $form->getValue('multiselect'),
							'is_active'	=> $form->getValue('is_active')
			);
			return $input;
		}
		
		function setForm()
		{
			$listQuestions=$this->mThamdo->getListPollsByType('0');
			$listQuestionsContent=array();
			$listQuestionsContent['0']='Xin chọn ...';
			foreach ($listQuestions as $quest)
			{
				$listQuestionsContent[$quest['polls_id']]=$quest['polls_content'];
			}
			$form=new Zend_Form;
			 
			$form->setMethod('post')->setAction('');
			
			$noidung = new Zend_Form_Element_Text('polls_content');
			$noidung->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Nội dung không được để trống'));
			$noidung->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$selector=array("0"=>"Câu hỏi",
							"1"=>"Trả lời",);
			$type=$form->createElement("radio", "polls_type", array('multioptions'=>$selector));
			$type->setValue("0");
			$type->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$question_id=$form->createElement("select", "question_id", array('multioptions'=>$listQuestionsContent));
			$question_id->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$selector=array("0"=>"Không  (Hiển thị radio button)",
							"1"=>"Có  (Hiển thị checkbox)",);
			$multiselect = $form->createElement("radio", "multiselect", array('multioptions'=>$selector));
			
			$multiselect->removeDecorator('HtmlTag')->removeDecorator('Label');
			$multiselect->setValue("0");
			$selector=array("0"=>"Không",
							"1"=>"Có",);
			$is_active = $form->createElement("radio", "is_active", array('multioptions'=>$selector));
			$is_active->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$form->addElements(array($noidung,$type,$question_id,$multiselect,$is_active));
			return $form;
		}
		
		function insertAction()
		{
			if ($_SESSION['role_id']!=0)
			{
				$this->_redirect($this->view->baseUrl().'/../admin');
			}
			else 
			{
				$this->view->title="Thêm nội dung";
				$form = $this->setForm();
				
				if($this->_request->isPost())
				{
					if($form->isValid($_POST))
					{
						$input=$this->_getInput($form);
						if ($this->mThamdo->insertPoll($input))
						{
							$_SESSION['result']='Thêm mới thành công';
							$this->_redirect($this->view->baseUrl().'/../admin/thamdo');
						}
						else 
						{
							$_SESSION['result']='Thêm mới Thất bại';
							$this->_redirect($this->view->baseUrl().'/../admin/thamdo');
						}
					}
					else 
					{
						$form->populate($_POST);
					}
				}
				
				$this->view->form=$form;
			}
		}
		
		function editAction()
		{
			if ($_SESSION['role_id']!=0)
			{
				$this->_redirect($this->view->baseUrl().'/../admin');
			}
			else 
			{
				$form = $this->setForm();
				$polls_id = $this->_request->getParam('pollsid');
				
				if($this->_request->isPost())
				{
					if($form->isValid($_POST))
					{
						$input = $this->_getInput($form);
						if($this->mThamdo->updatePoll($input, $polls_id))
						{
							$_SESSION['result']='Cập nhật thành công';
							$this->_redirect($this->view->baseUrl().'/admin/thamdo',array('prependBase' => false));
						}
						else 
						{
							$_SESSION['result']='Cập nhật không thành công';
							$this->_redirect($this->view->baseUrl().'/admin/thamdo',array('prependBase' => false));
						}
					}
					else 
					{
						$form->populate($_POST);
					}
				}
				else
				{
					$info = $this->mTintuc->getListThamdobyid($polls_id);
					$form->setAction($this->view->baseUrl().'/admin/thamdo/edit/pollsid/'.$polls_id);
					$this->view->type=$info['polls_type'];
						
					$this->view->form = $form;
					$this->view->title = "Sửa thông tin thăm dò";
					$form->getElement('polls_content')->setValue($info['polls_content']);
					$form->getElement('polls_type')->setValue($info['polls_type']);
					$form->getElement('question_id')->setValue($info['question_id']);
					$form->getElement('multiselect')->setValue($info['multiselect']);
					$form->getElement('is_active')->setValue($info['is_active']);
				}
			}
		}

		function deleteAction()
		{
			if ($_SESSION['role_id']!=0)
			{
				$this->_redirect($this->view->baseUrl().'/admin');
			}
			else 
			{
				$polls_id = $this->_request->getParam('pollsid');
				if($this->mTintuc->deletethamdo($polls_id))
					$_SESSION['result']='Xóa thành công';
				else $_SESSION['result']='Xóa không thành công';
				$this->_redirect($this->view->baseUrl().'/admin/thamdo',array('prependBase' => false));
			}
		}
		
		function activeAction()
		{
			$value=$this->_request->getPost('isshow');
			$input=array("polls_content"=>$value);
			$this->mThamdo->updateActive($input);
			$this->_redirect($this->view->baseUrl().'/admin/thamdo',array('prependBase' => false));
		}
	}
