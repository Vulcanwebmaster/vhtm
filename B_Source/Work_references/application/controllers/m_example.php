<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// (c) 2012 HeyYa dev team. All rights reserved.

class m_example extends CI_Controller {

	public function index()
	{
		include("mojmojster_database.php");				//See Framework reference.
		$CI->load->helper("requesting");				//See Framework reference.

		$requestedVariable = safeRequest("variable");	//See Framework reference.
		$myCraftsman = $Craftsman->getCraftsman(1); 	//See Framework reference.

		$viewData['passedVariable'] = $requestedVariable;
		$viewData['craftsmanName'] = $myCraftsman->name;
		$CI->load->view('ExaMainView',$viewData);
	
	}
}

?>