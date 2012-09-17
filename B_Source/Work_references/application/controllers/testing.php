<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// (c) 2012 HeyYa dev team. All rights reserved.

class Testing extends CI_Controller {

	public function index()
	{
	
		$this->load->library("TestDb");
		$DbTest = new TestDb();
		
		//All tests should get passed on an empty database.
		
		$DbTest->runTests();
		
		
	}
}
