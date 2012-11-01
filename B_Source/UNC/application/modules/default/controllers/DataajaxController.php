<?php
class DataajaxController extends Zend_Controller_Action
{
	function init()
	{	
		$this->_helper->ajaxContext->addActionContext('sendemail', 'html')
                               		->initContext();
									  
	}	
	public function indexAction()
	{
	}
	
	public function sendmailAction()
	{
		$email = $this->getRequest()->getParam('email');
		$this->view->email = $email;
		$url = $this->getRequest()->getParam('url');
		$this->view->url = $url;
		$to = $email;
		$subject = "Bạn của bạn chia sẻ một bài viết rất hay!";
		$message = "Bạn của bạn chia sẻ một bài viết rất hay. Hãy bấm vào link để xem
					<a href='$url'>$url</a>";
		$from = "lexuantien0311@gmail.com";
		$headers = "From:" . $from;
		mail($to,$subject,$message,$headers);
		$this->_helper->layout->disableLayout();
	}
}