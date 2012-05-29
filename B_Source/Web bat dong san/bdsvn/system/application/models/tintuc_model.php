<?php
  class tintuc_model extends Model{
      function tintuc_model(){
          parent::Model();
      }
      /***
      * Trang chu
      * 
      */
      function getLastTinanh(){
          $this->db->where('bat',1);
          $this->db->where('tinanh',1);
          $this->db->limit('4');
          $this->db->order_by('id','DESC');
          $query = $this->db->get('noidung');
          return $query->result();
      }
      
      function getAllChuyenmuc(){
          $this->db->where('bat',1);
          $this->db->where('parentid',0);
          $this->db->order_by('sapxep','ASC');
          $query = $this->db->get('danhmuc',8,1);
          return $query->result();
      }
      
      function getTinDanhmuc($id_cat){
          $this->db->where('bat',1);
          $this->db->where('idcat',$id_cat);
          $this->db->order_by('id','DESC');
          $this->db->limit('1');
          $query = $this->db->get('noidung');
          return $query->row();
      }
      function getTinDanhmucListHome($id_cat,$id){
          $this->db->where('bat',1);
          $this->db->where('id <>',$id);
          $this->db->where('idcat',$id_cat);
          $this->db->order_by('id','DESC');
          $this->db->limit('4');
          $query = $this->db->get('noidung');
          return $query->result();
      } 
      
      function getSubCat($idcat){
          $this->db->where('parentid',$idcat);
          $this->db->where('bat',1);
          $query = $this->db->get('danhmuc');
          return $query->result();
      }
      
      function getTieudiem(){
          $this->db->where('bat',1);
          $this->db->where('tinanh',0);
          $this->db->where('tinhay',0);
          $this->db->where('tinnong',0);
          $this->db->where('tindacbiet',1);
          $this->db->where('id_sukien',0);
          $this->db->limit('10');
          $this->db->order_by('id','DESC');
          $query = $this->db->get('noidung');
          return $query->result();
      } 
      
      /// Chuyen muc
      function getItemChuyenmuc(){
          $id = (int)$this->uri->segment('3');
          $this->db->where('id',$id);
          $query = $this->db->get('danhmuc');
          return $query->row();
      }
      
      function getTopTinChuyenmuc(){
          $item = $this->getItemChuyenmuc();
          if($item->parentid==0){
              $this->db->where('idcat',$item->id);
          }else{
              $this->db->where('idsub',$item->id);
          }
          $this->db->where('bat',1);
          $this->db->order_by('id','DESC');
          $query = $this->db->get('noidung');
          return $query->row(); 
          
      }
      function getTinChuyenmuc($num,$offset){
          $item = $this->getItemChuyenmuc();
          $dis = $this->getTopTinChuyenmuc();
          //var_dump($dis); die();
          if($item->parentid==0){
              $this->db->where('idcat',$item->id);
          }else{
              $this->db->where('idsub',$item->id);
          }
          $this->db->where('bat',1);
          $this->db->order_by('id','DESC');
          if(isset($dis->id))
          	$this->db->where('id <>',$dis->id);
          $query = $this->db->get('noidung',$num,$offset);
          return $query->result();
      }  
      function getNumTinChuyenmuc(){
          $item = $this->getItemChuyenmuc();
          $dis = $this->getTopTinChuyenmuc();
          if($item->parentid==0){
              $this->db->where('idcat',$item->id);
          }else{
              $this->db->where('idsub',$item->id);
          }
          $this->db->where('bat',1);
          if(isset($dis->id))
          	$this->db->where('id <>',$dis->id);
          $this->db->order_by('id','DESC');
          $query = $this->db->get('noidung');
          return $query->num_rows();
      }
      
      function getTopTinAnhChuyenMuc(){
          $item = $this->getItemChuyenmuc();
          if($item->parentid==0){
              $this->db->where('idcat',$item->id);
          }else{
              $this->db->where('idsub',$item->id);
          }
          $this->db->where('bat',1);
          $this->db->where('tinanh',1); 
          $this->db->order_by('id','DESC');        
          $query = $this->db->get('noidung');
          return $query->row(); 
      }
      
      function getTopListTinanh(){
          $check = $this->getTopTinAnhChuyenMuc();
          $item = $this->getItemChuyenmuc();
          if($item->parentid==0){
              $this->db->where('idcat',$item->id);
          }else{
              $this->db->where('idsub',$item->id);
          }
          $this->db->where('bat',1);
          $this->db->where('id <>',$check->id);
          $this->db->where('tinanh',1); 
          $this->db->order_by('id','DESC');
          $this->db->limit(4);        
          $query = $this->db->get('noidung');
          return $query->result();           
      } 
      function getTieudiemDanhmuc(){
          $check = $this->getTopTinAnhChuyenMuc();
          $item = $this->getItemChuyenmuc();
          if($item->parentid==0){
              $this->db->where('idcat',$item->id);
          }else{
              $this->db->where('idsub',$item->id);
          }
          $this->db->where('id <>',$check->id);
          $this->db->where('bat',1);
          $this->db->where('tinanh',0);
          $this->db->where('tinnong',0);
          $this->db->where('tindacbiet',1); 
          $this->db->order_by('id','DESC');
          $this->db->limit(5);        
          $query = $this->db->get('noidung');
          return $query->result();           
      } 
      function getTindocnhieuChuyenmuc(){
          $item = $this->getItemChuyenmuc();
          if($item->parentid==0){
              $this->db->where('idcat',$item->id);
          }else{
              $this->db->where('idsub',$item->id);
          }
          $this->db->where('bat',1);
          $this->db->order_by('luotxem','DESC'); 
          $this->db->limit('10') ;      
          $query = $this->db->get('noidung');
          return $query->result(); 
      }
/**********
* Chi tiet tin               
*/
      function getItemChitiet(){
          $id = (int)$this->uri->segment('4');
          $this->db->where('id',$id);
          $query = $this->db->get('noidung');
          return $query->row();
      }
      function getChitiet(){
          $item = $this->getItemChitiet();
          $this->db->query('Update vnit_noidung SET luotxem=luotxem+1 Where id ='.$item->id);
          return $item;
      }
      
      function getTinmoidang(){
          $item = $this->getItemChitiet();
          $this->db->where('id <>',$item->id);
          $this->db->where('idcat',$item->idcat);
          $this->db->where('ngay >=',$item->ngay);
          $this->db->where('bat',1);
          $this->db->limit('10');
          $this->db->order_by('id','DESC');
          $query = $this->db->get('noidung');
          return $query->result();
      }
      function getTincuHon(){
          $item = $this->getItemChitiet();
          $this->db->where('id <>',$item->id);
          $this->db->where('idcat',$item->idcat);
          $this->db->where('ngay <',$item->ngay);
          $this->db->where('bat',1);
          $this->db->limit('10');
          $this->db->order_by('id','DESC');
          $query = $this->db->get('noidung');
          return $query->result();
      }      
  }
?>
