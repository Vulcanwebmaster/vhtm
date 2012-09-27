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
			
			$this->getListByLink($this->dantri[0]);
			$countNews=count($this->title);
			for ($i=0; $i<$countNews; $i++)
			{
				$new=array('news_title'=>$this->title[$i],
							'news_summary'=>$this->description[$i],
							'news_content'=>$this->content[$i]);
				$this->mtintuc->insertNews($new);
			}
			//die();
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
	}