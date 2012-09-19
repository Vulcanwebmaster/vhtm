<?php
class Abc extends CI_Controller{
	function __contruct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->helper('form');
		include("mojmojster_database.php");
		include("mojmojster_session.php");
		$data['categories'] = $CraftsmanReferences->returnAllCategories();
		$data['references'] = $CraftsmanReferences->returnReferencesListUncategorized();
		$this->load->view('vlistReferences',$data);
	}
}
?>