<?php
  class quangcao extends Controller{
      protected $_templates;
      function quangcao(){
          parent::Controller();
          $this->load->model('quangcao_model','quangcao');
      }
      
      function danhsach(){
          $data['title'] = 'Danh sách các chương trình quảng cáo';
          $data['list'] = $this->quangcao->getAllQuangcao();
          $this->_templates['page'] = 'admin/quangcao/danhsach';
          $this->site_library->loadadmin($this->_templates['page'],$data);
      }
      
      function themmoi(){
          $data['title'] = 'Thêm mới quảng cáo';
          $data['list'] = $this->quangcao->getAllDanhmuc();
          $this->form_validation->set_rules('name','Tên quảng cáo','required');
          if($this->form_validation->run()){
              if($this->quangcao->save()){
                  $this->session->set_flashdata('message','Lưu quảng cáo thành công');
              }
              redirect('quangcao/danhsach');
          }
          $this->_templates['page'] = 'admin/quangcao/themmoi';
          $this->site_library->loadadmin($this->_templates['page'],$data);
      }
      function capnhat(){
          $data['title'] = 'Cập nhật quảng cáo';
          $data['rs'] = $this->quangcao->getEdit();
          $data['list'] = $this->quangcao->getAllDanhmuc();
          $this->form_validation->set_rules('name','Tên quảng cáo','required');
          if($this->form_validation->run()){
              if($this->quangcao->save()){
                  $this->session->set_flashdata('message','Lưu quảng cáo thành công');
              }
              redirect('quangcao/danhsach');
          }
          $this->_templates['page'] = 'admin/quangcao/capnhat';
          $this->site_library->loadadmin($this->_templates['page'],$data);
      }      
	function xoaquangcao(){
          $id = $this->uri->segment('3');
          $this->db->where('id',$id);
          $this->db->delete('quangcao');
          echo 'ok';
      } 
  }
?>
