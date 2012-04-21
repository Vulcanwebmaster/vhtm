<?php
  class admin_model extends Model{
      function admin_model(){
          parent::Model();
      }
    function checklogin(){
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $this->db->Where('id_group >','18');
        $query = $this->db->get('thanhvien');
          if($query){
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
  }
?>
