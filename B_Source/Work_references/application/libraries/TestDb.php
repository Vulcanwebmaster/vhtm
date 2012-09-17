<?php
class TestDb 
{

	function runTests()
	{
	
		include("mojmojster_database.php");
		
		$CI->load->helper("testing.php");
		
		//CRAFTSMAN DB TESTING
		//----------------------------------------------------------------
		
		$craftsmanId = $Craftsman->setCraftsman("name","worktype","email","00123456","vision","basic about","more about", "123", "webpages", "address", "-1","-1", "certificate 1");
		
		$employeeId = $Craftsman->setCraftsmanEmployee($craftsmanId,"-1","name","description");
		$employees = $Craftsman->returnCraftsmanEmployees($craftsmanId);
		foreach ($employees as $employee) {
			$employee1 = $Craftsman->getCraftsmanEmployee($employee->id); //this is nonsense, we get employee, then take his id and get him again. the purpose is in testing both methods.
			assertEquals($employee1->name,"name");
			}
			
		

		$Craftsman->deleteCraftsmanEmployee($employeeId);
		$employees = $Craftsman->returnCraftsmanEmployees($craftsmanId);
		
		$a = 0;
		foreach ($employees as $employee)
			$a++;
		assertEquals($a,0);

		$profileViews = $Craftsman->returnCraftsmanProfileViews($craftsmanId);
		assertEquals($profileViews,0);
		
		$Craftsman->incrementProfileViews($craftsmanId);
		$gotCraftsman = $Craftsman->getCraftsman($craftsmanId);
		
		assertEquals($gotCraftsman->profileviews,"1");
		assertEquals($gotCraftsman->address,"address");
		$Craftsman->setCraftsman("name","worktype","email","00123456","vision","basic about","more about", "123", "webpages", "address111", "-1", "-1", "certificate 1", $craftsmanId);
		
		$gotCraftsman1 = $Craftsman->getCraftsman($craftsmanId);
		assertEquals($gotCraftsman1->address,"address111");
		
		
		
		$Craftsman->setCraftsmanCategories($craftsmanId, Array("1","2","4"));
		$categories = $Craftsman->returnCraftsmanCategories($craftsmanId);
		$a = 0;
		foreach ($categories as $category) {
			if ($a == 0) assertEquals($category->category_id, 2);
			elseif ($a == 1) assertEquals($category->category_id, 1);
			elseif ($a == 2) assertEquals($category->category_id, 4);
			$a++;
		}
			
		
		$Craftsman->deleteCraftsmanCategory($craftsmanId, 1);
		$Craftsman->deleteCraftsmanCategory($craftsmanId, 2);
		$Craftsman->deleteCraftsmanCategory($craftsmanId, 4);
		
		$categories = $Craftsman->returnCraftsmanCategories($craftsmanId);
		$a = 0;
		foreach ($categories as $category)
			$a++;
		assertEquals($a,0);
		
		
		
		
		
		
		$rating = $Craftsman->returnCraftsmanRating($craftsmanId, 1);
		assertEquals($rating,3);
		
		
		
		$Craftsman->incrementProfileViews($craftsmanId);
		
		$profileViews1 = $Craftsman->returnCraftsmanProfileViews($craftsmanId);
		assertEquals($profileViews1,2);
		
		
		
		
		
		//QUESTIONS DB TESTING
		//----------------------------------------------------------------
		
		$CI->load->helper("qna"); //TODO: loading of helper should be done inside library.
		
		$questionId = $Questions->addQuestion("123","test user","the question text?");
		$questionData = $Questions->returnQuestionData($questionId);
		assertEquals($questionData->question,"the question text?");
		assertEquals($questionData->asking,"test user");
		$Questions->addAnswer($questionId,1,"question answer","234");
		$questionList = $Questions->listQuestions();
		foreach ($questionList as $row)
		{
			assertEquals($row->answer,"question answer");
			assertEquals($row->answer_timestamp, "234");
		}
		$Questions->editQuestion($questionId, "new question?");
		$Questions->editAnswer($questionId, "new answer.");
		$questionData = $Questions->returnQuestionData($questionId);
		assertEquals($questionData->question,"new question?");
		assertEquals($questionData->answer,"new answer.");
		$Questions->deleteQuestion($questionId);

		$a=0;
		$questionList = $Questions->listQuestions();
		foreach ($questionList as $row)
			$a++;
		assertEquals($a,0);
		
		
		//SEARCH DB TESTING:
		//----------------------------------------------------------------
		//to be done.
		/*
		$Search->returnCraftsmenSearchList($searchParameters = false)
		$Search->returnCraftsmenSearchBoxes($searchParameters = false)
		*/
		
		
		//REFERENCES DB TESTING
		//----------------------------------------------------------------
		$refId = $CraftsmanReferences->setReference($craftsmanId,"123","-1","title","text","comment","author");
		$references = $CraftsmanReferences->returnReferencesList($craftsmanId);
		foreach ($references as $reference)
			assertEquals($reference->id,$refId);

		assertEquals($CraftsmanReferences->returnReferenceTitle($refId),"title");

		$references = $CraftsmanReferences->returnReferencesList($craftsmanId);
		
		
		
		$title = $CraftsmanReferences->returnReferenceTitle($refId);
		assertEquals($title,"title");
		
		$title = $CraftsmanReferences->returnReferenceText($refId);
		assertEquals($title,"text");
		
		$title = $CraftsmanReferences->returnReferenceComment($refId);
		assertEquals($title,"comment");
		
		$CraftsmanReferences->addRating("price", 4, $refId); //accepted as type: price, speed, quali
		$CraftsmanReferences->addRating("quali", 4, $refId); //accepted as type: price, speed, quali
		$CraftsmanReferences->addRating("speed", 4, $refId); //accepted as type: price, speed, quali

		$ratings = $CraftsmanReferences->returnReferenceRatings($refId);
		
		$a = 0;
		foreach ($ratings as $rating)
		{
			if ($a == 0)
				assertEquals($rating->type,"price");
			elseif ($a == 1)
				assertEquals($rating->rating,"4");
			elseif ($a == 2)
				assertEquals($rating->type,"speed");
			$a++;
		}
		
		
		
		$catId = $CraftsmanReferences->setProductCategory($craftsmanId, "category 1");
		$catTitle = $CraftsmanReferences->returnProductCategoryTitle($catId);
		assertEquals($catTitle, "category 1");
		
		$CraftsmanReferences->setProductCategory($craftsmanId, "category 1aaa", $catId);
		$catList = $CraftsmanReferences->listProductCategories($craftsmanId);
		
		foreach ($catList as $category)
			assertEquals($category->category_title, "category 1aaa");
		
		$CraftsmanReferences->deleteProductCategory($catId);
		$CraftsmanReferences->deleteReference($refId);
		$CraftsmanReferences->deleteReferenceRatings($refId);
		
		$catList = $CraftsmanReferences->listProductCategories($craftsmanId);
		$ratings = $CraftsmanReferences->returnReferenceRatings($refId);	
		$references = $CraftsmanReferences->returnReferencesList($craftsmanId);
		
		$a = 0;
		foreach ($catList as $category)
			$a++;
		foreach ($ratings as $rating)
			$a++;
		foreach ($references as $reference)
			$a++;
		assertEquals($a,0);
		
		//$CraftsmanReferences->returnReferencePictureId($referenceId)

		
		//PORTAL COMMENTS DB TESTING:
		//----------------------------------------------------------------
		//to be done.
		
		
		//TODO: Make setPortalComment instead of addPortalComment, allow editing of portal comments through that method.
		$commentId = $PortalComments->addPortalComment("name", 123, "comment content");
		
		$comments = $PortalComments->returnPortalComments($orderBy = "id", $asc = false);
		foreach ($comments as $comment)
			assertEquals($comment->comment,"comment content");
		
		$PortalComments->deletePortalComment($commentId);
		
		
		$comments = $PortalComments->returnPortalComments($orderBy = "timestamp", $asc = true);
		$a = 0;
		foreach ($comments as $comment)
			$a++;
		assertEquals($a,0);
		
		
		//INQUIRIES DB TESTING:
		//----------------------------------------------------------------
		//to be done.
		
		$inquiryId = $Inquiries->addInquiry(123, "title", "Name Surname", "region", "01234567", "mail@mail.mail", "what", "1", "2", "location");
		
		$inquiry = $Inquiries->returnInquiry($inquiryId);
		assertEquals($inquiry->title,"title");
		
		$craftsmanInquiries = $Inquiries->getCraftsmanInquiries($craftsmanId);
		foreach ($craftsmanInquiries as $row)
			assertEquals($row->region,"region");
		
		$Inquiries->addInquiryConnections($inquiryId, Array($craftsmanId));
		$Inquiries->setInquiryChecked($inquiryId, $craftsmanId);
		$Inquiries->setInquiryUnchecked($inquiryId, $craftsmanId);
		
		
		$inquiriesNum = $Craftsman->returnCraftsmanInquiriesNumber($craftsmanId);
		assertEquals($inquiriesNum,1);
		
		$Inquiries->deleteInquiryConnection($inquiryId, $craftsmanId);
		
		$Inquiries->deleteInquiry($inquiryId);
		
		$inquiriesNum = $Craftsman->returnCraftsmanInquiriesNumber($craftsmanId);
		assertEquals($inquiriesNum,0);
		
		$Inquiries->addFileToInquiry($inquiryId, "-1");
		$inquiryFiles = $Inquiries->getInquiriesFiles($inquiryId);
		foreach ($inquiryFiles as $file)
			assertEquals($file->file_id,"-1");
		$Inquiries->deleteFileFromInquiry($inquiryId,"-1");
		
		$a = 0;
		$inquiryFiles = $Inquiries->getInquiriesFiles($inquiryId);
		foreach ($inquiryFiles as $file)
			$a++;
		assertEquals($a,0);
		
		
		
		//CRAFTSMAN LOGGED IN DB TESTING:
		//----------------------------------------------------------------
		//to be done.
		/*
		$CraftsmanLoggedIn->returnNewQuestions($craftsmanId, $lastVisit)
		$CraftsmanLoggedIn->returnNewInquiries($craftsmanId, $lastVisit)
		*/
		
		
		//NEWS DB TESTING:
		//----------------------------------------------------------------
		//to be done.
		
		$newsId = $News->setNews($craftsmanId, "news title", "content here", 123);
		$newsList = $News->returnNews();
		foreach ($newsList as $news)
			assertEquals($news->title, "news title");
			
		$News->setNews($craftsmanId, "news title", "content here111", 123, $newsId);
		$newsList = $News->returnNews();
		foreach ($newsList as $news)
			assertEquals($news->content, "content here111");
		
		$News->deleteNews($newsId);
		
		$newsList = $News->returnNews();
		$a = 0;
		foreach ($newsList as $news)
			$a++;
		assertEquals($a,0);
		
		
		
		//FINALIZATION - CLEANUP OF TESTING ENTITIES
		//----------------------------------------------------------------
		$Craftsman->deleteCraftsman($craftsmanId);
	}
		
}
?>