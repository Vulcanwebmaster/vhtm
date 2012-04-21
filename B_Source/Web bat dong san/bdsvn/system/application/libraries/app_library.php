<?php
  class app_library{
      function __construct(){
          $this->CI = get_instance();
      }
      
      function app($link,$name){
          $data ='<div style="width:100%;overflow:hidden">';
          $data .='<a target="_blank" href="http://www.google.com/bookmarks/mark?op=edit&bkmk='.$link.'"><span class="icon-16-google iconapp"</span></a>';
          $data .='<a target="_blank" href="http://www.facebook.com/share.php?u='.$link.'&t='.$name.'"><span class="icon-16-yahoobuzz iconapp"></span></a>';
          $data .='<a target="_blank" href="http://twitter.com/home?status='.$link.'"><span class="icon-16-twitter iconapp"></span></a>';
          $data .='<a target="_blank" href="http://www.facebook.com/share.php?u='.$link.'&t='.$name.'"><span class="icon-16-facebook iconapp"></span></a>';
          $data .='<a target="_blank" href="http://del.icio.us/post?v=2&url='.$link.'&title='.$name.'"><span class="icon-16-delicious  iconapp"></span></a>';
          $data .='<a target="_blank" href="http://digg.com/submit?phase=2&url='.$link.'&title='.$name.'"><span class="icon-16-digg iconapp"></span></a>';
          $data .='<a target="_blank" href="http://reddit.com/submit?url='.$link.'&title='.$name.'"><span class="icon-16-reddit iconapp"></span></a>';
          $data .='</div>';
          return $data;

      }
  }
?>
