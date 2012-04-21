<?php
  class lienhe_model extends Model{
      function lienhe_model(){
          parent::Model();
      }
      
      function getLienhe(){
          $this->db->where('bat',1);
          $query = $this->db->get('nhomlienhe');
          return $query->row();
          
      }
      
      function savelienhe(){
          $item = $this->getLienhe();
          $id_nhom = $item->id;
          $data = array(
            'idnhom' => $id_nhom,
            'hovaten' => (string)$this->input->post('hovaten'),
            'diachi' => (string)$this->input->post('diachi'),
            'email' =>  (string)$this->input->post('email'),
            'dienthoai' =>  (string)$this->input->post('dienthoai'),
            'noidung' =>  (string)$this->input->post('noidung'),
            'ngay' => mdate('%Y-%m-%d %H:%i:%s',time())
          );
          if($this->db->insert('lienhe',$data)){
              return true;
          }else{
              return false;
          }
      }
      
      function getAllNhomLienhe(){
          $query = $this->db->get('nhomlienhe');
          return $query->result();
      }
      
      function luunhom(){
          $id = $this->uri->segment('3');
          $bat = $this->uri->segment('bat');
          if($bat==1){
              $data1 = array('bat'=>0);
              $this->db->update('nhomlienhe',$data1);
          }
          $data = array(
            'tenlienhe' => (string)$this->input->post('tenlienhe'),
            'diachi' => (string)$this->input->post('diachi'),
            'email' => (string)$this->input->post('email'),
            'dienthoai' => (string)$this->input->post('dienthoai'),
            'didong' => (string)$this->input->post('didong'),
            'fax' => (string)$this->input->post('fax'),
            'hinhanh' => (string)$this->input->post('hinhanh'),
            'gioithieu' => (string)$this->input->post('gioithieu'),
            'bat' => $this->input->post('bat'),
          );
          if($id){
              $this->db->where('id',$id);
              if($this->db->update('nhomlienhe',$data)){
                  return true;
              }else{
                  return false;
              }
          }else{
              if($this->db->insert('nhomlienhe',$data)){
                  return true;
              }else{
                  return false;
              }
          }
      }
      
      function getCapnhatnhom(){
          $id = $this->uri->segment('3');
          $this->db->where('id',$id);
          $query = $this->db->get('nhomlienhe');
          return $query->row();
      }
      
      function getAllLienhe($num,$offset){
          $query = $this->db->get('lienhe',$num,$offset);
          return $query->result();
      }
      
      function getNumLienhe(){
          $query = $this->db->get('lienhe');
          return $query->num_rows();
      }
      
      function getxemlienhe(){
          $id = $this->uri->segment(3);
          $this->db->where('idlienhe',$id);
          $query = $this->db->get('lienhe');
          return $query->row();
      }
      
      function getItemNhom($idnhom){
          $this->db->where('id',$idnhom);
          $query = $this->db->get('nhomlienhe');
          return $query->row();
      }
      
      function getEmail($id){
          $this->db->where('idlienhe',$id);
          $query = $this->db->get('lienhe');
          return $query->row();
      }
      
  }
?>
