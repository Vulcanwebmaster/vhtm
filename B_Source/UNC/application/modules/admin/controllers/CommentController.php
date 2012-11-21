<?php
	class Admin_CommentController extends Zend_Controller_Action
	{
		protected $mComment;
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
			  $this->mComment = new Admin_Model_Mcomment();
			  
			  if(isset($_SESSION['role']))
			  	$this->role = $_SESSION['role_id'];
			  else {
				  $this->_redirect($this->view->baseUrl().'/../admin');
			  }
			  if(isset($_SESSION['user_id']))
			 	 $this->user_id = $_SESSION['user_id'];
			  else {
				  $this->_redirect($this->view->baseUrl().'/../admin');
			  }
			  $_SESSION["backend_current_menu"]="menu-quanlytin";
			  
			  $this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			}
			else $this->_redirect($this->view->baseUrl().'/../admin');
		}
		
		function indexAction()
		{
			//echo $this->user_id.' --- '.$this->role;die();
		}
		
		function word_limiter($string, $limit)
		{
			$count=0;
			$i=0;
			for ($i=0;$i<strlen($string); $i++)
			{
				if ($count<$limit)
				{
					if ($string[$i]==" ")
						$count++;
				}
				else break;		
			}
			return substr($string, 0, $i);
		}
		
		function loaddataAction()
		{
			//paging======================
			if (isset($_GET['iDisplayStart']))
			{
				$offset=' offset '.$_GET['iDisplayStart'];
			}
			else $offset='';
			if (isset($_GET['iDisplayLength']))
			{
				$limit=' limit '.$_GET['iDisplayLength'];
			}
			else $limit='';
			
			//sort======================
			$aColumns=array('unc_comment.comment_content','unc_news.news_title');
			if ( isset( $_GET['iSortCol_0'] ) )
			{
				$sOrder=' order by ';
				for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ )
				{
					if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" )
					{
						$sOrder .= $aColumns[ intval( $_GET['iSortCol_'.$i] ) ]." ".$_GET['sSortDir_'.$i];
					}
				}
			}
			else $sOrder='';
			
			//Filter==========================
			$sWhere = "";
			if ( isset($_GET['sSearch']) && $_GET['sSearch'] != "" )
			{
				$sWhere = "WHERE (";
				for ( $i=0 ; $i<count($aColumns) ; $i++ )
				{
					if ($i<count($aColumns)-1)
						$sWhere .= " ".$aColumns[$i]." LIKE '%".$_GET['sSearch']."%' OR ";
					else $sWhere .= " ".$aColumns[$i]." LIKE '%".$_GET['sSearch']."%'";
				}
				$sWhere .= ')';
			}
			
			//================================================
			
			$listNewsTitle = array();
			$listReaderName = array();
			$listComments = array();
			$listNewsId = array();
			
			if($this->role =="0")
			{
				$listComments = $this->mComment->getListComment($sWhere,$offset,$limit,$sOrder);	
				$listFull= $this->mComment->getListComment($sWhere,'','','');
				//Nếu là admin thì lấy ra danh sách tất cả các comment
			}
			elseif($this->role =="1")	
			{
				//Nếu là trưởng ban
				//Lấy ra danh sách chuyên mục mà trưởng ban đó quản lý
				$listCategories = $this->mComment->getListCategoryId($this->user_id);
				$categories=array();
				foreach ($listCategories as $item)
				{
					$categories[]=$item['category_id'];
				}
				
				$listComments = array();
				$listFull=array();
				
				$listComments=$this->mComment->getListCommentByUserRole1($_SESSION['user_id'],$categories,$sWhere,$offset,$limit,$sOrder);
				$listFull = $this->mComment->getListCommentByUserRole1($_SESSION['user_id'],$categories,$sWhere,'','','');
			}
			elseif($this->role == "2")
			{
				$listComments = $this->mComment->getListCommentByUserRole2($_SESSION['user_id'],$sWhere,$offset,$limit,$sOrder);
				$listFull = $this->mComment->getListCommentByUserRole2($_SESSION['user_id'],$sWhere,'','','');
				//Nếu là phóng viên 
				//Lấy ra danh sách tin tức mà phóng viên đó viết
			}
			
			//================== convert to JSON format===========================
			$aaData=array();
			$count=1;
			if (count($listComments)>0)
				foreach ($listComments as $item)
				{
					$currentArray=array();
					
					$content = str_replace(array("\n", "\r"), ' ', strip_tags(str_replace('"',"'",$item['comment_content'])));
					$currentArray[]=$this->word_limiter($content, 100).'...';
					
					$currentArray[]= str_replace('"',"'",$this->word_limiter($item['news_title'], 100)).' ...';	
					
					$currentArray[]='<center><a href="'.$this->view->baseUrl().'/admin/comment/edit/comment_id/'.$item['comment_id'].'" title="Sửa"><img src="'.$this->view->baseUrl().'/application/templates/admin/images/icn_edit.png"></a></center>';
					$currentArray[]='<center><a class="del_button" onclick="confirmDel('.$item['comment_id'].')" title="Xóa"><img src="'.$this->view->baseUrl().'/application/templates/admin/images/icn_trash.png"></a></center>';
					
					$count++;
					
					$aaData[]=$currentArray;
				}
			
			$result=array("sEcho"=> intval($_GET['sEcho']),
						  "iTotalRecords"=> ''.count($listFull).'',
						  "iTotalDisplayRecords"=> ''.count($listFull).'',
						  "aaData"=>$aaData);
        	echo json_encode($result); die();
		}
		
		function setForm()
		{
			$form = new Zend_Form;
			$form->setAction('')->setMethod('post');
			
			$comment_content = new Zend_Form_Element_Textarea('comment_content');
			$comment_content->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Nội dung bình luận không được để trống'));
			$comment_content->setAttrib('rows', '5');
			
			$news_id = new Zend_Form_Element_Select('news_id');
			
			foreach($this->mComment->getListNews() as $news)
			{
				$news_id->addMultiOption($news['news_id'],$news['news_title']);
			}
			
			$comment_content->removeDecorator('HtmlTag')->removeDecorator('Label');
			$news_id->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$form->addElements(array($comment_content,$news_id));
			return $form;
		}
		
		function _getInput($form)
		{
			$input = array(	
							'comment_content'	=> $form->getValue('comment_content'),
							'news_id'			=> $form->getValue('news_id'),
			);
			return $input;
		}
		
		function editAction()
		{
			if ($_SESSION['role_id']=='2')
			{
				$this->_redirect($this->view->baseUrl().'/../admin/comment');
			}
			else 
			{
				$this->view->headTitle('UNC - Admin website');
				$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
				$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
				$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
				
				$comment_id = $this->_request->getParam('comment_id');
				$info = $this->mComment->getCommentById($comment_id);
				
				$form = $this->setForm();
				$form->setAction($this->view->baseUrl().'/admin/comment/edit/comment_id/'.$comment_id);
				$form->getElement('comment_content')->setValue($info['comment_content']);
				$form->getElement('news_id')->setValue($info['news_id']);
				
				$this->view->title="Sửa comment";
				$this->view->form = $form;
				
				if($this->_request->isPost())
				{
					if($form->isValid($_POST))
					{
						//var_dump($this->mComment->editComment($comment_id,$input));die();
						$input = $this->_getInput($form);
						//var_dump($input);die();
						if ($this->mComment->editComment($comment_id,$input))
						{
							$_SESSION['result']='Cập nhật thành công';
							$this->_redirect($this->view->baseUrl().'/../admin/comment');
						}
						else 
						{
							$_SESSION['result']='Cập nhật không thành công';
							$this->_redirect($this->view->baseUrl().'/../admin/comment');
						}
					}
					else 
					{
						$form->populate($_POST);
					}
					
				}
			}
		}
		
		function delAction()
		{
			$comment_id=$this->_request->getParam('comment_id');
			
			if ($this->mComment->deleteComment($comment_id))
				$_SESSION['result']='Xóa thành công';
			else $_SESSION['result']='Xóa không thành công';
			
			$this->_redirect($this->view->baseUrl().'/../admin/comment');
		}

	}