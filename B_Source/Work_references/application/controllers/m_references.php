<?php
	class M_references extends CI_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->helper('url');
			session_start();
		}
		
		public function index()
		{
			//$this->load->view('RefListUncategoried');
		}
		
		//===== METHOD 1 ===========
		function showLastReference($craftsmanId='1')
		{
			include("mojmojster_database.php");
			
			$list=$CraftsmanReferences->returnReferencesList($craftsmanId);
			if (count($list)>0)
				$referenceId=$list[count($list)-1]->id;
			else $referenceId=false;
			
			if ($referenceId)
			{
				$fileId=$CraftsmanReferences->returnReferencePictureId($referenceId);
				$ref['pictureName']=$Files->returnFileName($fileId);
				$ref['title']=$CraftsmanReferences->returnReferenceTitle($referenceId);
				$ref['content']=$CraftsmanReferences->returnReferenceText($referenceId);
				$ref['comment']=$CraftsmanReferences->returnReferenceComment($referenceId);
				$ref['commentAuthor']=$CraftsmanReferences->returnReferenceCommentAuthor($referenceId);
				$ref['rate']=$CraftsmanReferences->returnReferenceRatings($referenceId);
			}
			else $ref['message']="Can not find any items...";
			
			$this->load->view('RefSingle',$ref);
		}
		
		//===== METHOD 2 ===========
		function showScrollableGallery($craftsmanId='0')
		{
			include("mojmojster_database.php");
			
			$listCategory=$Craftsman->returnCraftsmanCategories($craftsmanId);
			$pictures=array();
			$references=array();
			foreach ($listCategory as $category)
			{
				$listReferences=$CraftsmanReferences->returnReferencesList($craftsmanId, $category->id);
				foreach ($listReferences as $item)
				{
					$references[]=$item;
					$pictures[]=$item->file_id;
				}
			}
			$listUncategoried=$CraftsmanReferences->returnReferencesList($craftsmanId);
			foreach ($listUncategoried as $item)
			{
				$references[]=$item;
				$pictures[]=$item->file_id.".sav";
			}
			$ref['pictures']=$pictures;
			$ref['references']=$references;
			$this->load->view('RefGallery',$ref);
		}
		
		//======= METHOD 3 =======//
		public function showMore($craftsmanId='1',$categoryId = '-1')
		{
			$this->load->helper('url');
			$this->load->helper('form');
			include("mojmojster_database.php");
			
			$data['listCategories'] = $Craftsman->returnCraftsmanCategories($craftsmanId);
			$data['references'] = $CraftsmanReferences->returnReferencesList($craftsmanId, $categoryId);
			$pictures=array();
			$rates=array();
			foreach ($data['references'] as $item)
			{
				$pictures[]=$item->file_id.".sav";
				$rates[]=$CraftsmanReferences->returnReferenceRatings($item->file_id);
			}
			$data['pictures'] = $pictures;
			$data['rates']=$rates;
			
			$this->load->view('RefShowMore',$data);
		}
		
		public function showUncategoriedReferences($craftsmanId='1')
		{
			$_SESSION['craftsmanId']=$craftsmanId;
			$_SESSION['categoried']=false;
			$this->load->helper('url');
			$this->load->helper('form');
			include("mojmojster_database.php");
			
			$data['listCategories']=$CraftsmanReferences->listProductCategories($craftsmanId);
			$data['references'] = $CraftsmanReferences->returnReferencesListLimit($craftsmanId, '-1');
			
			$pictures=array();
			$rates=array();
			foreach ($data['references'] as $item)
			{
				$pictures[]=$item->file_id.'.sav';
				if (count($CraftsmanReferences->returnReferenceRatings($item->id))>0)
					$rates[]=$CraftsmanReferences->returnReferenceRatings($item->id);
				else $rates[]=array(false,false,false);
			}
			$data['pictures'] = $pictures;
			$data['rates']=$rates;
			$data['craftsmanId']=$craftsmanId;
			
			$this->load->view('RefListUncategoried',$data);
		}
		
		public function deleteRef($referenceId, $categoried)
		{
			$this->load->helper('url');
			$this->load->helper('form');
			include("mojmojster_database.php");
			
			$CraftsmanReferences->deleteReference($referenceId);
			if ($categoried=='true')
				redirect(base_url().'index.php/m_references/showCategoriedReferences/'.$_SESSION['craftsmanId'],'refresh');
			else redirect(base_url().'index.php/m_references/showUncategoriedReferences/'.$_SESSION['craftsmanId'],'refresh');
		}
		
		public function addCategory($craftsmanId='1')
		{
			$this->load->helper('url');
			include("mojmojster_database.php");
			
			$categoryTitle = $this->input->post('category_title');
	 		$CraftsmanReferences->setProductCategory($craftsmanId, $categoryTitle, $categoryId = false);
			redirect(base_url().'index.php/m_references/showCategoriedReferences/'.$craftsmanId,'refresh');
		}
		
		public function upload($craftsmanId='1')
		{
			include("mojmojster_database.php");
			
			$title = $this->input->post('title');
			$text = $this->input->post('text');
			$categoryId = $this->input->post('category_id');
			
			$fileFieldName = 'userfile';
			$Files->storeFile($fileFieldName, $type='file');
			$image = mysql_insert_id();
			$CraftsmanReferences->setReference($craftsmanId,'',$image,$title,$text,$comment='',$comment_author='',$categoryId);
			
			if ($categoryId==-1)
				redirect(base_url().'index.php/m_references/showUncategoriedReferences/'.$craftsmanId.'/'.$categoryId,'refresh');
			else
				redirect(base_url().'index.php/m_references/showCategoriedReferences/'.$craftsmanId,'refresh');
		}
		
		//===== METHOD 4 ===========
		function showCategoriedReferences($craftsmanId='0', $categoryId='0')
		{
			$_SESSION['categoried']=true;
			$_SESSION['craftsmanId']=$craftsmanId;
			$this->load->helper('url');
			$this->load->helper('form');
			include("mojmojster_database.php");
			
			$ref['listCategories']=$CraftsmanReferences->listProductCategories($craftsmanId);
			$ref['default_categoryId']=$categoryId;
			$ref['craftsmanId']=$craftsmanId;
			$this->load->view('RefListCategoried',$ref);
		}
		
		function showListCategoried($craftsmanId='1',$categoryId='0')
		{
			$_SESSION['craftsmanId']=$craftsmanId;
			if (isset($_SESSION['categoryid']))
				unset($_SESSION['categoryid']);
			$_SESSION['categoryid']=$categoryId;
			$this->load->helper('url');
			include("mojmojster_database.php");
			
			$ref['listReferences']=$CraftsmanReferences->returnReferencesList($craftsmanId,$categoryId);
			$ref['listCategories']=$CraftsmanReferences->listProductCategories($craftsmanId);
			$ref['craftsmanId']=$craftsmanId;
			$pictures=array();
			foreach ($ref['listReferences'] as $item)
			{
				$pictures[]=$item->file_id.".sav";
			}
			$ref['pictures']=$pictures;
			
			$this->load->view('RefList',$ref);
		}
		
		//===== METHOD 5 ===========
		public function showUncategoriedReferencesWithoutEdit($craftsmanId='0')
		{
			$_SESSION['craftsmanId']=$craftsmanId;
			$_SESSION['categoried']=false;
			include("mojmojster_database.php");
			$data['ds']=$CraftsmanReferences->returnReferencesList($craftsmanId, $categoryId = '-1');
			$pictures=array();
			$rates=array();
			foreach ($data['ds'] as $item)
			{
				$pictures[]=$item->file_id.'.sav';
				if (count($CraftsmanReferences->returnReferenceRatings($item->id))>0)
					$rates[]=$CraftsmanReferences->returnReferenceRatings($item->id);
				else $rates[]=array(false,false,false);
			}
			$data['pictures']=$pictures;
			$data['rates']=$rates;
			$this->load->view('RefListUncategoriedWithoutEdit',$data);		
		}
		
		//===== METHOD 6 ===========
		public function showCategoriedReferencesWithoutEdit($craftsmanId='0'){
			$_SESSION['craftsmanId']=$craftsmanId;
			$_SESSION['categoried']=true;
			include("mojmojster_database.php");
		
			$data['listCategories']=$CraftsmanReferences->listProductCategories($craftsmanId);
			$data['craftsmanId']=$craftsmanId;
			$this->load->view('RefListCategoriedWithoutEdit',$data);
		}
		
		function showListCategoriedWithoutEdit($craftsmanId='1',$categoryId='0')
		{
			$_SESSION['craftsmanId']=$craftsmanId;
			$this->load->helper('url');
			include("mojmojster_database.php");
			
			$ref['listReferences']=$CraftsmanReferences->returnReferencesList($craftsmanId,$categoryId);
			$pictures=array();
			foreach ($ref['listReferences'] as $item)
			{
				$pictures[]=$item->file_id.".sav";
			}
			$ref['pictures']=$pictures;
			
			$this->load->view('RefListWithoutEdit',$ref);
		}
	}
?>