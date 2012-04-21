<?php
/********************************
* Tac gia: Tran Ngoc Duoc
* Ngay tao: 29/07/2010
* Phien ban v2.0 
********************************/

  class noidung extends Controller{
      protected $_templates;
      function noidung(){
          parent::Controller();
          $this->load->model('noidung_model','noidung');
      }
      
      function index(){
          
      }
      // Quan ly the loai
      function theloai(){
          $data['title'] = 'Quản lý thể loại';
          $data['theloai'] = $this->noidung->getAllTheLoai();
          $this->_templates['page'] = 'admin/noidung/theloai/index';
          $this->site_library->loadadmin($this->_templates['page'],$data);
      }
      
      function themtheloai(){
          $data['title'] = 'Thêm mới thể loại';
          $this->form_validation->set_rules('ten','Tên thể loại','required');
          if($this->form_validation->run()){
              if($this->noidung->SaveTheloai()){
                  $this->session->set_flashdata('message','Lưu thể loại thành công');
                  redirect('noidung/theloai');
              }
          }
          $this->_templates['page'] = 'admin/noidung/theloai/themmoi';
          $this->site_library->loadadmin($this->_templates['page'],$data);
      }
      
      function capnhattheloai(){
          $data['title'] = 'Cập nhật thông tin';
          $this->form_validation->set_rules('ten','Tên thể loại','required');
          if($this->form_validation->run()){
              if($this->noidung->SaveTheloai()){
                  $this->session->set_flashdata('message','Lưu thể loại thành công');
                  redirect('noidung/theloai');
              }
          }
          $data['rs'] = $this->noidung->getItemTheloai();
          $this->_templates['page'] = 'admin/noidung/theloai/capnhat';
          $this->site_library->loadadmin($this->_templates['page'],$data);          
      }
      
      function battheloai(){
          if($this->noidung->battheloai()){
              $this->session->set_flashdata('message','Quá trình thực hiện thành công');             
          }else{
              $this->session->set_flashdata('message','Quá trình thực hiện thành công'); 
          }
          redirect('noidung/theloai');   
      }
      
      function xoatheloai(){
          $id = $this->uri->segment('3');
          $this->db->where('id',$id);
          $this->db->delete('danhmuc');
          echo 'ok';
      } 
      
      // Quan ly chuyen muc 
      
      function danhmuc(){
          $data['title'] = 'Quản lý danh mục';
          $data['danhmuc'] = $this->noidung->getAllDanhmuc();
          $this->_templates['page'] = 'admin/noidung/danhmuc/index';
          $this->site_library->loadadmin($this->_templates['page'],$data);
      } 
      function themdanhmuc(){
          $data['title'] = 'Thêm mới danh mục';
          $this->form_validation->set_rules('ten','Tên danh mục','required');
          if($this->form_validation->run()){
              if($this->noidung->SaveTheloai()){
                  $this->session->set_flashdata('message','Lưu danh mục thành công');
                  redirect('noidung/danhmuc');
              }
          }
          $data['theloai'] = $this->noidung->getAllTheLoai(); 
          $this->_templates['page'] = 'admin/noidung/danhmuc/themmoi';
          $this->site_library->loadadmin($this->_templates['page'],$data);
      }
      
      function capnhatdanhmuc(){
          $data['title'] = 'Cập nhật danh mục';
          $this->form_validation->set_rules('ten','Tên danh mục','required');
          if($this->form_validation->run()){
              if($this->noidung->SaveTheloai()){
                  $this->session->set_flashdata('message','Lưu danh mục thành công');
                  redirect('noidung/danhmuc');
              }
          }
          $data['theloai'] = $this->noidung->getAllTheLoai(); 
          $data['rs'] = $this->noidung->getItemTheloai();
          $this->_templates['page'] = 'admin/noidung/danhmuc/capnhat';
          $this->site_library->loadadmin($this->_templates['page'],$data);          
      } 
      function batdanhmuc(){
          if($this->noidung->battheloai()){
              $this->session->set_flashdata('message','Quá trình thực hiện thành công');             
          }else{
              $this->session->set_flashdata('message','Quá trình thực hiện thành công'); 
          }
          redirect('noidung/danhmuc');   
      }
      
      
      //Quan ly bai viet
      function baiviet(){
          $data['title'] = 'Quản lý bài viết';
          $config['base_url'] = base_url().'noidung/baiviet';  
          $config['total_rows']   =  $this->noidung->getNumBaiviet();
          $config['per_page']  =   '20';
          $config['uri_segment'] = 3;   
          $this->pagination->initialize($config);   
          $data['list'] =   $this->noidung->getAllBaiviet($config['per_page'],$this->uri->segment('3'));
          $data['pagination']    = $this->pagination->create_links();                  
          $this->_templates['page'] = 'admin/noidung/baiviet/index';
          $this->site_library->loadadmin($this->_templates['page'],$data);
      }
      function themmoi(){
          $data['title'] = 'Thêm mới bài viết';
          $data['list'] = $this->noidung->getAllTheloai();
          $this->_templates['page'] = 'admin/noidung/baiviet/themmoi';
          $this->form_validation->set_rules('tieude','Tiêu đề','required');
          if($this->form_validation->run()){
              if($this->noidung->save()){
                  $this->session->set_flashdata('message','Lưu bài viết thành công');
                  redirect('noidung/baiviet/');
              }else{
                  $this->session->set_flashdata('error','Lỗi. Bài viết chưa được lưu lại');
              }
          }
          $this->site_library->loadadmin($this->_templates['page'],$data);
      }
      function capnhatbaiviet(){
          $data['title'] = 'Cập nhật bài viết';
          $data['list'] = $this->noidung->getAllTheloai();
          $data['rs'] = $this->noidung->getItemBaiviet();
          $this->form_validation->set_rules('tieude','Tiêu đề','required');
          if($this->form_validation->run()){
              if($this->noidung->save()){
                  $this->session->set_flashdata('message','Lưu bài viết thành công');
                  redirect('noidung/baiviet/'.$this->uri->segment('4'));
              }else{
                  $this->session->set_flashdata('error','Lỗi. Bài viết chưa được lưu lại');
              }
          }          
          $this->_templates['page'] = 'admin/noidung/baiviet/capnhat';
          $this->site_library->loadadmin($this->_templates['page'],$data);
      }
      
      function batbaiviet(){
          if($this->noidung->batbaiviet()){
              $this->session->set_flashdata('message','Quá trình thực hiện thành công');             
          }else{
              $this->session->set_flashdata('message','Quá trình thực hiện thành công'); 
          }
          redirect('noidung/baiviet');   
      }
      function xoabaiviet(){
          $id = $this->uri->segment('3');
          $this->db->where('id',$id);
          $this->db->delete('noidung');
          echo 'ok';
      }            
             
  }
?>
