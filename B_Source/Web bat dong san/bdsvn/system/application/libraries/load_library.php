<?php
  class load_library{
      function __construct(){
          $this->CI = get_instance();
      }
      function loaduser($id){
          $this->CI->db->select('thanhvien.*,thanhvien_map.*');
          $this->CI->db->join('thanhvien_map','thanhvien.iduser = thanhvien_map.id_thanhvien');
          $this->CI->db->where('thanhvien.iduser',$id);
          $query = $this->CI->db->get('thanhvien');
          return $query->row();
      }
      
      function loadimg($id){
          $this->CI->db->where('id_tin',$id);
          $query = $this->CI->db->get('nhadat_img');
          return $query->row();
      }

      function LoadDanhmuc($id){
         $this->CI->db->where('id',$id);
         $query = $this->CI->db->get('danhmuc') ;
         return $query->row();        
      }
      function LoadDanhmucList($id){
         $this->CI->db->where('parentid',$id);
         $query = $this->CI->db->get('nhadat_dm') ;
         return $query->result();        
      }      
      function LoadQuan($idthanhpho){

          $this->CI->db->Where('idthanhpho',$idthanhpho);
          $query = $this->CI->db->get('thanhpho');
          return $query->row();          
      }
      
      function loadcity($id){
          $this->CI->db->Where('idthanhpho',$id);
          $query = $this->CI->db->get('thanhpho');
          return $query->row();
      } 
      function loadcitylist($id){
          $this->CI->db->Where('idquan',$id);
          $query = $this->CI->db->get('thanhpho');
          return $query->result();
      }
      
      function loadnhucau($value){
          if($value==1){
              return 'Cần bán';
          }else if($value==2){
              return 'Cần mua';
          }else if($value==3){
                return 'Cần thuê';                
          }else if($value==4){
              return 'Cho thuê';
          }else {
			  return '';
		  }
      }
      function loadhuong($id){
          $this->CI->db->where('idhuong',$id);
          $query = $this->CI->db->get('huong');
          return $query->row();
      }
      function loadvitri($id){
          $this->CI->db->where('idvitri',$id);
          $query = $this->CI->db->get('vitri');
          return $query->row();
      }      
  }
?>
