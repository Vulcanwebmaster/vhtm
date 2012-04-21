<?php
  class autonew_model extends Model{
      function autonew_model(){
          parent::Model();
      }
      function checklink($link){
          $this->db->where('link',$link);
          $query = $this->db->get('noidung');
          $check = $query->row();
          return $check;
      }
      
      function checkLinkkenh($alias){
          $this->db->where('alias',$alias);
          $query = $this->db->get('noidung');
          return $query->row();
      }
      function getAllTheloai(){
          $this->db->where('parentid',0);
          $this->db->order_by('sapxep','ASC');
          $query = $this->db->get('danhmuc');
          return $query->result();
      }
      function getListDanhmuc($id){
          $this->db->where('parentid',$id);
          $query = $this->db->get('danhmuc');
          return $query->result();
      }
      
      function getAuto(){
          $this->db->where('sitename','zing');
          $query = $this->db->get('autonew');
          return $query->result();
      }
      function getAutokenh(){
          $this->db->where('sitename','kenh14');
          $query = $this->db->get('autonew');
          return $query->result();
      }
      
      function getAllBaoBongDa(){
          $this->db->where('sitename','baobongda');
          $query = $this->db->get('autonew');
          return $query->result();
      }
      
      function checklinkbongda($link){
          $this->db->where('link',$link);
          $query = $this->db->get('noidung');
          return $query->row();
      }
      function gethaibongio(){
          $this->db->where('sitename','24h');
          $query = $this->db->get('autonew');
          return $query->result();
      }      
      function checkhaibongio($link,$alias){
          $this->db->where('alias',$alias);
          $this->db->or_where('link',$link);
          $query = $this->db->get('noidung');
          return $query->row();
      }
      ////CHECK 
      function getSiteName($sitename){
          $this->db->where('sitename',$sitename);
          $query = $this->db->get('autonew');
          return $query->result();
      }
      
      function checkLinkAlias($link,$alias){
          $this->db->where('alias',$alias);
          $this->db->or_where('link',$link);
          $query = $this->db->get('noidung');
          return $query->row();          
      }
      
      //Auto Zing
      
      function getAutoZing(){
          $this->db->where('active',0);
          $this->db->where('sitename','zing');
          $query = $this->db->get('autonew');
          return $query->row();          
      }
      function CheckActiveZing(){
          $this->db->where('active',0);
          $this->db->where('sitename','zing');
          $query = $this->db->get('autonew');
          return $query->num_rows();
      }
      
      //Auto Kenh
      
      function getAutoKenh14(){
          $this->db->where('active',0);
          $this->db->where('sitename','kenh14');
          $query = $this->db->get('autonew');
          return $query->row();          
      }
      function CheckActiveKenh14(){
          $this->db->where('active',0);
          $this->db->where('sitename','kenh14');
          $query = $this->db->get('autonew');
          return $query->num_rows();
      } 
      
      //Auto bao bong da
      function getAutoBongDa(){
          $this->db->where('active',0);
          $this->db->where('sitename','baobongda');
          $query = $this->db->get('autonew');
          return $query->row();          
      }
      function CheckActiveBongDa(){
          $this->db->where('active',0);
          $this->db->where('sitename','baobongda');
          $query = $this->db->get('autonew');
          return $query->num_rows();
      }
      
      //Auto Dan tri
      function getAutodantri(){
          $this->db->where('active',0);
          $this->db->where('sitename','dantri');
          $query = $this->db->get('autonew');
          return $query->row();          
      }
      function CheckActivedantri(){
          $this->db->where('active',0);
          $this->db->where('sitename','dantri');
          $query = $this->db->get('autonew');
          return $query->num_rows();
      }          
  }
?>
