<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// (c) 2012 HeyYa dev team. All rights reserved.

class Welcome extends CI_Controller {

	public function index()
	{
		
		
		//							DATABASE INTERFACE
		//=================================================================
		//The only necessary thing to initialize database access:
		include("mojmojster_database.php");
		
		//Get single entity from database, example:
		/*$myCraftsman = $Craftsman->getCraftsman(1);
		echo $myCraftsman->id;
		echo $myCraftsman->name;*/
		
		
		//Get array of entities from database, example:
		/*$myEmployees = $Craftsman->returnCraftsmanEmployees(1);
		foreach ($myEmployees as $employee)
		{
			echo $employee->picture_id;
			echo $employee->name;
		}*/
		
		//$lastAddedInquiryId = $Inquiries->addInquiry(123, "test1", "test2", "test3", "test4", "test5", "test6", "test7", "test8", 123);
		//$Inquiries->addInquiryConnections($lastAddedInquiryId,Array("1","2"));
		//=================================================================
			
			
		
		
		
		//						SESSIONS/CONTEXT INTERFACE
		//=================================================================
		//The only necessary thing to UI printing class access:
		include("mojmojster_session.php");
		
		//echo $Context->getUid();
		//echo $Context->getRole();
		
		//=================================================================
		
	
	}
}