<?php
// (c) 2012 HeyYa dev team. All rights reserved.

//TODO: hard-coded mojmojster.references table name..

class DbCraftsman {

	protected $Files;
	protected $Inquiries;
	protected $CraftsmanReferences;
	
	function setReferences($Files, $Inquiries, $CraftsmanReferences)
	{
		$this->Files = $Files;
		$this->Inquiries = $Inquiries;
		$this->CraftsmanReferences = $CraftsmanReferences;
	}

	function getCraftsman($craftsmanId)
	{
		$CI =& get_instance();
		$query = $CI->db->query("SELECT * FROM craftsmen WHERE id = '$craftsmanId'");
		
		foreach ($query->result() as $row)
			return $row;
	}

	function returnCraftsmanEmployees($craftsmanId)
	{
		//vrne seznam zaposlenih
		
		$CI =& get_instance();
		$query = $CI->db->query("SELECT * FROM employees WHERE craftsman_id = '$craftsmanId'");
		
		//return json_encode($query->result());
		
		return $query->result();
		
	}

	function incrementProfileViews($craftsmanId)
	{
		$CI =& get_instance();
		$query = $CI->db->query("SELECT profileviews FROM craftsmen WHERE id = '$craftsmanId'");
		
		$profileviews = 0;
		foreach ($query->result() as $row)
			$profileviews = $row->profileviews;
		$profileviews++;
		
		$query = $CI->db->query("UPDATE craftsmen SET profileviews = '$profileviews' WHERE id = '$craftsmanId'");
	}

	function setCraftsman($name, $workType, $email, $phone, $vision, $basicAbout, $moreAbout, $mapLocation, $webPages, $address, $backgroundPictureId, $logoPictureId, $certificates, $craftsmanId = false)
	{
		//doda ali spremeni mojstra (ce je podan opcijski id, ga spremeni, ce id-ja ni ga pa doda).
		$timestamp = time();
	
		$CI =& get_instance();
		if ($craftsmanId)
		{
			$query = $CI->db->query("UPDATE craftsmen SET name = '$name', work_type = '$workType', email = '$email', phone = '$phone', vision = '$vision', more_about = '$moreAbout', basic_about = '$basicAbout', map_location = '$mapLocation', web_pages = '$webPages', address = '$address', bg_file_id = '$backgroundPictureId', logo_file_id = '$logoPictureId', certificates = '$certificates' WHERE id = '$craftsmanId'");
			return true;
		}
		else
		{
			$query = $CI->db->query("INSERT INTO craftsmen VALUES ('','0','$timestamp','$name','$workType','$email','$phone','$vision','$moreAbout','$basicAbout','$mapLocation','$webPages','$address','$backgroundPictureId','$logoPictureId','$certificates')");
			return $CI->db->call_function('insert_id');
		}
	}

	function setCraftsmanEmployee($craftsmanId, $pictureId, $name, $description, $employeeId = false)
	{
		$CI =& get_instance();
		
		if ($employeeId)
		{
			$query = $CI->db->query("UPDATE employees SET craftsman_id = '$craftsmanId', picture_id = '$pictureId', name = '$name', $description = '$description' WHERE id = '$employeeId'");
			return true;
		}
		else
		{
			$query = $CI->db->query("INSERT INTO employees VALUES ('','$craftsmanId','$pictureId','$name','$description')");
			return $CI->db->call_function('insert_id');
		}
	}

	function returnCraftsmanCategories($craftsmanId)
	{
		$CI =& get_instance();
		$query = $CI->db->query("SELECT *
						FROM categories
						LEFT JOIN craftsmencategories ON categories.id = craftsmencategories.category_id
						WHERE craftsmencategories.craftsman_id = '$craftsmanId' ORDER BY categories.category");
		return $query->result();
	}
	
	function setCraftsmanCategories($craftsmanId, $categories)
	{
		$CI =& get_instance();
		
		foreach ($categories as $category)
			$query = $CI->db->query("INSERT INTO craftsmencategories VALUES ('$craftsmanId','$category')");
	}

	function returnCraftsmanInquiriesNumber($craftsmanId, $monthly = false)
	{

		$monthlyLimit = "";
		
		if ($monthly)
		{
			$timeLimit = time()-2592000; //30*24*60*60 = 2592000
			$monthlyLimit = " AND inquiries.timestamp > '$timeLimit'";
		}
		
		$CI =& get_instance();
		
		$query = $CI->db->query("SELECT COUNT( inquiries.id ) AS inquiries_count
									FROM inquiries
									LEFT JOIN sentinquiries ON sentinquiries.inquiry_id = inquiries.id
									WHERE sentinquiries.craftsman_id = '$craftsmanId'$monthlyLimit");
									
		foreach ($query->result() as $row)
			return $row->inquiries_count;
	}
	
	function returnCraftsmanProfileviews($craftsmanId)
	{
		$CI =& get_instance();
		$query = $CI->db->query("SELECT profileviews FROM craftsmen where id = '$craftsmanId'");
		foreach ($query->result() as $row)
			return $row->profileviews;
	}
	
	function returnCraftsmanRating($craftsmanId, $ratingType)
	{
		//TODO: SET CRITERIA FOR RATINGS.
		return 3;
	}
	
	function deleteCraftsman($id) //also deletes craftsman's employees, references, categories and connected inquiries.
	{
	
		$CI =& get_instance();
		$craftsmanData = $this->getCraftsman($id);
		$this->Files->deleteFile($craftsmanData->bg_file_id);
		$this->Files->deleteFile($craftsmanData->logo_file_id);
		
		$query = $CI->db->query("DELETE FROM craftsmen WHERE id = '$id'");
		$query = $CI->db->query("DELETE FROM craftsmencategories WHERE craftsman_id = '$id'");
		
		$inquiriesList = $this->Inquiries->getCraftsmanInquiries($id);
		foreach ($inquiriesList as $inquiry)
		$this->deleteCraftsmanEmployee($inquiry->id);
		
		$employeeList = $this->returnCraftsmanEmployees($id);
		foreach ($employeeList as $employee)
			$this->deleteCraftsmanEmployee($employee->id);
			
		$referenceList = $this->CraftsmanReferences->returnReferencesList($id);
		foreach ($referenceList as $reference)
			$CraftsmanReferences->deleteReference($reference->id);
	}
	
	function deleteCraftsmanEmployee($id)
	{
		$CI =& get_instance();
		
		$employee = $this->getCraftsmanEmployee($id);
		$this->Files->deleteFile($employee->file_id);

		$query = $CI->db->query("DELETE FROM employees WHERE id = '$id'");
		
		
	}
	
	function deleteCraftsmanCategory($craftsmanId, $categoryId)
	{
		$CI =& get_instance();
		$query = $CI->db->query("DELETE FROM craftsmencategories WHERE craftsman_id = '$craftsmanId' AND category_id = '$categoryId'");
	}
	
	function getCraftsmanEmployee($employeeId)
	{
		$CI =& get_instance();
		$query = $CI->db->query("SELECT * FROM employees WHERE id = '$employeeId'");
		
		foreach ($query->result() as $employee)
			return $employee;
	}
	
	//=================== EXTENDS FUNCTION========================================================
	function addCategory($newCategory)
	{
		$CI =& get_instance();
		$query = $CI->db->query("INSERT INTO categories WHERE category = '$newCategory'");
	}
}

?>