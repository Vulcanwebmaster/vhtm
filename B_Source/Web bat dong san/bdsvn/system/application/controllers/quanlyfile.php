<?php
  class quanlyfile extends Controller{
      protected $_templates;
      function quanlyfile(){
          parent::Controller();
          $this->load->model('quanlyfile_model','file');
      }
      function index(){
          $data['title'] = 'Quản lý File';
          $config['base_url'] = base_url().'quanlyfile/index';  
          $config['total_rows']   =  $this->file->getNumFile();
          $config['per_page']  =   '20';
          $config['uri_segment'] = 3;   
          $this->pagination->initialize($config);   
          $data['list'] =   $this->file->getAllFile($config['per_page'],$this->uri->segment('3'));
          $data['pagination']    = $this->pagination->create_links(); 
          $this->_templates['page'] = 'admin/file/index';
          $this->site_library->loadadmin($this->_templates['page'],$data);
      }
      function upload(){
          
         $size=filesize($_FILES['file']['tmp_name']); 
          
         
          if($size > 0){
              if($this->file->upload()){
                  $this->session->set_flashdata('message','Upload thành công');
              }else{
                  $this->session->set_flashdata('error','Upload không thành công');
              }
              redirect('quanlyfile');
          }
      }
      function uploadpop(){
      	echo $_FILES['file']['tmp_name']; die();
         $size=filesize($_FILES['file']['tmp_name']); 
          if($size > 0){
				
              if($this->file->upload()){
                  $this->session->set_flashdata('message','Upload thành công');
              }else{
                  $this->session->set_flashdata('error','Upload không thành công');
              }
              redirect('quanlyfile/themanh/'.$this->uri->segment(3));
          }
      }      
      function themanh(){
          $data['title'] = "Add File";
          $config['base_url'] = base_url().'quanlyfile/themanh';  
          $config['total_rows']   =  $this->file->getNumFile();
          $config['per_page']  =   '7';
          $config['uri_segment'] = 3;   
          $this->pagination->initialize($config);   
          $data['list'] =   $this->file->getAllFile($config['per_page'],$this->uri->segment('3'));
          $data['pagination']    = $this->pagination->create_links();  
          $this->load->view('admin/file/popup',$data);
      }
      
      function delfile(){
          $id = $this->uri->segment('3');
          $this->db->where('id',$id);
          $query = $this->db->get('quanlyfile');
          $item = $query->row();
          unlink($item->duongdan);
          $this->db->where('id',$id);
          $this->db->delete('quanlyfile');
          echo 'ok';
      }
  }
?>
