<?php
  class uploadthumb_library{
     
      function __construct(){
          $this->CI = get_instance();
      }
      
      function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
       }
       
       function upload($url,$folder){
            define ("MAX_SIZE","400");
            $errors=0;

                $image =$_FILES["images"]["name"];
                $uploadedfile = $_FILES['images']['tmp_name'];
                 
             
                 if ($image) 
                 {
                 
                     $filename = stripslashes($_FILES['images']['name']);
                     $i = strrpos($filename,".");
                     if (!$i) { return ""; }
                     $l = strlen($filename) - $i;
                     $extension = substr($filename,$i+1,$l);                 
                    //$extension = getExtension($filename);
                     $extension = strtolower($extension);
                    
                    
                    if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 
                     {
                    
                         $change='<div class="msgdiv">Unknown Image extension </div> ';
                         $errors=1;
                     }
                     else
                     {

                    $size=filesize($_FILES['images']['tmp_name']);


                    if ($size > MAX_SIZE*1024)
                    {
                        $change='<div class="msgdiv">You have exceeded the size limit!</div> ';
                        $errors=1;
                    }


                    if($extension=="jpg" || $extension=="jpeg" )
                    {
                        //move_uploaded_file(,$url.'.'.$extension);
                        $uploadedfile = $_FILES['images']['tmp_name'];
                        $src = imagecreatefromjpeg($uploadedfile);

                    }else if($extension=="png")
                    {
                        $uploadedfile = $_FILES['images']['tmp_name'];
                        $src = imagecreatefrompng($uploadedfile);

                    }else if($extension=="gif") {
                        $uploadedfile = $_FILES['images']['tmp_name'];
                        $src = @imagecreatefromgif($uploadedfile);
                    }

                    //echo $src;

                    list($width,$height)=getimagesize($uploadedfile);


                    $newwidth=20;
                    $newheight=($height/$width)*$newwidth;
                    $tmp=imagecreatetruecolor($newwidth,$newheight);


                    $newwidth1=60;
                    $newheight1=($height/$width)*$newwidth1;
                    $tmp1=imagecreatetruecolor($newwidth1,$newheight1);

                    $newwidth3=500;
                    $newheight3=($height/$width)*$newwidth3;
                    $tmp3=imagecreatetruecolor($newwidth3,$newheight3);
                    //move_uploaded_file($_FILES['images']['tmp_name'],$url.'.'.$extension);

                    
                    imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
                    imagecopyresampled($tmp1,$src,0,0,0,0,$newwidth1,$newheight1,$width,$height);
                    imagecopyresampled($tmp3,$src,0,0,0,0,$newwidth3,$newheight3,$width,$height);
                    $name = time().'_'.$url.'.'.$extension;
                    move_uploaded_file($_FILES['images']['name'],$name);
                    $filename = "uploads/".$folder."/20/".$name;
                    
                    $filename1 = "uploads/".$folder."/60/small_". $name;
                    $filename3 = "uploads/".$folder."/200/big_". $name;



                    imagejpeg($tmp,$filename,100);

                    imagejpeg($tmp1,$filename1,100);
                    imagejpeg($tmp3,$filename3,100);

                    imagedestroy($src);
                    imagedestroy($tmp);
                    imagedestroy($tmp1);
                    imagedestroy($tmp3);
                    return $filename.'-'.$filename1.'-'.$filename3;
                    
            }

            }           
       }
  }
?>
