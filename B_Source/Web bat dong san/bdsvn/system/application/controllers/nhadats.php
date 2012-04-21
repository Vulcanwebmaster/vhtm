<?php
  class nhadats extends Controller{
      protected $_templates;
      function nhadats(){
          parent::Controller();
          $this->load->model('nhadats_model','nhadats');
      }
      
      function index(){
          $data['title'] = 'Quản lý bài viết';
          $config['base_url'] = base_url().'nhadats/index';  
          $config['total_rows']   =  $this->nhadats->getNumTin();
          $config['per_page']  =   '20';
          $config['uri_segment'] = 3;   
          $this->pagination->initialize($config);   
          $data['list'] =   $this->nhadats->getAllTin($config['per_page'],$this->uri->segment('3'));
          $data['pagination']    = $this->pagination->create_links();                  
          $this->_templates['page'] = 'admin/nhadat/index';
          $this->site_library->loadadmin($this->_templates['page'],$data);
      }
      
      function themmoi(){
          $data['title'] = 'Thêm mới';
          $buoc = $this->uri->segment('3'); 
          $data['buoc1'] = $this->nhadats->getCapnhat();
          $data['thanhpho'] = $this->nhadats->getDangtinThanhpho();
          $data['danhmuc'] = $this->nhadats->getDangtinDanhmuc();
          $data['huong'] = $this->nhadats->getDangtinHuong();        
          $data['vitri'] = $this->nhadats->getDangtinVitri();  
          if($buoc==1){
                  $this->form_validation->set_rules('nhucau','Nhu cầu','required');
                  $this->form_validation->set_rules('sectionid','Danh mục','required');
                  $this->form_validation->set_rules('parentid','Loai hinh','');
                  $this->form_validation->set_rules('id_thanhpho','Thành phố','required');  
                  $this->form_validation->set_rules('id_quan','Quận huyện','');        
                  $this->form_validation->set_rules('idvitri','Vị trí','');          
                  $this->form_validation->set_rules('idhuong','Vị trí','');          

                  if($this->form_validation->run()){
                  
                   
                      if($buoc1 = $this->nhadats->savebuoc1()){
                            
                            $this->session->set_flashdata('message','Lưu bước 1 thành công');
                           // redirect('nhatoi/'.$this->session->userdata('username').'/raovat');
                           redirect('nhadats/capnhattin/2/'.$buoc1->idtin);                  
                      }else{
                          $this->session->set_flashdata('error','Lỗi gì rồi kiểm tra lại đi');
                      }

                  }
                         
        }          
          $this->_templates['page'] = 'admin/nhadat/themmoi';
          $this->site_library->loadadmin($this->_templates['page'],$data);
      }
      
      function capnhattin(){
          $data['title'] = 'Cập nhật tin';
          $buoc = $this->uri->segment('3'); 
          $data['buoc1'] = $this->nhadats->getCapnhat();
          $data['thanhpho'] = $this->nhadats->getDangtinThanhpho();
          $data['danhmuc'] = $this->nhadats->getDangtinDanhmuc();
          $data['huong'] = $this->nhadats->getDangtinHuong();        
          $data['vitri'] = $this->nhadats->getDangtinVitri();  
          if($buoc==1){
                  $this->form_validation->set_rules('nhucau','Nhu cầu','required');
                  $this->form_validation->set_rules('sectionid','Danh mục','required');
                  $this->form_validation->set_rules('parentid','Loai hinh','');
                  $this->form_validation->set_rules('id_thanhpho','Thành phố','required');  
                  $this->form_validation->set_rules('id_quan','Quận huyện','');        
                  $this->form_validation->set_rules('idvitri','Vị trí','');          
                  $this->form_validation->set_rules('idhuong','Vị trí','');          

                  if($this->form_validation->run()){
                  
                   
                      if($buoc1 = $this->nhadats->savebuoc1()){
                            
                            $this->session->set_flashdata('message','Lưu bước 1 thành công');
                           // redirect('nhatoi/'.$this->session->userdata('username').'/raovat');
                           redirect('nhadats/capnhattin/2/'.$buoc1->idtin);                  
                      }else{
                          $this->session->set_flashdata('error','Lỗi gì rồi kiểm tra lại đi');
                      }

                  }
                         
        }
        if($buoc==2){
        
              $this->form_validation->set_rules('submit','Thành phố','');          

              if($this->form_validation->run()){
              
               
                  if($this->nhadats->savebuoc2()){
                        
                        $this->session->set_flashdata('message','Lưu bước 2 thành công');
                       // redirect('nhatoi/'.$this->session->userdata('username').'/raovat');
                       redirect('nhadats/capnhattin/3/'.$data['buoc1']->idtin);                  
                  }else{
                        $this->session->set_flashdata('error','Lưu bước 2 không thành công'); 
                  }

                         
              }          
          
        }
        if($buoc==3){
              
              $this->form_validation->set_rules('tieude','Tiêu đề','required');
              $this->form_validation->set_rules('diachilienhe','Địa chỉ','required'); 
              $this->form_validation->set_rules('gia','Giá','required');
              $this->form_validation->set_rules('dai','Chiều dai','');
              $this->form_validation->set_rules('rong','Chiều rộng','');
              $this->form_validation->set_rules('bat','','');
              $this->form_validation->set_rules('vip','','');
              
              $this->form_validation->set_rules('hoten','Họ tên','required');
              $this->form_validation->set_rules('diachi','Địa chỉ','required');
              $this->form_validation->set_rules('dienthoailienhe','Điện thoại','required');
              if($this->form_validation->run()){
                  if($this->nhadats->savebuoc3()){ 
                    $this->session->set_flashdata('message','Lưu bước 3 thành công.');
                    redirect('nhadats/capnhattin/4/'.$data['buoc1']->idtin); 
                                        
                  }else{
                      $this->session->set_flashdata('error','Đăng tin không thành công. Xin vui lòng thử lại');
                  }
              }
          }
          if($buoc==4){
              $data['list'] = $this->nhadats->getAllImgTin($data['buoc1']->idtin);
              $this->form_validation->set_rules('submit','Submit','');
              if($this->form_validation->run()){
                  $data = array(
                     'batdau' => mdate('%Y-%m-%d %H:%i:%s',time()), 
                     'dang'=>1
                  );
                  $this->db->where('idtin',$this->uri->segment(3));
                  $this->db->update('nhadat',$data);
                  $this->session->set_flashdata('message','Tin của bạn đã đăng thành công. Sẽ được chúng tôi kiểm duyệt');
                 redirect('nhadats/index'); 
              }
          }                            
          $this->_templates['page'] ='admin/nhadat/capnhat';
          $this->site_library->loadadmin($this->_templates['page'],$data);
      }
      
      function battin(){
          if($this->nhadats->battin()){
              $this->session->set_flashdata('message','Quá trình thực hiện thành công');             
          }else{
              $this->session->set_flashdata('message','Quá trình thực hiện thành công'); 
          }
          redirect('nhadats/index');   
      }
      function xoatin(){
          $id = $this->uri->segment('3');
          $this->db->where('idtin',$id);
          $this->db->delete('nhadat');
          echo 'ok';
      }
       function uploadfile(){
          $this->load->library('uploadthumb_library');
          $id = $this->uri->segment('3');
          $this->nhadats->uploadfile($id);
          $content ='';
          $list = $this->nhadats->getAllImgTin($id);
          $content .='
                     <div id="uploads">
                        <ul>';
                        foreach($list as $rs1):
                        $content .='<li style="margin-top: 20px;">
                            <img src="'.base_url().$rs1->big.'" alt="">
                            <div align="center"><a href="">Xóa</a></div>
                        </li>';
                     endforeach;
                $content .='</ul>
                     </div>
         ';
          echo $content;
      }         
      function xoaanh(){
          $id = $this->uri->segment(3);
          $this->db->where('id',$id);
          $this->db->delete('nhadat_img');
          echo 'ok';
      }
        
  }
?>
