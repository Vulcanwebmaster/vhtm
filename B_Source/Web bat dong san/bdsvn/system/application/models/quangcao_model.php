<?php
  class quangcao_model extends Model{
      function quangcao_model(){
          parent::Model();
      }
      
      function getAllQuangCao(){
          $this->db->order_by('id_dm','ASC');
          $query = $this->db->get('quangcao');
          return $query->result();
      }
      
      function getAllDanhmuc(){
          $query = $this->db->get('danhmucquangcao');
          return $query->result();
      }
      
      function getItemDanhmuc($id){
          $this->db->where('id',$id);
          $query = $this->db->get('danhmucquangcao');
          return $query->row();
      }
      
      function getEdit(){
          $id = $this->uri->segment(3);
          $this->db->where('id',$id);
          $query = $this->db->get('quangcao');
          return $query->row();
      }
      
      function save(){
          $id = $this->uri->segment(3);
          $data = array(
            'name' => $this->input->post('name'),
            'id_dm' => $this->input->post('id_dm'),
            'link' => $this->input->post('link'),
            'hinhanh' => $this->input->post('hinhanh'),
            'cao' => $this->input->post('cao'),
            'dai' => $this->input->post('dai'),
            'date_begin' => $this->input->post('date_begin'),
            'date_end' => $this->input->post('date_end'),
            'option' => $this->input->post('option'),
            'bat' => $this->input->post('bat')
          );
          if($id){
              $this->db->where('id',$id);
              $this->db->update('quangcao',$data);
          }else{
              $this->db->insert('quangcao',$data);
          }
          return true;
      }
  }
?>
