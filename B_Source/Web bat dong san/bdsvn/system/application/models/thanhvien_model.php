<?php
  class thanhvien_model extends Model{
      function thanhvien_model(){
          parent::Model();
      }
       function dangnhap(){
          $username = $this->input->post('tendangnhap');
          $password = md5($this->input->post('matkhau'));
          $this->db->where('username',$username);
          $this->db->where('password',$password);
          $query = $this->db->get('thanhvien');
          if($query->num_rows >0){
             $row=$query->row_array();
             $this->session->sess_destroy();
             $this->session->sess_create(); 
             //Set session data 
             $this->session->set_userdata($row);
            
            //Set logged_in to true
            $this->session->set_userdata(array('logged_in' => true));               
              return true;
          }else{
              return false;
          }
      }
      function savedangky(){
          $data = array(
            'id_group'=>'18',
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'email' => $this->input->post('email'),
            'fullname' => $this->input->post('fullname'),
            'date_reg' => mdate('%Y-%m-%d %H:%i:%s',time())
          );
          if($this->db->insert('thanhvien',$data)){
               $id_user = $this->db->insert_id();
               $datamap = array(
                    'id_thanhvien' => $id_user

               );
               if($this->db->insert('thanhvien_map',$datamap)){
                  $username = $this->input->post('username');
                  $password = md5($this->input->post('password'));
                  $this->db->where('username',$username);
                  $this->db->where('password',$password);
                  $query = $this->db->get('thanhvien');
                  
                     $row=$query->row_array();
                     $this->session->sess_destroy();
                     $this->session->sess_create(); 
                     //Set session data 
                     $this->session->set_userdata($row);
                    
                    //Set logged_in to true
                    $this->session->set_userdata(array('logged_in' => true));               
                      return true;

               }else{
                   return false;
               }
          }else{
              return false;
          }
          
      }
      
      function savecapnhat(){
          $iduser = $this->session->userdata('iduser');
          $fullname = $this->input->post('fullname');
          $email = $this->input->post('email');
          $password = $this->input->post('password');
          $d = $this->input->post('d');
          $m = $this->input->post('m');
          $y = $this->input->post('y');
          $birthday = $y.'/'.$m.'/'.$d;
          $male = $this->input->post('male');
          $date_log = mdate('%Y-%m-%d %H:%i:%s',time());
          if($password){
              $data = array(
                'fullname' => $fullname,
                'email' => $email,
                'password' => md5($password),
                'birthday' => $birthday,
                'male' => $male,
                'date_log' => $date_log 
              );
          }else{
               $data = array(
                'fullname' => $fullname,
                'email' => $email,
                'birthday' => $birthday,
                'male' => $male,
                'date_log' => $date_log 
              );
          }
          
          $this->db->where('iduser',$iduser);
          if($this->db->update('thanhvien',$data)){
              $data_thanhvien = array(
                'phone' => (string)$this->input->post('phone'),
                'address' => (string)$this->input->post('address'),
                'yahoo' => (string)$this->input->post('yahoo')
              );
              $this->db->where('id_thanhvien',$iduser);
              if($this->db->update('thanhvien_map',$data_thanhvien)){
                  return true;
              }else{
                  return false;
              }
          }else{
              return false;
          }
      }
      
      function getCapnhat(){
          $iduser = $this->session->userdata('iduser');
          $this->db->select('thanhvien.*,thanhvien_map.*');
          $this->db->join('thanhvien_map','thanhvien.iduser = thanhvien_map.id_thanhvien');
          $this->db->where('thanhvien.iduser',$iduser);
          $query = $this->db->get('thanhvien');
          return $query->row();
      }
      
      function guimatkhau(){
          $this->load->library('sendmail_library');
          $email = $this->input->post('email');
          $this->db->where('email',$email);
          $query = $this->db->get('thanhvien');
          $item = $query->row();
          $pass = rand(6,999999);
          $data = array(
            'password' => md5($pass)
          );
          $this->db->update('thanhvien',$data);
          $name = $this->setting_library->setting['site_name'];
          $from = $this->setting_library->setting['site_email'];
          $to = $email;
          $subject = 'Thông tin tài khoản tại: '.$this->setting_library->setting['site_name'];
          $message ='Thông tin tài khoản được gửi lại theo yêu cầu của bạn<br>';
          $message .='Tên đăng nhâp: '.$item->username.'<br>';
          $message .='Mât khẩu: '.$pass;
          $this->sendmail_library->sendmail($name,$from,$to,$subject,$message);
          return true;
      } 
      function guitendangnhap(){
          $this->load->library('sendmail_library');
          $email = $this->input->post('email');
          $this->db->where('email',$email);
          $query = $this->db->get('thanhvien');
          $item = $query->row();

          $name = $this->setting_library->setting['site_name'];
          $from = $this->setting_library->setting['site_email'];
          $to = $email;
          $subject = 'Thông tin tài khoản tại: '.$this->setting_library->setting['site_name'];
          $message ='Thông tin tài khoản được gửi lại theo yêu cầu của bạn<br>';
          $message .='Tên đăng nhâp: '.$item->username.'<br>';
          $this->sendmail_library->sendmail($name,$from,$to,$subject,$message);
          return true;
      }                 
  }
?>
