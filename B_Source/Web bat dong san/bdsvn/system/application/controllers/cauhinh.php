<?php
  class cauhinh extends Controller{
      protected $_templates;
      function cauhinh(){
          parent::Controller();
          $this->load->model('cauhinh_model','cauhinh');
      }
      
      function index(){
          $data['title'] = 'Cấu hinh hệ thống';
          $this->_templates['page'] = 'admin/cauhinh/index';
          $data['setting'] = $this->cauhinh->get_cauhinh();
          $this->form_validation->set_rules('site_name','Tên Website','required');
          if($this->form_validation->run()){
              $this->cauhinh->save_setting();
              $this->session->set_flashdata('message','Lưu cài đặt thành công');
              redirect('cauhinh');
          }          
          $this->site_library->loadadmin($this->_templates['page'],$data);
      }
      
      function hethong(){
          $data['title'] = 'Thông tin hệ thống';
          $this->_templates['page'] = 'admin/cauhinh/hethong';
          $this->site_library->loadadmin($this->_templates['page'],$data);
      }
  }
?>
