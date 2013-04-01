<?php
	class Admin extends Admin_Controller
	{
		private $module;
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mtintuc');
			$this->load->library('form_validation');
			$this->load->library('session');
			
			//=============================================
			$this->load->library('Ckeditor',array('instanceName' => 'CKEDITOR1','basePath' => base_url()."assets/niwcom/ckeditor/", 'outPut' => true));                             
			//=============================================
		}
		
		function index()
		{
			$data['tag_name']=$this->Mtintuc->getListFull('tagcloud');
			$data['title']='Tin tức';
			$data['bcCurrent']='Tin tức';
			$data['list']=$this->Mtintuc->getListFull('tintuc');
			$data['module']=$this->module;
			$data['page']='admin_vlist';
			$this->load->view('admin/container',$data);
		}
		
		function _input()
		{
			$input=array('tieude'=>$this->input->post('tieude'),
						'tieudee'=>$this->input->post('tieudee'),
						'duyet'=>$this->input->post('duyet'),
						'noidung'=>$this->input->post('noidung'),
						'noidunge'=>$this->input->post('noidunge'),
						'hinhanh'=>$this->input->post('hinhanh'),
						'alias'=>$this->getAliasByName($this->input->post('tieude')),
						);
			return $input;
		}
		
		function insert()
		{
			if (!$this->input->post('tieude'))
			{
				$data['tag_name']=$this->Mtintuc->getListFull('tagcloud');
				$data['config'] = $this->setupCKEditor('97%','200px');
				$data['title']='Thêm Tin tức';
				$data['bcCurrent']='Tin tức';
				$data['module']=$this->module;
				$data['page']='admin_vinsert';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('tieude','Tên','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					$inserId=$this->Mtintuc->insertNewRow2('tintuc',$input);
					if ($inserId != 0)
					{
						if($this->input->post('tags')!=NULL){
						foreach($this->input->post('tags') as $value){
							 $this->Mtintuc->insertNewRow('tintuc_tags',array('id_tags'=>$value,'id_tintuc'=>$inserId));
						 } }
						$this->session->set_userdata('result','Thêm mới thành công');
					}
					else $this->session->set_userdata('result','Thêm mới không thành công');
					$this->index();
				}
				else 
				{
					$data['tag_name']=$this->Mtintuc->getListFull('tagcloud');
					$data['config'] = $this->setupCKEditor('97%','200px');
					$data['title']='Thêm Tin tức';
					$data['bcCurrent']='Tin tức';
					$data['module']=$this->module;
					$data['page']='admin_vinsert';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function edit($id=0)
		{
			//=============================================
			$data['config'] = $this->setupCKEditor('97%','200px');
			//=============================================
			if (!$this->input->post('tieude'))
			{
				$data['tag_name']=$this->Mtintuc->getListFull('tagcloud');
				$data['info']=$this->Mtintuc->getRowByColumn('tintuc','id',$id);
				$data['tag_tintuc']=$this->Mtintuc->getListByColumn('tintuc_tags','id_tintuc',$id);
				$data['title']='Sửa Tin tức';
				$data['bcCurrent']='Tin tức';
				$data['module']=$this->module;
				$data['page']='admin_vedit';
				$this->load->view('admin/container',$data);
			}
			else 
			{
				$this->form_validation->set_rules('tieude','Tiêu đề (Việt)','required|trim');
				
				$this->form_validation->set_message('required','Mục %s không được bỏ trống');
				
				if ($this->form_validation->run())
				{
					$input=$this->_input();
					if ($this->Mtintuc->updateRowByColumn('tintuc','id',$id,$input))
					{
						$this->Mtintuc->deleteRowByColumn('tintuc_tags','id_tintuc',$id);
						foreach($this->input->post('tags') as $value){
							$this->Mtintuc->insertNewRow('tintuc_tags',array('id_tags'=>$value,'id_tintuc'=>$id));
						}
						$this->session->set_userdata('result','Cập nhật thành công');
					}
					else $this->session->set_userdata('result','Cập nhật không thành công');
					$this->index();
				}
				else 
				{
					$data['tag_name']=$this->Mtintuc->getListFull('tagcloud');
					$data['info']=$this->Mtintuc->getRowByColumn('tintuc','id',$id);
					$data['title']='Sửa Tin tức';
					$data['bcCurrent']='Tin tức';
					$data['module']=$this->module;
					$data['page']='admin_vedit';
					$this->load->view('admin/container',$data);
				}
			}
		}
		
		function delete($id=0)
		{
			if ($this->Mtintuc->deleteRowByColumn('tintuc','id',$id))
			{
				$this->session->set_userdata('result','Xóa thành công');
			}
			else $this->session->set_userdata('result','Xóa không thành công');		
			$this->index();
		}
	}
?>