<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module = basename(dirname(dirname(__FILE__))); 
			$this->module = strtolower(get_class());
			//load model
			$this->load->model('Mgiaohang');
			$this->load->helper('ckeditor');
			
			$this->load->library('form_validation');
			$this->load->library('session');
		}
		
		function _getInput()
		{
			$input=array('tieudev'=>$this->input->post('tieudev'),
						'tieudee'=>$this->input->post('tieudee'),
						'noidungv'=>$this->input->post('noidungv'),
						'noidunge'=>$this->input->post('noidunge')
			);
			return $input;
		}
		
		function index()
		{
			//================SET UP CKEDITOR=============================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/bakery/js/ckeditor/", 'outPut' => true));                             
			$data['config'] = $this->setupCKEditor();
			//==============================================================
			$data['info']=$this->Mgiaohang->getData();
			$data['bcCurrent']='Giao hang';
			$data['title']='Giao hang';
			$data['module']=$this->module;
			$data['page']='admin_giaohang_detail';
			$this->load->view('admin/container',$data);
		}
		
		function update()
		{
			$input=$this->_getInput();
			if ($this->Mgiaohang->update($input))
			{
				$this->session->set_userdata('giaohang-update-result','Cap nhat thanh cong');
			}
			else $this->session->set_userdata('giaohang-update-result','Cap nhat khong thanh cong');
			$this->index();
		}
	}
?>