<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Admin extends Admin_Controller {
	
		function __construct()
		{
			parent::__construct();
			$this->module = basename(dirname(dirname(__FILE__))); 
			$this->module = strtolower(get_class());
			//Load model
			$this->load->model('Mtaikhoan');
			$this->load->library('pagination');
			$this->load->library('session');
			$this->load->helper('url');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('account_username', 'Tên đăng nhập', 'trim|required|min_length[5]|max_length[20]|xss_clean');
			$this->form_validation->set_rules('account_password', 'Mật khẩu', 'required');
			$this->form_validation->set_rules('account_fullname', 'Họ và tên', 'required');
			$this->form_validation->set_rules('account_address', 'Địa chỉ', 'required');
			$this->form_validation->set_rules('account_phonenumber', 'Số điện thoại', 'required|numeric');
			$this->form_validation->set_rules('account_email', 'Địa chỉ email', 'required|valid_email');
			$this->form_validation->set_message('required','%s không được để trống');
			$this->form_validation->set_message('numeric','%s chưa đúng định dạng');
			$this->form_validation->set_message('valid_email','%s chưa đúng định dạng');
			$this->form_validation->set_message('min_length','%s ít nhất là 5 ký tự');
			$this->form_validation->set_message('max_length','%s ít nhất là 20 ký tự');
		}
		
		function index()
		{
			$config['base_url'] = base_url().'taikhoan/admin/index';
			$config['total_rows'] = $this->Mtaikhoan->count();
			$config['per_page'] = 6; 
			$this->pagination->initialize($config); 
			$data['listpaging'] = $this->Mtaikhoan->getList($config['per_page'],$this->uri->segment(4));
			
			$data['page'] = 'admin_taikhoan_list';
			$data['title'] = 'Quản lý tài khoản';
			$data['bcCurrent'] = 'Danh sách tài khoản';
			$data['module'] = $this->module;
			$this->load->view('admin/container',$data);
		}
		
		function insert()
		{
			if($this->input->post('submit')){
				$this->session->set_userdata('account_username',$this->input->post('account_username'));
				$this->session->set_userdata('account_password',$this->input->post('account_password'));
				$this->session->set_userdata('account_fullname',$this->input->post('account_fullname'));
				$this->session->set_userdata('account_phonenumber',$this->input->post('account_phonenumber'));
				$this->session->set_userdata('account_address',$this->input->post('account_address'));
				$this->session->set_userdata('account_email',$this->input->post('account_email'));
				if($this->form_validation->run()){
					if($this->Mtaikhoan->isExisted($this->input->post('account_username'))){
						$this->session->set_userdata('existed','Tên đăng nhập đã tồn tại');
						redirect(base_url().'taikhoan/admin/insert', 'refresh');
					}
					else{
						$this->session->unset_userdata('account_username');
						$this->session->unset_userdata('account_password');
						$this->session->unset_userdata('account_fullname');
						$this->session->unset_userdata('account_phonenumber');
						$this->session->unset_userdata('account_address');
						$this->session->unset_userdata('account_email');
						if($this->Mtaikhoan->insert())
						{
							$this->session->set_userdata('session','Thêm mới thành công');
						}
						else $this->session->set_userdata('session','Thêm mới không thành công');
						redirect(base_url().'taikhoan/admin', 'refresh');
					}
				}
				else {
					$data['page'] = 'admin_taikhoan_insert';
					$data['bcCurrent'] = 'Thêm sản phẩm';
					$data['title'] = 'Thêm sản phẩm';
					$data['module'] = $this->module;
					$this->load->view('admin/container',$data);
				}
			}
			else {
				$data['page'] = 'admin_taikhoan_insert';
				$data['bcCurrent'] = 'Thêm tài khoản';
				$data['title'] = 'Thêm tài khoản';
				$data['module'] = $this->module;
				$this->load->view('admin/container',$data);
			}
		}

		function edit($account_id)
		{
			if($this->input->post('submit')){
				if($this->form_validation->run()){
					$account = $this->Mtaikhoan->getRowById('n_tn_accounts','account_id',$account_id);
					if($this->input->post('account_username') == $account->account_username | !$this->Mtaikhoan->isExisted($this->input->post('account_username'))){
						if($this->Mtaikhoan->edit($this->uri->segment(4))){
							$this->session->set_userdata('session','Cập nhật thành công');
						}
						else{
							$this->session->set_userdata('session','Cập nhật không thành công');
						}
						redirect(base_url().'taikhoan/admin', 'refresh');
					} else if($this->Mtaikhoan->isExisted($this->input->post('account_username'))){
						$this->session->set_userdata('existed','Tên đăng nhập đã tồn tại');
						redirect(base_url().'taikhoan/admin/edit/'.$this->uri->segment(4), 'refresh');
					}
				}
				else{
					$data['query'] = $this->Mtaikhoan->getRowById('n_tn_accounts','account_id',$this->uri->segment(4));
					$data['page'] = 'admin_taikhoan_edit';
					$data['bcCurrent'] = 'Sửa thông tin tài khoản';
					$data['title'] = 'Sửa thông tin tài khoản';
					$data['module'] = $this->module;
					$this->load->view('admin/container',$data);
				}
			}
			else {
				$data['query'] = $this->Mtaikhoan->getRowById('n_tn_accounts','account_id',$this->uri->segment(4));
				$data['page'] = 'admin_taikhoan_edit';
				$data['bcCurrent'] = 'Sửa thông tin tài khoản';
				$data['title'] = 'Cập nhật thông tin tài khoản';
				$data['module'] = $this->module;
				$this->load->view('admin/container',$data);
			}
		}

		function del($account_id)
		{
			if($this->Mtaikhoan->del($this->uri->segment(4))){
				$this->session->set_userdata('session','Xóa thành công');
			}
			else{
				$this->session->set_userdata('session','Xóa không thành công');
			}
			redirect(base_url().'danhmuc/admin', 'refresh');
		}
	}
?>