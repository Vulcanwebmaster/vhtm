<?php
	class Admin_TintucController extends Zend_Controller_Action
	{
		private $mtintuc, $listParent,$listChild,$mChuyenmuc, $mRss;
		private $mtimkiem;
		private $mdanhmuc;
		public $dantri=array('http://www.dantri.com.vn/trangchu.rss');
							/*'http://www.dantri.com.vn/chinh-tri.rss',
							'http://www.dantri.com.vn/phongsu.rss',
							'http://www.dantri.com.vn/moi-truong.rss',
							'http://www.dantri.com.vn/donga.rss',
							'http://www.dantri.com.vn/eu.rss',
							'http://www.dantri.com.vn/tgchaumy.rss',
							'http://www.dantri.com.vn/tgdiemnong.rss',
							'http://www.dantri.com.vn/kieubao.rss',
							'http://www.dantri.com.vn/tet-viet-xa-xu.rss',
							'http://www.dantri.com.vn/bongtrongnuoc.rss',
							'http://www.dantri.com.vn/bongquocte.rss',
							'http://www.dantri.com.vn/cupchauau.rss',
							'http://www.dantri.com.vn/bongdaanh.rss',
							'http://www.dantri.com.vn/bongdaitalia.rss',
							'http://www.dantri.com.vn/bongdataybannha.rss',
							'http://www.dantri.com.vn/tennis_duaxe.rss',
							'http://www.dantri.com.vn/cacmonkhac.rss',
							'http://www.dantri.com.vn/sea-games-26.rss');*/
		
		private $title;
		private $description;
		private $link;
		private $date;
		private $source;
		private $content;
		
		function init()
		{
			//=======clear array ====================
			$this->title=array();
			$this->description=array();
			$this->link=array();
			$this->date=array();
			$this->source=array();
			$this->content=array();
			@session_start();
			$layoutPath = APPLICATION_PATH  . '/templates/admin';
			$option = array ('layout' => 'index', 
			                   'layoutPath' => $layoutPath );
			Zend_Layout::startMvc ( $option );
			$this->mChuyenmuc = new Admin_Model_Mchuyenmuc();
			$this->listParent = $this->mChuyenmuc->getListParent();
			$this->listChild = $this->mChuyenmuc->getListChild();
			$this->mtintuc=new Admin_Model_Mtintuc();
			$this->mRss=new Admin_Model_Mrss();
			$this->mdanhmuc=new Admin_Model_Mchuyenmuc();
			$this->mtimkiem=new Admin_Model_Mtimkiem();
		}
		
		function getlistAction()
		{
			$list2=array();
			if ($_SESSION['role_id']==0)
			{
				$list2=$this->mtintuc->getListNews();
				$paginator= Zend_Paginator::factory($list2);
			}
			elseif ($_SESSION['role_id']==1)
			{
				$userid=$_SESSION['user_id'];
				$list1=$this->mtintuc->getListNewsByUserId($userid);
				
				foreach ($list1 as $item)
				{
					if ($item['news_status']!='Chưa duyệt')
						$list2[]=$item;
					elseif  ($item['news_author']==$_SESSION['user'])
						$list2[]=$item;						
				}
				$paginator= Zend_Paginator::factory($list2);	
			}
			elseif ($_SESSION['role_id']==2)
			{
				$userid=$_SESSION['user_id'];
				$list1=$this->mtintuc->getListNewsByUserId($userid);
				foreach ($list1 as $item)
				{
					if ($item['news_status']=='Chưa duyệt')
						$list2[]=$item;
					elseif ($item['news_author']==$_SESSION['user'])
						$list2[]=$item;
				}
				$paginator= Zend_Paginator::factory($list2);
			}
			return $list2;
		}
		
		function indexAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$viewtype=$this->_request->getParam('viewtype');
			// ADD TIN TỰ ĐỘNG:================================
			//$this->autoGetnews();
			//===============================================
			//$adapter=new Zend_Paginator_Adapter_DbSelect($this->mtintuc->getListNews());
			//echo $_SESSION['role_id'];die();
			$list2=array();
			if ($_SESSION['role_id']==0)
			{
				$list1 = $this->mtintuc->getListNews();
				$list2=array();
				foreach ($list1 as $item)
				{
					if ($viewtype == 1) {
						$list2[]=$item;
					} else if ($viewtype == 2) {
						
						if ($item['news_status']!='Đã duyệt' && $item['news_status']!='Chưa duyệt') {
							$list2[]=$item;
						}
						
					} else if ($viewtype == 3) {

						if ($item['news_status']=='Đã duyệt' || $item['news_status']=='Chưa duyệt') {
							$list2[]=$item;
						}
					}					
				}				
				$paginator= Zend_Paginator::factory($list2);
			}
			elseif ($_SESSION['role_id']==1)
			{
				$userid=$_SESSION['user_id'];
				$list1=$this->mtintuc->getListNewsByUserId($userid);
				
				foreach ($list1 as $item)
				{
					if ($viewtype == 1) {
						if ($item['news_status']!='Chưa duyệt')
							$list2[]=$item;
						elseif  ($item['news_author']==$_SESSION['user'])
							$list2[]=$item;	
					} else if ($viewtype == 2) {
						
						if ($item['news_status']!='Đã duyệt' && $item['news_status']!='Chưa duyệt') {
							$list2[]=$item;
						}
						
					} else if ($viewtype == 3) {

						if ($item['news_status']=='Đã duyệt') {
							$list2[]=$item;
						}
					}					
				}
				$paginator= Zend_Paginator::factory($list2);	
			}
			elseif ($_SESSION['role_id']==2)
			{
				$userid=$_SESSION['user_id'];
				$list1=$this->mtintuc->getListNewsByUserId($userid);
				foreach ($list1 as $item)
				{
					if ($viewtype == 1) {
						if ($item['news_status']=='Chưa duyệt')
							$list2[]=$item;
						elseif ($item['news_author']==$_SESSION['user'])
							$list2[]=$item;
					} else if ($viewtype == 2) {
						
						if ($item['news_status']!='Đã duyệt' && $item['news_author']==$_SESSION['user'])
							$list2[]=$item;
												
					} else if ($viewtype == 3) {
						
						if (($item['news_status']=='Đã duyệt' && $item['news_author']==$_SESSION['user'])
							|| $item['news_status']=='Chưa duyệt') {
							$list2[]=$item;
						}						
						
					}
				}
				$paginator= Zend_Paginator::factory($list2);
			}
			$paginator->setItemCountPerPage(6);
			$current=$this->_request->getParam('page',1);
			$paginator->setCurrentPageNumber($current);
				
			$this->view->title='Tin tức';
			//echo count($list2);die();
			$this->view->list=$list2;//$paginator;
			$categoriesId=array();
			foreach (/*$paginator*/$list2 as $new)
			{
				$category=$this->mdanhmuc->getCmById($new['category_id']);
				if ($category)
				{
					$categoriesId[]=$category['category_name'];
				}
				else $categoriesId[]=' ';
			}
			$this->view->categoriesid=$categoriesId;
			$youtube=new Zend_Gdata_YouTube();
		}
		
	function timkiemAction()
	{
		$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/front/js/tiennd.js',"text/javascript");
		if ($this->_request->isPost())
		{
			$value_search=$this->_request->getPost('search-text');
			$list=$this->mtimkiem->getNewsByKey($value_search);
			
			$paginator = Zend_Paginator::factory($list);
	        $paginator->setItemCountPerPage(15);        
	        $currentPage = $this->_request->getParam('page',1);
	        $paginator->setCurrentPageNumber($currentPage);
	        
	        $this->view->list=$paginator;
        
        //---------Thêm template vào các chuyên mục----
        	$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
		//---------End Thêm template vào các chuyên mục----
		}
	}
		
		function autogetnews()
		{	
			$listRss=$this->mTintuc->getListRss();
			foreach ($listRss as $linkrss)
			{
				$this->getListByLink($linkrss['link']);
				$countNews=count($this->title);
				for ($i=0; $i<$countNews; $i++)
				{
					$new=array('news_title'=>$this->title[$i],
								'alias'=>$this->getAliasByName($this->title[$i]),
								'news_summary'=>$this->description[$i],
								'news_content'=>$this->content[$i],
								'news_author'=>'',
								'category_id'=>'0',
								);
					$this->mtintuc->insertNews($new);
				}
			}
		}
		
		function replaceChar( $char1, $char2, $string)
		{
			return str_replace($char1, $char2, $string);
		}
		
		function fixLink($link)
		{
			$pos=strpos($link, '/http:');
			if ($pos>0)
				$link=substr($link, $pos+1);
			return $link;
		}
		
		function getListByLink($link)
		{
			$this->title=array();
			$source=new DOMDocument();
			$source->load($link);
			$listItems=$source->getElementsByTagName('item');
			foreach ($listItems as $item)
			{
				$listTitleNode=$item->getElementsByTagName('title');
				$newtitle=$listTitleNode->item(0)->nodeValue;
				$this->title[]=$this->replaceChar("'", '"', $newtitle);
				
				$listLinkNode=$item->getElementsByTagName('link');
				$this->link[]=trim($this->fixLink($listLinkNode->item(0)->nodeValue));
				$content=$this->getContent($this->fixLink($listLinkNode->item(0)->nodeValue));
				$this->content[]=$this->replaceChar("'", '"', $content);
				
				$listDescriptionNode=$item->getElementsByTagName('description');
				$summary=$listDescriptionNode->item(0)->nodeValue;
				$this->description[]=$this->replaceChar("'", '"', $summary);
			}
		}
		
		function getContent($link)
		{
			$link=trim($link);
			$content=file_get_contents($link);
			$start=strpos($content, '<div class="fon34 mt3 mr2 fon43">');
			$end=strpos($content, '<div itemscope')-1;
			return substr($content, $start, $end-$start);
		}
		
		//--------------------------------------------------------------
		function deleteAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$newsid=$this->_request->getParam('newsid');
			if ($this->mtintuc->deletenews($newsid))
				$_SESSION['result']='Xóa thành công';
			else $_SESSION['result']='Xóa không thành công';
			
			$this->_redirect($this->view->baseUrl().'/../admin/tintuc');
		}
		
		function setForm()
		{
			$form=new Zend_Form();
			$form->setMethod('post');
			$form->setName('insertForm');
			$form->setAction($this->view->baseUrl().'/admin/tintuc/insert');
			
			$form->addElement('text','news_title');
			$news_login=$form->getElement('news_title');
			$news_login->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Tiêu đề không được để trống'));;
			$news_login->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$el=$form->createElement('textarea','news_avatar', array('style'=>'height:100px'));
			$el->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Avatar không được để trống'));
			$el->setAttrib('id', 'news_avatar');
			$el->removeDecorator('HtmlTag')->removeDecorator('Label');
			$form->addElement($el);
			
			$el=$form->createElement('textarea','news_summary', array('style'=>'height:100px'));
			$el->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Mục tóm tắt không được để trống'));
			$el->setAttrib('id', 'news_summary');
			$el->removeDecorator('HtmlTag')->removeDecorator('Label');
			$form->addElement($el);
			
			$el=$form->createElement('textarea','news_content', array('style'=>'height:300px'));
			$el->setRequired(true)->addValidator('NotEmpty',true,array('messages'=>'Nội dung không được để trống'));;
			$el->setAttrib('id', 'news_content');
			$el->removeDecorator('HtmlTag')->removeDecorator('Label');
			$form->addElement($el);
			
			$form->addElement('text','news_author');
			$el=$form->getElement('news_author');
			$el->setValue($_SESSION['user']);
			$el->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$form->addElement('text','news_post_date');
			$el=$form->getElement('news_post_date');
			$el->setAttrib('class', 'datepicker');
			$el->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$form->addElement('text','news_modified_date');
			$el=$form->getElement('news_modified_date');
			$el->setAttrib('class', 'datepicker');
			$el->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			if ($_SESSION['role_id']==0) {
				$el=$form->createElement('select', 'news_status', array('multioptions'=>array('Chưa duyệt'=>'Chưa duyệt',
																						'Đã duyệt'=>'Đã duyệt',
																						'Riêng tư'=>'Riêng tư',
																						'Công khai'=>'Công khai')));
			} else if ($_SESSION['role_id']==1) {
				$el=$form->createElement('select', 'news_status', array('multioptions'=>array(	'Đã duyệt'=>'Đã duyệt',
																								'Riêng tư'=>'Riêng tư',
																								'Công khai'=>'Công khai')));
			} else {
				$el=$form->createElement('select', 'news_status', array('multioptions'=>array(	'Chưa duyệt'=>'Chưa duyệt',
																								'Đã duyệt'=>'Đã duyệt')));
			}
			$el->removeDecorator('HtmlTag')->removeDecorator('Label');
			$form->addElement($el);
			
			$is_hot= new Zend_Form_Element_Radio('is_hot');
			$is_hot->setRequired(true)
				->setLabel('Is hot?')
				->setMultiOptions(array(
                                                                      "0" => "Không",
                                                                      "1" => "Có"));
																	  
			$is_hot->removeDecorator('HtmlTag')->removeDecorator('Label');
			$form->addElement($is_hot);
			
			$listarray=array();
			if ($_SESSION['role_id']==0)
			{
				$listCategories=$this->mdanhmuc->getListCM();
				foreach ($listCategories as $category)
				{
					if ($this->mtintuc->countChildById($category['category_id'])==0)
						$listarray[$category['category_id']]=$category['category_name'];
				}
			}
			else 
			{
				$userID=$_SESSION['user_id'];
				$categoriesId=$this->mtintuc->getCategoryIDByUserId($userID);
				foreach ($categoriesId as $categoryId)
				{
					$category=$this->mtintuc->getCategoryById($categoryId);
					if ($this->mtintuc->countChildById($category['category_id'])==0)
						$listarray[$category['category_id']]=$category['category_name'];
				}
			}
			
			$el=$form->createElement("select","category_id",array(
                                                 "multioptions"=> $listarray));
			$el->removeDecorator('HtmlTag')->removeDecorator('Label');
			$form->addElement($el);
			
			return $form;
		}
		
		function _getInput($form)
		{
			$input=array('news_title'		=>	$form->getValue('news_title'),
						'alias'				=>	$this->getAliasByName($form->getValue('news_title')),
						'news_avatar'		=>	$form->getValue('news_avatar'),
						'news_summary'		=>	$form->getValue('news_summary'),
						'news_content'		=>	$form->getValue('news_content'),
						'news_author'		=>	$form->getValue('news_author'),
						'news_post_date'	=>	$form->getValue('news_post_date'),
						'news_modified_date'=>	$form->getValue('news_modified_date'),
						'news_status'		=>	$form->getValue('news_status'),
						'is_hot'			=> 	$form->getValue('is_hot')
						//'category_id'		=>	$form->getValue('category_id')
						);
			return $input;
		}
		
		function insertAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$this->view->title="Thêm tin tức";
			$this->view->listParent = $this->listParent;
			$this->view->listChild = $this->listChild;
			$form=$this->setForm();
			$newsid=$this->_request->getParam('newsid');
			if ($this->_request->isPost())
			{
				
				if (!$form->isValid($_POST))
				{
					
					$form->populate($_POST);
				}
				else
				{
					$input=$this->_getInput($form);
					$checkbox ="";
					foreach($_POST['checkbox'] as $check)
					{
						$checkbox = $checkbox.$check.',';
					}
					$_SESSION['result']='Thêm mới thành công';
					
					if($this->mtintuc->addNews($input,$checkbox))
					{
						$_SESSION['result']='Thêm mới thành công';
					}
					else{
						$_SESSION['result']='Thêm mới không thành công';
					}
					$this->_redirect($this->view->baseUrl().'/../admin/tintuc');					
				}
			}
			$this->view->form=$form;
		}
		
		function editAction()
		{
			$this->view->title='Chỉnh sửa tin tức';
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$form=$this->setForm();
			$newsId=$this->_request->getParam('newsid');
			$info=$this->mtintuc->getnewsById($newsId);
			$this->view->listParent = $this->listParent;
			$this->view->listChild = $this->listChild;
			$this->view->listCategoryId = $this->mChuyenmuc->getListCategoryIdByUserId($newsId);
			//var_dump($info);die();
			$form->setAction($this->view->baseUrl().'/admin/tintuc/edit/newsid/'.$newsId);
			$form->getElement('news_title')->setValue($info['news_title']);
			$form->getElement('news_avatar')->setValue($info['news_avatar']);
			$form->getElement('news_summary')->setValue($info['news_summary']);
			$form->getElement('news_content')->setValue($info['news_content']);
			//$form->getElement('news_author')->setValue($info['news_author']);
			if ($info['news_author'] != "") {
				$form->getElement('news_author')->setValue($info['news_author']);
			} else {
				$form->getElement('news_author')->setValue($_SESSION['user']);
			}			
			$form->getElement('news_post_date')->setValue($info['news_post_date']);
			$form->getElement('news_modified_date')->setValue(gmdate('Y-m-d h:i:s',time() + 7*3600));
			//echo $info['news_status'];
			$form->getElement('news_status')->setValue($info['news_status']);
			//$form->getElement('category_id')->setValue($info['category_id']);
			$form->getElement('is_hot')->setValue($info['is_hot']);
			$category_id = explode(",",$info['category_id']);
			//var_dump($category_id);die();
			$listCategory = array();
			foreach($category_id as $category)
			{
				if($category != "") $listCategory[] = $category;
			}
			$this->view->listCategory = $listCategory;
			if ($this->_request->isPost())
			{
				if (!$form->isValid($_POST))
				{
					$form->populate($_POST);
				}
				else
				{
					$id = $this->_request->getParam('newsid');
					$input = $this->_getInput($form);
					
					$checkbox = "";
						foreach($_POST['checkbox'] as $check)
						{
							$checkbox = $checkbox.$check.',';
						}
					
					if ($this->mtintuc->editnews($id, $input,$checkbox))
					{
						$_SESSION['result']='Cập nhật thành công';
						$this->_redirect($this->view->baseUrl().'/../admin/tintuc');
					}
					else 
					{
						$this->view->error=$form->getMessage();
						$this->view->form=$form;
					}
				}
				
			}
			
			$this->view->form=$form;
		}
	}