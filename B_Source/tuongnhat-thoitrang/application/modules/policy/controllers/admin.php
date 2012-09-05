<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Admin_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->module = basename(dirname(dirname(__FILE__))); 
		$this->module = strtolower(get_class());
		$this->load->model('Mpolicy');
	}
	
	function index()
	{
		//=============================================
		$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/thoitrang/js/ckeditor/", 'outPut' => true));                             
		$data['config'] = $this->setupCKEditor();
		//=============================================
		
		$data['policy']=$this->Mpolicy->getListPolicy();	 
		$data['module'] = $this->module;
		$data['page'] = "admin_policy";
		$data['title'] = "Chính sách";
		$data['bcCurrent'] = "Chính sách";
		
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