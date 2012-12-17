<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mgioithieu');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/trungtam-tienganh/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
			$this->page();
		}
		
		function page($index=0)
		{
			$config['base_url']=base_url().'gioithieu/admin/page/';
			$config['per_page']=10;
			$config['total_rows']=count($this->Mgioithieu->getListFull('ta_about_us'));
			$config['uri_segment']=3;
			$this->pagination->initialize($config);
			
			$data['title']='Giới thiệu';
			$data['bcCurrent']='giới thiệu';
			$data['list']=$this->Mgioithieu->getListOffset('ta_about_us',10,$index);
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array(
						//'about_category'=>$this->input->post('about_category'),
						'about_content'=>$this->input->post('about_content'),
						);
			return $input;
		}
		
		function delete($id=0)
		{
			if ($this->Mgioithieu->deleteRowByColumn('ta_about_us','about_id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
		}
		