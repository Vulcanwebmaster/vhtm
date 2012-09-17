<?php
	class References extends CI_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('Mreferences');
			
			include("mojmojster_database.php");
			$CI->load->helper("requesting");	
		}
		
		function index()
		{
			$this->showReferences();
		}
		
		function showReferences($referenceId=0)
		{
			$ref['pictureId']=$CraftsmanReferences->returnReferencePictureId($referenceId);
			$ref['pictureId']=$CraftsmanReferences->returnReferencePictureId($referenceId);
		}
	}
?>