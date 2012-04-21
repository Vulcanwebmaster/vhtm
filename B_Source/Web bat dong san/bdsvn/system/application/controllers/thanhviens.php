<?php
  class thanhviens extends Controller{
      protected $_templates;
      function thanhviens(){
          parent::Controller();
          $this->load->model('thanhviens_model','thanhviens');
      }
      function index(){
          $data['title'] = 'Quản lý thành viên';
          $data['list'] = $this->thanhviens->getALLThanhVien();
          $this->_templates['page'] = 'admin/thanhvien/index';
          $this->site_library->loadadmin($this->_templates['page'],$data);
      }
      
      function themmoi(){
          $data['title'] = 'Thêm mới thành viên';
          $data['list'] = $this->thanhviens->getAllNhom();
          $this->form_validation->set_rules('fullname','Tên thành viên','required');
          $this->form_validation->set_rules('username','Tên đăng nhập','required');
          if($this->form_validation->run()){
              if($this->thanhviens->save()){
                  $this->session->set_flashdata('message','Thêm mới thành viên thành công');
                  redirect('thanhviens');
              }else{
                  $this->session->set_flashdata('error','Thêm mới không thành công. Xin vui lòng thử lại');
              }
          }
          $this->_templates['page'] = 'admin/thanhvien/themmoi';
          $this->site_library->loadadmin($this->_templates['page'],$data);
      }
      
      function capnhat(){
          $data['title'] = 'Cập nhật thành viên';
          $data['rs'] = $this->thanhviens->getItemThanhvien();
          $data['list'] = $this->thanhviens->getAllNhom();
          $this->form_validation->set_rules('fullname','Tên thành viên','required');
          $this->form_validation->set_rules('username','Tên đăng nhập','required');
          if($this->form_validation->run()){
              if($this->thanhviens->SaveEdit()){
                  $this->session->set_flashdata('message','Cập nhật thành viên thành công');
                  redirect('thanhviens');
              }else{
                  $this->session->set_flashdata('error','Cập nhật không thành công. Xin vui lòng thử lại');
              }
          }          
          $this->_templates['page'] = 'admin/thanhvien/capnhat';
          $this->site_library->loadadmin($this->_templates['page'],$data);
      }
      
      function del(){
          $id = $this->uri->segment('3');
          $this->db->where('iduser',$id);
          $this->db->delete('thanhvien');
          echo 'ok';
      }
  }
?>
