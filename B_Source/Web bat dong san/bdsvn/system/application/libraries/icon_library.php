<?php
  class icon_library{
      function __construct(){
          $this->CI = get_instance();          
      }
      
      function edit($link){
          return  '<a href="'.base_url().$link.'" title="Cập nhật thông tin"><img src="'.base_url().'system/application/views/theme/admin/vnit/images/icon/edit.png"></a>';
      }
      function view($link){
          return  '<a href="'.base_url().$link.'" title="Xem thông tin"><img src="'.base_url().'system/application/views/theme/admin/vnit/images/icon/views.png"></a>';
      }
      function publish($link,$status){
          if($status==0){
              $rep ='_x';
          }else{
              $rep ='';
          }
          return  '<a href="'.base_url().$link.'" title="Bật | Tắt"><img src="'.base_url().'system/application/views/theme/admin/vnit/images/icon/publish'.$rep.'.png"></a>';
      }      
      function del($id){
          return  '<a title="Xóa" href="#" class="delbutton" id="'.$id.'"><img src="'.base_url().'system/application/views/theme/admin/vnit/images/icon/del.png"></a>';
      } 
      function add($link){
          return  '<a title="Thêm mới" href="'.base_url().$link.'" class="toolbar"><span class="icon-32-new"></span>Add</a>';
      } 
      function delete($link){
          return  '<a title="Xóa" href="'.base_url().$link.'" class="toolbar"><span class="icon-32-trash"></span>Xóa</a>';
      }      
      function cancel($link){
          return  '<a title="Hủy thao tác" href="'.base_url().$link.'" class="toolbar"><span class="icon-32-cancel"></span>Hủy</a>';
      }
     
      function save(){
          return  '<input type="submit" value="Lưu" class="save"> ';
      }
      function upload(){
          return  '<input type="submit" value="Upload" class="upload"> ';
      }                                     
  }
?>
