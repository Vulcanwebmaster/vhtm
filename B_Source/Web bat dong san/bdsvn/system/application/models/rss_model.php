<?php
  class rss_model extends Model{
      function rss_model(){
          parent::Model();
      }
      
      function getRssTintuc(){
          $id = $this->uri->segment(3);
          $this->db->where('idcat',$id);
          $this->db->where('bat',1);
          $this->db->order_by('id','DESC');
          $this->db->limit('20');
          $query = $this->db->get('noidung');
          return $query->result();
      }
  }
?>
