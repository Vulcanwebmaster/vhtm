<?php
  class nhadats_model extends Model{
      function nhadats_model(){
          parent::Model();
      }
      function getAllTin($num,$offset){
          $this->db->where('dang',1);
          $this->db->order_by('idtin','DESC');
          $query = $this->db->get('nhadat',$num,$offset);
          return $query->result();
      }
      function getNumTin(){
          $this->db->order_by('idtin','DESC');
          $query = $this->db->get('nhadat');
          return $query->num_rows();
      }
       function getDangtinThanhPho(){
          $this->db->where('idquan','0');
          $query = $this->db->get('thanhpho');
          return $query->result();
      }
      function getDanhmucQuan(){
          $name =$this->uri->segment('3');
          $item = explode('-',$name);
          $this->db->Where('idquan',$item['2']);
          $this->db->where('idquan <>',0);
          $query = $this->db->get('thanhpho');
          return $query->result();          
      }
      
      function getDangtinDanhmuc(){
          $this->db->Where('parentid','0');
          $this->db->Where('bat','1');
          $query = $this->db->get('nhadat_dm');
          return $query->result();
      }
      
      function getDangtinHuong(){
          $this->db->order_by('idhuong','ASC');
          $query = $this->db->get('huong');
          return $query->result();
      } 
      
      function getDangtinVitri(){
          $query = $this->db->get('vitri');
          return $query->result();
      }       
      function getCapnhat(){
          $idtin = (int)$this->uri->segment('4');          
          $session_id = $this->session->userdata('session_id'); 
          $this->db->select('nhadat.*, nhadat_chitiet.*');

          $this->db->join('nhadat_chitiet','nhadat.idtin = nhadat_chitiet.id_tin');
          $this->db->Where('idtin',$idtin);
          //$this->db->where('session_id',$session_id);
          $query = $this->db->get('nhadat');
          if($query->row()){
              return $query->row();
          }else{
              return false;
          }
      }
      function loaddanhmuc($id){
          $this->db->where('iddm',$id);
          $query = $this->db->get('nhadat_dm');
          return $query->row();
      }
      function savebuoc1(){
           
          $sectionid =$this->input->post('sectionid');
          $parentid = $this->input->post('parentid');
          $id_thanhpho = $this->input->post('id_thanhpho');
          $id_quan = $this->input->post('id_quan');
          $idvitri = $this->input->post('idvitri');

          $idhuong = $this->input->post('idhuong');
          $nhucau = $this->input->post('nhucau');
          $data = array(
            
            'nhucau' => $nhucau,
            'sectionid' => $sectionid,
            'parentid' => $parentid,
            'id_thanhpho' => $id_thanhpho,
            'id_quan' => $id_quan,
            'idvitri' => $idvitri,
            'idhuong' => $idhuong,
            'batdau' => mdate('%Y-%m-%d %H:%i:%s',time())
            

          );
          if((int)$this->uri->segment('4')==0){
              if($this->db->insert('nhadat',$data)){
              $id_tin = $this->db->insert_id();
              $data_chitiet = array(
                'id_tin' => $id_tin
              );
              $this->db->insert('nhadat_chitiet',$data_chitiet);
              
              $this->db->where('idtin',$id_tin);
              $query = $this->db->get('nhadat');
              return $query->row();
              
              }else{
                  return false;
              }
          }else{
             $this->db->Where('idtin',$this->uri->segment('4'));
             $this->db->update('nhadat',$data);
             $id_tin =$this->uri->segment('4');

              $this->db->where('idtin',$id_tin);
              $query = $this->db->get('nhadat');
              return $query->row();
          }          
      }
      
      
      function savebuoc2(){
                $id_tin = $this->uri->segment('4');
                $xetrongtailon = $this->input->post('xetrongtailon');
                $matpho = $this->input->post('matpho');
                $otoravao = $this->input->post('otoravao');
                $tronghem = $this->input->post('tronghem');
                $anninh = $this->input->post('anninh');
                $dienthoai = $this->input->post('dienthoai');
                $dien3pha = $this->input->post('dien3pha');
                $gansieuthi = $this->input->post('gansieuthi');
                $diensinhhoat = $this->input->post('diensinhhoat');
                $khudantricao = $this->input->post('khudantricao');
                $gancho = $this->input->post('gancho');
                $truyenhinhcap = $this->input->post('truyenhinhcap');
                $adsl = $this->input->post('adsl');
                $gancongvien = $this->input->post('gancongvien');
                $trungtamtheduc = $this->input->post('trungtamtheduc');
                $gantruongdaihoc = $this->input->post('gantruongdaihoc');
                $ganbenhvien = $this->input->post('ganbenhvien');
                $nuocmay = $this->input->post('nuocmay');
                $trungtamthuongmai = $this->input->post('trungtamthuongmai');
                $gantruonghoc = $this->input->post('gantruonghoc');
                $cothangmay = $this->input->post('cothangmay');
                $cobeboi = $this->input->post('cobeboi');
                $maylanh = $this->input->post('maylanh');
                $duocnuoithucanh = $this->input->post('duocnuoithucanh');
                $phongkhach = $this->input->post('phongkhach');
                $phongngu = $this->input->post('phongngu');
                $tanglung = $this->input->post('tanglung');
                $tangham = $this->input->post('tangham');
                $noidexe = $this->input->post('noidexe');
                $wc = $this->input->post('wc');
                $sodo = $this->input->post('sodo');
                $giayviettay = $this->input->post('giayviettay');
                $giayhong = $this->input->post('giayhong');
                $giayxanh = $this->input->post('giayxanh');
                $giaytohople = $this->input->post('giaytohople');

                $data_chitiet = array(
                    'xetrongtailon' => $xetrongtailon,
                    'matpho' => $matpho,
                    'otoravao' => $otoravao,
                    'tronghem' => $tronghem,
                    'anninh' => $anninh,
                    'dienthoai' => $dienthoai,
                    'dien3pha' => $dien3pha,
                    'gansieuthi' => $gansieuthi,
                    'diensinhhoat' => $diensinhhoat,
                    'khudantricao' => $khudantricao,
                    'gancho' => $gancho,
                    'truyenhinhcap' => $truyenhinhcap,
                    'adsl' => $adsl,
                    'gancongvien' => $gancongvien,
                    'trungtamtheduc' => $trungtamtheduc,
                    'gantruongdaihoc' => $gantruongdaihoc,
                    'ganbenhvien' => $ganbenhvien,
                    'nuocmay' => $nuocmay,
                    'trungtamthuongmai' => $trungtamthuongmai,
                    'gantruonghoc' => $gantruonghoc,
                    'cothangmay' => $cothangmay,
                    'cobeboi' => $cobeboi,
                    'maylanh' => $maylanh,
                    'duocnuoithucanh' => $duocnuoithucanh,
                    'phongkhach' => $phongkhach,
                    'phongngu' => $phongngu,
                    'tanglung' => $tanglung,
                    'tangham' => $tangham,
                    'noidexe' => $noidexe,
                    'wc' => $wc,
                    'sodo' => $sodo,
                    'giayviettay' => $giayviettay,
                    'giayhong' => $giayhong,
                    'giayxanh' => $giayxanh,
                    'giaytohople' => $giaytohople                    
                ); 
                $this->db->Where('id_tin',$id_tin);
                if($this->db->update('nhadat_chitiet',$data_chitiet)){
                    return true;
                }else{
                    return false;
                }         
      }
      
      function savebuoc3(){
         $id_tin = $this->uri->segment('4');

         $item = $this->getCapnhat();
         if($item->batdau==''){
             $date = mdate('%Y-%m-%d %H:%i:%s',time());  
         }else{
             $date = $item->batdau;
         }         
         $tieude = $this->input->post('tieude'); 
         $diachilienhe = $this->input->post('diachilienhe');
         $giathue = $this->input->post('gia'); 
         $matbang = $this->input->post('matbang'); 
         $dai = $this->input->post('dai');
         $rong = $this->input->post('rong');
         $dientich = $this->input->post('dientich');
         $tigia = $this->input->post('tigia');
         $noidung = $this->input->post('noidung');
         // Thong tin lien he
         $hoten = $this->input->post('hoten');
         $diachi = $this->input->post('diachi');
         $dienthoailienhe = $this->input->post('dienthoailienhe');
         $didong = $this->input->post('didong');
         $email = $this->input->post('email');
         

         $data = array(
            'tieude'=>$tieude,
            'url_tieude' => $this->string_library->stringchange($tieude),
            'diachilienhe' => $diachilienhe,
            'giathue'=>$giathue,
            'dai' => $dai,
            'rong' => $rong,
            'dientich' => $dientich,
            'matbang' => $matbang,
            'noidung' => $noidung,
            //'batdau'=> $date,
            'hoten' => $hoten,
            'diachi' => $diachi,
            'dienthoailienhe' => $dienthoailienhe,
            'didong' => $didong,
            'email' => $email,
            'vip' =>$this->input->post('vip'),
            'dang' => 1,
            'bat' =>1
         );
         
         $this->db->where('idtin',$id_tin);
         if($this->db->update('nhadat',$data)){
             return true;
         }else{
             return false;
         }
      }

            
      function getAllImgTin($id){
          $this->db->where('id_tin',$id);
          $query = $this->db->get('nhadat_img');
          return $query->result();
      }
      function uploadfile($id){
            if(filesize($_FILES['images']['tmp_name']) ){
                $url = '';
                  $array = $this->uploadthumb_library->upload($url,'nhadat');
                  
                  $img = explode('-',$array);
                  $data_img = array(
                        'id_tin' => $id,
                        'small' => $img['0'],
                        'normal' => $img['1'],
                        'big' => $img['2']
                  );
                   
                 if($this->db->insert('nhadat_img',$data_img)){
                     return true;
                 }else{
                     return false;
                 }
              }else{
                 return false; 
              }          
      } 
            
      function battin(){
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
          $this->db->where('idtin',$id);
          if($this->db->update('nhadat',$data)){
              return true;
          }else{
              return false;
          }  
      }            
  }
?>
