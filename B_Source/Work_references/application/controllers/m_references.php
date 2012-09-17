<?php
	class References extends CI_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			$this->load->model('Mreferences');
		}
		
		function index()
		{
			$this->singleReference();
		}
		
		function singleReference($id=0)
		{
			$data['info']=$this->Mreferences->getRowByColumn('references','id',$id);
			$this->load->view('vsingle',$data);
		}
		
		function scrollableGallery()
		{
			$this->load->view('vscrollable');
		}
	}
?>