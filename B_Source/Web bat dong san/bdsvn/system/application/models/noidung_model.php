<?php
/********************************
* Tac gia: Tran Ngoc Duoc
* Ngay tao: 29/07/2010
* Phien ban v2.0 
********************************/
  class noidung_model extends Model{
      function noidung_model(){
          parent::Model();
      }
      // Quan ly the loại
      function getAllTheloai(){
          $this->db->where('parentid',0);
          $this->db->order_by('sapxep','ASC');
          $query = $this->db->get('danhmuc');
          return $query->result();
      }
      
      function getNameCat($id){
          $this->db->where('id',$id);
          $query = $this->db->get('danhmuc');
          return $query->row();
      }
      
      function SaveTheloai(){
          $id = $this->uri->segment('3');
          $data = array(
            'ten' => $this->input->post('ten'),
            'parentid' =>$this->input->post('parentid'),
            'alias' =>  $this->string_library->stringchange($this->input->post('alias')),
            'bat' => $this->input->post('bat'),
            'sapxep' => $this->input->post('sapxep'),
            'phantrang' => $this->input->post('phantrang'),
            'mieuta' => $this->input->post('mieuta'),
            'tukhoa' => $this->input->post('tukhoa')
          );
          if($id){
              $this->db->where('id',$id);
              if($this->db->update('danhmuc',$data)){
                  return true;
              }else{
                  return false;
              }
          }else{
              if($this->db->insert('danhmuc',$data)){
                  return true;
              }else{
                  return false;
              }
          }
      }
      
      function battheloai(){
          $id = $this->uri->segment('3');
          $val = $this->uri->segment('4');
          if($val==1){
              $bat =0;
          }else{
              $bat =1;
          }
          $data = array(
             'bat' => $bat
          );
          $this->db->where('id',$id);
          if($this->db->update('danhmuc',$data)){
              return true;
          }else{
              return false;
          }  
      }
      function getItemTheloai(){
          $id = $this->uri->segment('3');
          $this->db->where('id',$id);
          $query = $this->db->get('danhmuc');
          return $query->row();
      }
      // Quan ly Danh muc
      function getAllDanhmuc(){
          $this->db->where('parentid <>',0);
          $this->db->order_by('parentid','ASC');
          $query = $this->db->get('danhmuc');
          return $query->result();
      }   
      function getITheloai($id){
          $this->db->where('id',$id);
          $query = $this->db->get('danhmuc');
          $item = $query->row()->ten;
          return $item;
      }
      

      
      //bai viet
      function getAllBaiviet($num,$offset){
          $this->db->order_by('id','DESC');
          $query = $this->db->get('noidung',$num,$offset);
          return $query->result();
      }
      function getNumBaiviet(){
          $query = $this->db->get('noidung');
          return $query->num_rows();
      }
      
      function getListDanhmuc($id){
          $this->db->where('parentid',$id);
          $query = $this->db->get('danhmuc');
          return $query->result();
      }
      
      function getItemBaiviet(){
          $id = $this->uri->segment('3');
          $this->db->where('id',$id);
          $query = $this->db->get('noidung');
          return $query->row();
      }
      function save(){
          $id = $this->uri->segment('3');
          $chuyenmuc = $this->input->post('chuyenmuc');
          $item = explode('-',$chuyenmuc);
          $data = array(
            'idcat' => $item[0],
            'idsub' => $item['1'],
            'tieude'=> (string)$this->input->post('tieude'),
            'alias' => $this->string_library->stringchange($this->input->post('alias')),
            'hinhanh' => (string)$this->input->post('hinhanh'),
            'id_sukien' => (int)$this->input->post('id_sukien'),
            'tinanh' => (int)$this->input->post('tinanh'),
            'tinnong' => (int)$this->input->post('tinnong'),
            'tinhay' => (int)$this->input->post('tinhay'),
            'tindacbiet' => (int)$this->input->post('tindacbiet'),
            'noidungngan' => (string)$this->input->post('noidungngan'),
            'noidung' => $this->input->post('noidung'),
            'mieuta' => (string)$this->input->post('mieuta'),
            'ngay' => mdate('%Y-%m-%d %H:%i:%s',time()),
            'tukhoa' => (string)$this->input->post('tukhoa'),
            'option' => 'hienthi='.$this->input->post('hienthi').',lienquan='.$this->input->post('lienquan').',luotxem='.$this->input->post('luotxem').',ngaydang='.$this->input->post('ngaydang'),
            'bat' => $this->input->post('bat')
          );
          
          if($id){
              $this->db->where('id',$id);
              if($this->db->update('noidung',$data)){
                  return true;
              }else{
                  return false;
              }
          }else{
              if($this->db->insert('noidung',$data)){
                  return true;
              }else{
                  return false;
              }
          }
      }          
      function batbaiviet(){
          $id = $this->uri->segment('3');
          $val = $this->uri->segment('4');
          if($val==1){
              $bat =0;
          }else{
              $bat =1;
          }
          $data = array(
             'bat' => $bat
          );
          $this->db->where('id',$id);
          if($this->db->update('noidung',$data)){
              return true;
          }else{
              return false;
          }  
      }      
  }
?>
