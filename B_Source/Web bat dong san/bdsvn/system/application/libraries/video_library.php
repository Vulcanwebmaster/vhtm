<?php
  class video_library{
      function construct(){
          $this->CI = get_instance();
      }
      function video($link,$width=false,$height=false){
          if($width==false && $height==false){
              $width ='380';
              $height ='240';
          }
       $data ='<script type="text/javascript">
          var so = new SWFObject(\''.base_url().'system/application/views/theme/site/vnit/js/player.swf\',\'mpl\',\''.$width.'\',\''.$height.'\',\'9\');
          so.addParam(\'allowfullscreen\',\'true\');
          so.addParam(\'allowscriptaccess\',\'always\');
          so.addParam(\'wmode\',\'opaque\');
          so.addVariable(\'autostart\',\'true\');
          so.addVariable(\'repeat\',\'always\');
          so.addVariable(\'file\',\''.$link.'\');
          so.addVariable(\'skin\',\''.base_url().'system/application/views/theme/site/vnit/js/dangdang.swf\');

          so.addVariable(\'backcolor\',\'0x000000\');
          so.addVariable(\'frontcolor\',\'0xCCCCCC\');
          so.addVariable(\'lightcolor\',\'0xbbbbbb\');
          so.addVariable(\'screencolor\',\'0x000000\');  
          so.write(\'mediaspace\');
        </script>';
        return $data; 
      }
      function music($link,$item=false,$width=false,$height=false){
          if($width==false && $height==false){
              $width ='430';
              $height ='285';
          }
          if($item==false){
              $item = 0;
          }
       $data ='<script type="text/javascript">
          var so = new SWFObject(\''.base_url().'system/application/views/theme/site/vnit/js/player.swf\',\'mpl\',\''.$width.'\',\''.$height.'\',\'9\');
          so.addParam(\'allowfullscreen\',\'true\');
          so.addParam(\'allowscriptaccess\',\'always\');
          so.addParam(\'wmode\',\'opaque\');
          so.addVariable(\'autostart\',\'true\');
          so.addVariable(\'repeat\',\'always\');
          so.addVariable(\'item\',\''.$item.'\');
          so.addVariable(\'file\',\''.$link.'\');
          so.addVariable(\'skin\',\''.base_url().'system/application/views/theme/site/vnit/js/silverywhite.swf\');

          so.addVariable(\'backcolor\',\'0x000000\');
          so.addVariable(\'frontcolor\',\'0xCCCCCC\');
          so.addVariable(\'lightcolor\',\'0xbbbbbb\');
          so.addVariable(\'screencolor\',\'0x000000\');  
          so.write(\'mediaspace\');
        </script>';
        return $data; 
      }
      
      function videolist($link,$width=false,$height=false){
          if($width==false && $height==false){
              $width ='563';
              $height ='350';
          }
       $data ='<script type="text/javascript">
          var so = new SWFObject(\''.base_url().'system/application/views/site/templates/tnd/video/js/player.swf\',\'mpl\',\''.$width.'\',\''.$height.'\',\'9\');
          so.addParam(\'allowfullscreen\',\'true\');
          so.addParam(\'allowscriptaccess\',\'always\');
          so.addParam(\'wmode\',\'opaque\');
          so.addVariable(\'autostart\',\'true\');
          so.addVariable(\'repeat\',\'always\');
          so.addVariable(\'file\',\''.$link.'\');
          so.addVariable(\'image\',\''.base_url().'system/application/views/site/templates/tnd/video/images/player.jpg\');
          so.addVariable(\'skin\',\''.base_url().'system/application/views/site/templates/tnd/video/js/dangdang.swf\');

          so.addVariable(\'backcolor\',\'0x000000\');
          so.addVariable(\'frontcolor\',\'0xCCCCCC\');
          so.addVariable(\'lightcolor\',\'0xbbbbbb\');
          so.addVariable(\'screencolor\',\'0x000000\');  
          so.write(\'mediaspace\');
        </script>';
        return $data; 
      }      
  }
?>
