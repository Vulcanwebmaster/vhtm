<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mgiaovien_footer');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/trungtam-tienganh/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
		//=============================================
			$data['config'] = $this->setupCKEditor('97%','400px');
			//=============================================
				$data['info']=$this->Mgiaovien_footer->getRowByColumn('giaovienft','id','1');
				$data['title']='Sửa';
				$data['bcCurrent']='Giáo viên - Footer';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('tieude1'=>$this->input->post('tieude1'),
						 'tieudee1'=>$this->input->post('tieudee1'),
						 'link1'=>$this->input->post('link1'),
						 'tieude2'=>$this->input->post('tieude2'),
						 'tieudee2'=>$this->input->post('tieudee2'),
						 'link2'=>$this->input->post('link2'),
						 'tieude3'=>$this->input->post('tieude3'),
						 'tieudee3'=>$this->input->post('tieudee3'),
						 'link3'=>$this->input->post('link3'),
						 );
			return $input;
		}
		
		function edit($id=1)
		{
			$this->form_validation->set_rules('tieudee1','Tiêu đề (Việt)','required|trim');
				
			$this->form_validation->set_message('required','Mục %s không được bỏ trống');
			
			$data['config'] = $this->setupCKEditor('97%','400px');
			if ($this->form_validation->run())
			{
				$input=$this->_input();
				if ($this->Mgiaovien_footer->updateRowByColumn('giaovienft','id',$id,$input))
				{
					$this->session->set_userdata('result','Cập nhật thành công');
				}
				else $this->session->set_userdata('result','Cập nhật không thành công');
				$this->index();
			}
			else 
			{
				$data['info']=$this->Mgiaovien_footer->getRowByColumn('giaovienft','id',$id);
				$data['title']='Sửa';
				$data['bcCurrent']='Giáo viên - Footer';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
		}
		
	}
?>