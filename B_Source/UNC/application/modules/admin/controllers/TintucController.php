<?php
	class Admin_TintucController extends Zend_Controller_Action
	{
		private $mtintuc;
		public $dantri=array('http://www.dantri.com.vn/trangchu.rss');
		
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
			
			$layoutPath = APPLICATION_PATH  . '/templates/admin';
			$option = array ('layout' => 'index', 
			                   'layoutPath' => $layoutPath );
			Zend_Layout::startMvc ( $option );
			$this->mtintuc=new Admin_Model_Mtintuc();
		}
		
		function indexAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			// ADD TIN TỰ ĐỘNG:================================
			$this->autoGetnews();
			//===============================================
			$this->view->title='Tin tức';
			$this->view->list=$this->mtintuc->getListNews();
			
			$youtube=new Zend_Gdata_YouTube();
		}
		
		function autoGetnews()
		{
			 $this->getListByLink($this->dantri[0]);
			$countNews=count($this->title);
			for ($i=0; $i<$countNews; $i++)
			{
				$new=array('news_title'=>$this->title[$i],
							'news_summary'=>$this->description[$i],
							'news_content'=>$this->content[$i]);
				$this->mtintuc->insertNews($new);
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
			$end=strpos($content, '<div itemscope="" itemtype="http://schema.org/webpage" style="display: none !important;">')-1;
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
			$listCategories=$this->mtintuc->getListCategories();
			
			$form=new Zend_Form();
			$form->setMethod('post');
			$form->setName('insertForm');
			$form->setAction($this->view->baseUrl().'/admin/tintuc/insert');
			
			$form->addElement('text','news_title');
			$news_login=$form->getElement('news_title');
			$news_login->setOrder(1)->setRequired(true);
			$news_login->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$el=$form->createElement('textarea','news_summary', array('style'=>'height:100px'));
			$el->setOrder(1)->setRequired(true);
			$el->removeDecorator('HtmlTag')->removeDecorator('Label');
			$form->addElement($el);
			
			$el=$form->createElement('textarea','news_content', array('style'=>'height:300px'));
			$el->setOrder(2)->setRequired(true);
			$el->removeDecorator('HtmlTag')->removeDecorator('Label');
			$form->addElement($el);
			
			$form->addElement('text','news_author');
			$el=$form->getElement('news_author');
			$el->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$form->addElement('text','news_post_date');
			$el=$form->getElement('news_post_date');
			$el->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$form->addElement('text','news_modified_date');
			$el=$form->getElement('news_modified_date');
			$el->removeDecorator('HtmlTag')->removeDecorator('Label');
			
			$el=$form->createElement('select', 'news_status', array('multioptions'=>array('private'=>'Chưa duyệt',
																						'public'=>'Đã duyệt')));
			$el->removeDecorator('HtmlTag')->removeDecorator('Label');
			$form->addElement($el);
			
			$el=$form->createElement("select","category_id",array(
                                                 "multioptions"=> array()));
			$el->removeDecorator('HtmlTag')->removeDecorator('Label');
			$form->addElement($el);
			
			return $form;
		}
		
		function _getInput($form)
		{
			$input=array('news_title'		=>	$form->getValue('news_title'),
						'news_summary'		=>	$form->getValue('news_summary'),
						'news_content'		=>	$form->getValue('news_content'),
						'news_author'		=>	$form->getValue('news_author'),
						'news_post_date'	=>	$form->getValue('news_post_date'),
						'news_modified_date'=>	$form->getValue('news_modified_date'),
						'news_status'		=>	$form->getValue('news_status'),
						'category_id'=>$form->getValue('category_id'));
			return $input;
		}
		
		function insertAction()
		{
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$this->view->title="Thêm phóng viên";
			
			$form=$this->setForm();
			if (!$form->isValid($_POST))
			{
				$this->view->form=$this->setForm($form);
			}
			else
			{
				$input=$this->_getInput($form);
				if ($this->mtintuc->insertnews($input))
				{
					$_SESSION['result']='Thêm mới thành công';
					$this->_redirect($this->view->baseUrl().'/../admin/tintuc');
				}
				else 
				{
					$this->view->error=$form->getMessage();
					$this->view->form=$form;
				}
			}
		}
		
		function editAction()
		{
			$this->view->title='Chỉnh sửa phóng viên';
			$this->view->headTitle('UNC - Admin website');
			$this->view->headLink()->appendStylesheet($this->view->baseUrl().'/application/templates/admin/css/layout.css');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/jquery-1.7.2.min.js','text/javascript');
			$this->view->headScript()->appendFile($this->view->baseUrl().'/application/templates/admin/js/hideshow.js','text/javascript');
			
			$form=$this->setForm();
			if (!$form->isValid($_POST))
			{
				$newsId=$this->_request->getParam('newsid');
				$info=$this->mtintuc->getnewsById($newsId);
				
				$form->setAction($this->view->baseUrl().'/admin/tintuc/edit/newsid/'.$newsId);
				$form->getElement('news_title')->setValue($info['news_title']);
				$form->getElement('news_summary')->setValue($info['news_summary']);
				$form->getElement('news_content')->setValue($info['news_content']);
				$form->getElement('news_author')->setValue($info['news_author']);
				$form->getElement('news_post_date')->setValue($info['news_post_date']);
				$form->getElement('news_modified_date')->setValue($info['news_modified_date']);
				$form->getElement('news_status')->setValue($info['news_status']);
				$form->getElement('category_id')->setValue($info['category_id']);
				
				$this->view->form=$form;
			}
			else
			{
				$id=$this->_request->getParam('newsid');
				$input=$this->_getInput($form);
				
				if ($this->mtintuc->editnews($id, $input))
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
	}