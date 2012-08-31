<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Admin_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module = basename(dirname(dirname(__FILE__))); 
		$this->module = strtolower(get_class());
		$this->load->model('Mpolicy');
		$this->load->helper('ckeditor');
	}
	
	function index()
	{
		$data['policy']=$this->Mpolicy->getListPolicy();	 
		$data['module'] = $this->module;
		$data['page'] = "admin_policy";
		$data['title'] = "Chính sách";
		$data['bcCurrent'] = "Chính sách";
		
		$data['content1'] = $this->setupCKEditor("content1");
		$data['content2'] = $this->setupCKEditor("content2");
		$data['content3'] = $this->setupCKEditor("content3");
		$data['content4'] = $this->setupCKEditor("content4");
		$data['content5'] = $this->setupCKEditor("content5");
		
		$this->load->view('admin/container',$data);
	}
	
	function updatePolicy()
	{
		if($this->Mpolicy->updatePolicy()==true)
		{
			echo '<script language=javascript>
							alert("Cập nhật thành công!");
						</script>';
			redirect(base_url().'policy/admin','refresh');
		}
	}	
}
?>