<?php
	class M_references extends CI_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
		}
		
		function index()
		{
			$this->showSingle();
		}
		
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
		
		function showScrollableGallery()
		{
			include("mojmojster_database.php");
			
			$ref['references']=$CraftsmanReferences->returnReferencesListFull();
			$pictures=array();
			
			foreach ($ref['references'] as $item)
			{
				$pictures[]=$Files->returnFileName($item->file_id);
			}
			$ref['pictures']=$pictures;
			$this->load->view('RefGallery',$ref);
		}
	}
?>