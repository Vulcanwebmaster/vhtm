<?php
  class hoidap_model extends Model{
      function hoidap_model(){
          parent::Model();
      }
      function luu(){
			$name = $this->input->post('name');
          $email = $this->input->post('email');
          $comment = $this->input->post('commentDetail');
          $date = mdate('%Y-%m-%d %H:%i:%s',time());
          $data = array(
            'tenlienhe' => $name,
            'lienlac' => $email,
            'noidung' => $comment,
            'ngay' => $date,            
          );
          if($this->db->insert('hoidap',$data)){
              return true;
          }else{
              return false;
          }
      }
      
}
?>