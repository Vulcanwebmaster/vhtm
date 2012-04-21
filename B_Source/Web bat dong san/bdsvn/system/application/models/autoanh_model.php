<?php
  class autoanh_model extends Model{
      function autoanh_model(){
          parent::Model();
      }
      
      function checklink($link){
          $this->db->where('url',$link);
          $query = $this->db->get('anh');
          return $query->row();
      }
      function getAllTamtay(){
          $this->db->where('active',0);
          $this->db->where('sitename','tamtay');
          $query = $this->db->get('autoanh');
          return $query->row();
      }
      
      function checkactivetamtay(){
          $this->db->where('active',0);
          $this->db->where('sitename','tamtay');
          $query = $this->db->get('autoanh');
          return $query->num_rows();
      }
  }
?>
