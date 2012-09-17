<?php
// (c) 2012 HeyYa dev team. All rights reserved.

	$CI =& get_instance();
	$CI->load->database();
	
	$CI->load->library('DbCraftsman');
	$CI->load->library('DbCraftsmanLoggedIn');
	$CI->load->library('DbCraftsmanReferences');
	$CI->load->library('DbInquiries');
	$CI->load->library('DbPortalComments');
	$CI->load->library('DbQuestions');
	$CI->load->library('DbSearch');
	$CI->load->library('DbNews');
	$CI->load->library('DbFiles');
	
	$Files = new DbFiles();
	$Craftsman = new DbCraftsman();
	$CraftsmanLoggedIn = new DbCraftsmanLoggedIn();
	$CraftsmanReferences = new DbCraftsmanReferences();
	$Inquiries = new DbInquiries();
	$PortalComments = new DbPortalComments();
	$Questions = new DbQuestions();
	$Search = new DbSearch();
	$News = new DbNews();
	
	$Craftsman->setReferences($Files, $Inquiries, $CraftsmanReferences);
	$CraftsmanReferences->setReferences($Files);
	$Inquiries->setReferences($Files);
	

?>