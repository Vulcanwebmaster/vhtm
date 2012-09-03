<?php 
	class Admin extends Admin_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->module=strtolower(get_class());
			
			$this->load->model('Mdoitac');
			$this->load->library('pagination');
			$this->load->library('form_validation');
			$this->load->library('session');
		}
		
		function index()
		{
			if($this->input->post('submit'))
			{
				$this->siteAddPartner();
			}
			else 
			{
				$this->page();
			}
				
		}
		
		function page($index=0)
		{
			$config['base_url']=base_url().'doitac/admin/page';
			$config['per_page']=6;
			$config['uri_segment']='4';
			$config['total_rows']=$this->Mdoitac->CountFull();
			$this->pagination->initialize($config);
			
			$data['list']=$this->Mdoitac->GetList($index);
			$data['bcCurrent'] = "Quản lý đối tác";
			$data['title'] = "DANH SÁCH ĐỐI TÁC";
			$data['module']=$this->module;
			$data['page']='vdoitac_admin_list';
			$this->load->view('admin/container',$data);
		}
		
		function siteAddPartner()
		{
			$data['bcCurrent'] = "Thêm đối tác";
			$data['title'] = "THÊM ĐỐI TÁC";
			$data['module']=$this->module;
			$data['page']='vdoitac_admin_add';
			$this->load->view('admin/container',$data);
		}
		
		function add()
		{
			
			$this->form_validation->set_rules('ten','"Tên đối tác"','required');
			$this->form_validation->set_rules('diachi','"Địa chỉ"','required');
			$this->form_validation->set_rules('dienthoai','"Điện thoại"','required');
			$this->form_validation->set_message('required','%s không được để trống');
			
			if($this->form_validation->run()==false)
			{
				$this->siteAddPartner();
			}
			else
			{
				$this->Mdoitac->Insert();
				$this->page();
			}
		}

		function delete($id)
		{
			$this->Mdoitac->Delete($id);
			$this->page();
		}
		
		function edit($id)
		{
			if($this->input->post('submit'))
			{
				$this->Mdoitac->Update($id);
				$this->page();
			}
			else 
			{
				$this->siteEdit($id);
			}
		}
		
		function siteEdit($id)
		{
			$data['doitac']=$this->Mdoitac->getDoiTac($id);
			$data['bcCurrent'] = "Sửa thông tin đối tác";
			$data['title'] = "SỬA THÔNG TIN ĐỐI TÁC";
			$data['module']=$this->module;
			$data['page']='vdoitac_admin_edit';
			$this->load->view('admin/container',$data);
		}
	}
?>