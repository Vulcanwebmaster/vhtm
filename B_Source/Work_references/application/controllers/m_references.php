<?php
	class M_references extends CI_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
		}
		
		public function index()
		{
			$this->load->view('RefListUncategoried');
		}
		
		//===== METHOD 1 ===========
		function showSingle($referenceId=0)
		{
			include("mojmojster_database.php");
			
			$fileId=$CraftsmanReferences->returnReferencePictureId($referenceId);
			$ref['pictureName']=$Files->returnFileName($fileId);
			$ref['title']=$CraftsmanReferences->returnReferenceTitle($referenceId);
			$ref['content']=$CraftsmanReferences->returnReferenceText($referenceId);
			$ref['comment']=$CraftsmanReferences->returnReferenceComment($referenceId);
			$ref['commentAuthor']=$CraftsmanReferences->returnReferenceCommentAuthor($referenceId);
			$ref['rate']=$CraftsmanReferences->returnReferenceRatings($referenceId);
			
			$this->load->view('RefSingle',$ref);
		}
		
		//===== METHOD 2 ===========
		function showScrollableGallery()
		{
			include("mojmojster_database.php");
			
			$ref['references']=$CraftsmanReferences->returnReferencesListFull();
			$pictures=array();
			
			foreach ($ref['references'] as $item)
			{
				$pictures[]=$CraftsmanReferences->returnFileName($item->file_id);
			}
			$ref['pictures']=$pictures;
			$this->load->view('RefGallery',$ref);
		}
		
		//===== METHOD 4 ===========
		function showCategoriedReferences($craftsmanId='1')
		{
			$this->load->helper('url');
			$this->load->helper('form');
			include("mojmojster_database.php");
			
			$ref['listCategories']=$Craftsman->returnCraftsmanCategories($craftsmanId);
			$ref['craftsmanId']=$craftsmanId;
			$this->load->view('RefListCategoried-tiennd',$ref);
		}
		
		function showListCategoried($craftsmanId='1',$categoryId='0')
		{
			$this->load->helper('url');
			include("mojmojster_database.php");
			
			$ref['listReferences']=$CraftsmanReferences->returnReferencesList($craftsmanId,$categoryId);
			$pictures=array();
			foreach ($ref['listReferences'] as $item)
			{
				$pictures[]=$Files->returnFileName($item->file_id);
			}
			$ref['pictures']=$pictures;
			
			$this->load->view('RefList',$ref);
		}
		
		//===== METHOD 5 ===========
		public function showUncategoriedReferencesWithoutEdit()
		{
			include("mojmojster_database.php");
			$data['ds']=$CraftsmanReferences->returnReferencesListCategoryId($categoryId = '-1');
			
			$this->load->view('vtrungnt',$data);		
		}
		public function showCategoriedReferencesWithoutEdit(){
			include("mojmojster_database.php");
			$data['ds']=$CraftsmanReferences->returnReferencesListFull();
			
			$this->load->view('vtrungnt',$data);
	}
	}
?>