<?php
class DataajaxController extends Zend_Controller_Action
{
	function init()
	{	
		$this->_helper->ajaxContext->addActionContext('sendemail', 'html')
                               		->initContext();
		$this->_helper->ajaxContext->addActionContext('likecomment', 'html')
                               		->initContext();
		$this->_helper->ajaxContext->addActionContext('viphamcomment', 'html')
                               		->initContext();																		
									  
	}	
	public function indexAction()
	{
	}
	
	/**
	 * Action send 1 news for 1 email (input by client)
	 */
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
	
	/**
	 * Action +1 for like (for 1 comment in 1 news)
	 */
	public function likecommentAction ()
	{
		$idcomment = $this->getRequest()->getParam('idcomment');
		$idnews = $this->getRequest()->getParam('idnews');
		$mTinTuc = new Default_Model_Mtintuc();
		
		$mTinTuc->likeComment($idcomment);
		$this->view->comment = $mTinTuc->getInfoComment($idcomment);
	}
	
	/**
	 * Action +1 for vipham (for 1 comment in 1 news)
	 */
	public function viphamcommentAction()
	{
		$idcomment = $this->getRequest()->getParam('idcomment');
		$idnews = $this->getRequest()->getParam('idnews');
		$mTinTuc = new Default_Model_Mtintuc();
		
		$mTinTuc->viphamComment($idcomment);
		$this->view->comment = $mTinTuc->getInfoComment($idcomment);		
	}
}