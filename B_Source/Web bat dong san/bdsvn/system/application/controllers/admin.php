<?php
  class admin extends Controller{
      protected $_templates;
      function admin(){
          parent::Controller();
          $this->load->model('admin_model','admin');
      }
      
      function index(){
          $data['title'] = 'Đăng nhập';
          if($this->session->userdata('id_group') > 18){
              redirect('admin/quantri');
          }
          $data['title'] = 'Đăng nhập hệ thống';
          $this->form_validation->set_rules('username','Tên đăng nhập','required');
          $this->form_validation->set_rules('password','Mật khẩu','required');
          if($this->form_validation->run()){
              if($this->admin->checklogin()){
                  $this->session->set_flashdata('message','Đăng nhập thành công');
                  redirect('admin/quantri');
              }else{
                  $this->session->set_flashdata('error','Đăng nhập không thành công. Vui lòng kiểm tra lại thông tin');
              }
          }          
          $this->load->view('admin/admin/index',$data);
      }
     function logout() {
        $this->session->sess_destroy();
        redirect('admin');
    }
    
    function quantri(){
        $data['title'] = 'Bảng điều khiển';
        $this->_templates['page'] = 'admin/admin/cpanel';     
        $this->site_library->loadadmin($this->_templates['page'],$data);
    }       
  }
?>
