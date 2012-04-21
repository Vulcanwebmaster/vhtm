<?=form_open('noidung/themmoi',array('name'=>'adminform'))?>
 <div style="width: 60%;float: left;">
     <fieldset>
        <legend>Thêm mới bài viết</legend>
        <table class="adminform">
            <tr>
                <td class="key" width="120">Tiêu đề</td>
                <td><input type="text" name="tieude" value="<?=set_value('tieude')?>" style="width: 300px;"><?=form_error('tieude')?></td>
            </tr>
            <tr>
                <td class="key" >Alias:</td>
                <td><input type="text" name="alias" value="<?=set_value('alias')?>" style="width: 300px;"></td>
            </tr> 
            <tr>
                <td class="key">Chuyên mục</td>
                <td>
                    <select name="chuyenmuc" style="font-size: 11px;">
                        <option value="0-0">Không có chuyên mục</option>
                        <?foreach($list as $cm):
                        $item = $this->noidung->getListDanhmuc($cm->id);
                        ?>
                        <option value="<?=$cm->id?>-0"><?=$cm->ten?></option>
                        <?foreach($item as $sub):?>
                        <option value="<?=$cm->id?>-<?=$sub->id?>"> - -<?=$sub->ten?></option
                        <?endforeach;?>
                        <?endforeach;?>
                    </select>
                </td>
            </tr> 
                                   
            <tr>
                <td class="key">Bật | tắt</td>
                <td>
                    <select name="bat">
                        <option value="1">Bật</option>
                        <option value="0">Tắt</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="key">Hình ảnh</td>
                <td><input type="text" name="hinhanh" value=""> <a class="addfile" href="<?=base_url()?>quanlyfile/themanh/hinhanh">Thêm ảnh</a></td>
            </tr>
            <tr>
                <td class="key">Lựu chọn</td>
                <td>

                      <input type="checkbox" value="1" name="tindacbiet">Tin nổi bật 
                      
                      
                </td>
            </tr>             
            <tr>
                <td colspan="2">Nội dung ngắn
                
                    <textarea cols="" rows="" style="width: 99%;height: 100px;" name="noidungngan"></textarea>
                </td>
            </tr>     
            <tr>
                <td colspan="2">Nội dung
               
                     <?=$this->editor_library->editor_simply('noidung','','')?> 
                </td>
            </tr>
                                                      
        </table>
     </fieldset>
 </div> 

 
 <div style="width: 39%;float: right;">
 <div class="toolbar_box">
    <div class="t">
        <div class="t">
            <div class="t"></div>
        </div>
    </div>
    <div class="m">
        <div class="toolbar-list">
            <ul>
                <li>
                    <?=$this->icon_library->add('noidung/themtheloai')?>
                </li>
                <li>
                    <?=$this->icon_library->save()?>
                </li>
              
                <li>
                    <?=$this->icon_library->cancel('noidung/baiviet')?> 
                </li>
                
            </ul>
        </div>
    </div>
   
 </div>
    <table>
        <tr>
            <td>Miêu tả:</td>
            <td><textarea cols="" rows="" name="mieuta" style="width: 200px;height: 50px;"></textarea></td>
        </tr>
        <tr>
            <td>Từ khóa:</td>
            <td><textarea cols="" rows="" name="tukhoa" style="width: 200px;height: 50px;"></textarea></td>
        </tr>        
   </table>
   <table>
    <tr>
        <td>Hiển thị nội dung ngắn:</td>
        <td>
            
            <select name="hienthi">
                <option value="1">Hiển thị</option>
                <option value="0">Ẩn</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Hiển thị bài viết liên quan:</td>
        <td>
            <select name="lienquan">
                <option value="1">Hiển thị</option>
                <option value="0">Ẩn</option>
            </select>
        </td>
    </tr>  
    <tr>
        <td>Hiển thị lượt xem:</td>
        <td>
            <select name="luotxem">
                <option value="1">Hiển thị</option>
                <option value="0">Ẩn</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Hiển thị ngày đăng:</td>
        <td>
            <select name="ngaydang">
                <option value="1">Hiển thị</option>
                <option value="0">Ẩn</option>
            </select>
        </td>
    </tr>           
   </table>
 </div>
 <?=form_close()?>
<script type="text/javascript">
$('.addfile').popupWindow({
height:600,
width:500,
top:50,
left:50
});
</script>
