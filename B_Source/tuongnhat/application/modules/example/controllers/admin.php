<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Admin_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module = basename(dirname(dirname(__FILE__))); 
		$this->module = strtolower(get_class());
		$this->load->helper('ckeditor');
		//Load model
		$this->load->model('Mexample');
	}
	
	function index()
	{
		$data['ckeditor_1'] = array(			
				'id'    =>   'content_1',
				'path'  =>   'js/ckeditor',	
					
				'config' => array(
				'toolbar'   =>   "Full",     
				'width'     =>   "98%",    
				'height'    =>   '50px',    
				),
				
				'styles' => array(
				
					'style 1' => array (
						'name'      =>   'Blue Title',
						'element'   =>   'h2',
						'styles' => array(
							'color'     =>   'Blue',
							'font-weight'   =>   'bold'
						)
					),
						
					'style 2' => array (
						'name'  =>   'Red Title',
						'element'   =>   'h2',
						'styles' => array(
							'color'         =>   'Red',
							'font-weight'       =>   'bold',
							'text-decoration'   =>   'underline'
						)
					)
				)
			);			
			
		$baseurl = base_url().'example/admin/index';
		$totalrow = $this->Mexample->getuserrow();
		$perpage = 3;
		$urisegment = 4;
		$config = $this->PagingConfig($baseurl,$totalrow,$perpage,$urisegment);
		$this->pagination->initialize($config);
		$data['listpaging']=$this->Mexample->getdatausers($config['per_page'],$this->uri->segment(4));
		$data['paging'] = $this->pagination->create_links();
		$data['list']=$this->Mexample->getcontactus();

		//End config Paging
		if (!$this->input->post('ajax')){
			
			$data['module'] = $this->module;
			$data['page'] = "admin_example_contact";
			$data['title'] = "Contact us";
			
			//Breadcrumb data
			$data['bcCurrent'] = "Contact us";
			
			$this->load->view('admin/container',$data);
		}
		else {
			$this->load->view('admin/admin_example_listmessage_ajax',$data);
		}
		
	}
	function savecontact()
	{
		if($this->Mexample->savecontact()==true)
		{
			redirect('example/admin');
		}
	}
	function getMessage()
	{
		$data['listuserid']=$this->Mexample->getuserid();
		$data['module'] = $this->module;
		$data['title'] = "Contact us - Message Details";
		$data['page'] = "admin_example_detailmessage";
		//Breadcrumb data
		$data['bcLv1']= "Contact us";
		$data['bcLv1_link']= "contactus/admin";
		$data['bcCurrent'] = "Message Details";
		$this->load->view('admin/container',$data);
	}
	function delMessage()
 	{
  		if($this->Mexample->delMessage()==true)
  		{
   			redirect('example/admin');
  		}
 	}


}

/* End of file admin.php */
/* Location: ./application/modules/contactus/controllers/admin.php */