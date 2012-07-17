<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Admin_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__))); 
		$this->module = strtolower(get_class());
		$this->load->model('Mcontactus');
		$this->load->helper('form');
		$this->load->library('pagination');
	}
	
	function index()
	{
		//Paging config
		$config['base_url'] = base_url().'contactus/admin/index';
		$config['total_rows'] = $this->Mcontactus->getuserrow();
		$config['per_page'] = 5; 
		$config['uri_segment'] = 4;
		//Customizing the "Digit" Link
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		//Customizing the "Next" Link
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		//Customizing the "Previous" Link
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		//Customizing the First Link
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		//Customizing the Last Link
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		//Customizing the "Current Page" Link
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</li></a>';
		$this->pagination->initialize($config); 
		$data['listpaging']=$this->Mcontactus->getdatausers($config['per_page'],$this->uri->segment(4));
		$data['paging'] = $this->pagination->create_links();
		

		//End config Paging
		$data['list']=$this->Mcontactus->getcontactus();
		$data['module'] = $this->module;
		$data['page'] = "admin_contactus_contact";
		$data['title'] = "Contact us";
		$this->load->view('admin/container',$data);
	}
	function savecontact()
	{
		if($this->Mcontactus->savecontact()==true)
		{
			redirect('contactus/admin');
		}
	}
	function getMessage()
	{
		$data['listuserid']=$this->Mcontactus->getuserid();
		$data['module'] = $this->module;
		$data['title'] = "Contact us - Message Details";
		$data['page'] = "admin_contactus_detailmessage";
		$this->load->view('admin/container',$data);
	}
	function delMessage()
 	{
  		if($this->Mcontactus->delMessage()==true)
  		{
   			redirect('contactus/admin');
  		}
 	}


}

/* End of file admin.php */
/* Location: ./application/modules/contactus/controllers/admin.php */