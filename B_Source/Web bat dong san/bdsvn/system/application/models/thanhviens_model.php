<?php
  class thanhviens_model extends Model{
      function thanhviens_model(){
          parent::Model();
      }
      function getALLThanhVien(){
          $query = $this->db->get('thanhvien');
          return $query->result();
      }
      
      function getItemNhom($id_group){
          $this->db->where('manhom',$id_group);
          $query = $this->db->get('nhom');
          return $query->row();
      }
      
      function getAllNhom(){
          $query = $this->db->get('nhom') ;
          return $query->result();
      }
      
      function save(){
          $fullname = $this->input->post('fullname');
          $username = $this->input->post('username');
          $password = $this->input->post('password');
          $id_group = $this->input->post('id_group');
          $email = $this->input->post('email');
          $data = array(
            'fullname' => $fullname,
            'email' => $email,
            'username' => $username,
            'password' => md5($password),
            'id_group' => $id_group
          );
          if($this->db->insert('thanhvien',$data)){
              return true;
          }else{
              return false;
          }
      }
      
      function getItemThanhvien(){
          $id = $this->uri->segment('3');
          $this->db->where('iduser',$id);
          $query = $this->db->get('thanhvien');
          return $query->row();
      }
      
      function SaveEdit(){
          $id = $this->uri->segment('3');
          $data1 = array(
            'fullname' => $this->input->post('fullname'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'id_group' => $this->input->post('id_group')
          );
          
          $data = array(
            'fullname' => $this->input->post('fullname'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'id_group' => $this->input->post('id_group'),
            'password' => md5($this->input->post('password'))          
          );
          $this->db->where('iduser',$id);
          if($this->input->post('password')!=''){
              if($this->db->update('thanhvien',$data)){
                  return true;
              }else{
                  return false;
              }
          }else{
              if($this->db->update('thanhvien',$data1)){
                  return true;
              }else{
                  return false;
              }              
          }
      }
  }
?>
