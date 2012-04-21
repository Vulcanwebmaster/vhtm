<?php
  class quanlyfile_model extends Model{
      function quanlyfile_model(){
          parent::model();
      }
      function getAllFile($num,$offset){
          $this->db->order_by('id','DESC');
          $query = $this->db->get('quanlyfile',$num,$offset);
          return $query->result();
      }
      function getNumFile(){
          $query = $this->db->get('quanlyfile');
          return $query->num_rows();
      }      
      function upload(){
        $file =$_FILES["file"]["name"];
         if($file){
           $t = time();
            $dir ='uploads/images/';
            $filename = stripslashes($_FILES['file']['name']);
            $i = strrpos($filename,".");
            if (!$i) { return ""; }
            $l = strlen($filename) - $i;
            $extension = substr($filename,$i+1,$l);                 
            $extension = strtolower($extension); 
            $size=filesize($_FILES['file']['tmp_name']);
            $target =$dir.time().'.'.$extension;
            if (copy($_FILES['file']['tmp_name'],$target)){
                $data = array(
                    'tenfile' => time().'.'.$extension,
                    'kieufile' => $extension,
                    'dungluong' => $size/1024,
                    'duongdan' => $target
                );
                $this->db->insert('quanlyfile',$data);
                return true;               
            }else{
                return false;
            }
                         
         }else{
             return false;
         }
      }
  }
?>
