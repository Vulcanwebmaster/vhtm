<?php
  class lienhe extends Controller{
      protected $_templates;
      function lienhe(){
          parent::Controller();
          $this->load->library('sendmail_library');
          $this->load->model('lienhe_model','lienhe');
      }
      
      function index(){
          $data['title'] = 'Liên hệ';
          $data['rs'] = $this->lienhe->getLienhe();  
          $this->form_validation->set_rules('hovaten','Họ và tên','required');
          $this->form_validation->set_rules('diachi','Địa chỉ','');
          $this->form_validation->set_rules('dienthoai','Điện thoại','required');
          $this->form_validation->set_rules('email','Email','required');
          $this->form_validation->set_rules('noidung','Nội dung','required');
          if($this->form_validation->run()){
              if($this->lienhe->savelienhe()){
                  $item = $this->lienhe->getLienhe();
                  $subject = 'Thông tin liên hệ tại Website: '.base_url();
                  $name = $this->input->post('hovaten');
                  $from = $this->input->post('email');
                  $to = $item->email;
                  $message = '<b>Thông tin liên hệ</b><br>';
                  $message .='<br><b>Họ tên:</b> '.$this->input->post('hovaten');
                  $message .='<br><b>Địa chỉ:</b> '.$this->input->post('diachi');
                  $message .='<br><b>Điện thoại:</b> '.$this->input->post('dienthoai');
                  $message .='<br><b>Nội dung:</b> <br>'.$this->input->post('noidung');
                  $this->sendmail_library->sendmail($name,$from,$to,$subject,$message);
                  $this->session->set_flashdata('message','Gửi thông tin liên hệ thành công');
                  redirect('lienhe.html');
              }
          }
          $this->_templates['page'] = 'site/lienhe/index';
          $this->site_library->load($this->_templates['page'],$data);
      }
      
      function nhomlienhe(){
         $data['title'] = 'Nhóm liên hệ';
         $data['list'] = $this->lienhe->getAllNhomLienhe();
         $this->_templates['page'] = 'admin/lienhe/nhom/index';
         $this->site_library->loadadmin($this->_templates['page'],$data); 
      }
      function themmoinhom(){
          $data['title'] = 'Thêm mới nhóm liên hệ';
          $this->form_validation->set_rules('tenlienhe','Tên liên hệ','required');
          $this->form_validation->set_rules('diachi','Địa chỉ','required');
          $this->form_validation->set_rules('email','Email','required');
          $this->form_validation->set_rules('dienthoai','Điện thoại','required');
          if($this->form_validation->run()){
              if($this->lienhe->luunhom()){
                  $this->session->set_flashdata('message','Lưu nhóm thành công');
                  redirect('lienhe/nhomlienhe');
              }
          }
          $this->_templates['page'] = 'admin/lienhe/nhom/themmoi';
          $this->site_library->loadadmin($this->_templates['page'],$data);
      }
      
      function capnhatnhom(){
          $data['title'] = 'Cập nhật nhóm liên hệ';
          $data['rs'] = $this->lienhe->getCapnhatnhom(); 
          $this->form_validation->set_rules('tenlienhe','Tên liên hệ','required');
          $this->form_validation->set_rules('diachi','Địa chỉ','required');
          $this->form_validation->set_rules('email','Email','required');
          $this->form_validation->set_rules('dienthoai','Điện thoại','required');
          if($this->form_validation->run()){
              if($this->lienhe->luunhom()){
                  $this->session->set_flashdata('message','Lưu nhóm thành công');
                  redirect('lienhe/nhomlienhe');
              }
          }
          $this->_templates['page'] = 'admin/lienhe/nhom/capnhat';
          $this->site_library->loadadmin($this->_templates['page'],$data);          
      }
      function xoanhom(){
          $id = $this->uri->segment('3');
          $this->db->where('id',$id);
          $this->db->delete('nhomlienhe');
          echo 'ok';
      }
      
      function danhsach(){
          $data['title'] = 'Danh sách liên hệ';
          $config['base_url'] = base_url().'lienhe/danhsach';  
          $config['total_rows']   =  $this->lienhe->getNumLienhe();
          $config['per_page']  =   '10';
          $config['uri_segment'] = 3;   
          $this->pagination->initialize($config);   
          $data['list'] =   $this->lienhe->getAllLienhe($config['per_page'],$this->uri->segment('3'));
          $data['pagination']    = $this->pagination->create_links();          
          $this->_templates['page'] = 'admin/lienhe/danhsach/index';
          $this->site_library->loadadmin($this->_templates['page'],$data);
      }
      
      function xemlienhe(){
          $data['title'] = 'Xem thông tin liên hệ';
          $data['rs'] = $this->lienhe->getxemlienhe();
          $this->_templates['page'] = 'admin/lienhe/danhsach/xemlienhe';
          $this->site_library->loadadmin($this->_templates['page'],$data);
      }
      
      function guiemail(){
          $id = $this->uri->segment(3);
          $item = $this->lienhe->getEmail($id);
          $rs = $this->lienhe->getLienhe();
          $message = $this->input->post('message');
          $from = $rs->email;
          $tenlienhe = $rs->tenlienhe;
          $name = $rs->tenlienhe;
          $to = $item->email;
          $subject = 'Thông tin phản hồi đươc gửi từ: '.$tenlienhe;
          $this->sendmail_library->sendmail($name,$from,$to,$subject,$message);
          $this->session->set_flashdata('message','Email trả lời đã được gửi đi');
          redirect('lienhe/xemlienhe/'.$id);
          
      }   
      
      function xoalienhe(){
          $id = $this->uri->segment('3');
          $this->db->where('idlienhe',$id);
          $this->db->delete('lienhe');
          echo 'ok';
      }            
  }
?>
