<?=form_open('lienhe/capnhatnhom/'.$this->uri->segment(3),array('name'=>'adminform'))?>
 <div style="width: 78%;float: left;">
     <fieldset>
        <legend>Thêm mới nhóm liên hệ</legend>
        <table class="adminform">
            <tr>
                <td class="key" width="200">Tên liên hệ</td>
                <td>
                    <input type="text" name="tenlienhe" value="<?=$rs->tenlienhe?>" style="width: 300px;">
                    <?=form_error('tenlienhe')?>
                </td>
            </tr>
            <tr>
                <td class="key" width="200">Hình ảnh</td>
                <td>
                    <input type="text" name="hinhanh" value="<?=$rs->hinhanh?>" style="width: 200px;"> <a class="addfile" href="<?=base_url()?>quanlyfile/themanh/hinhanh">Thêm ảnh</a>

                </td>
            </tr>            
            <tr>
                <td class="key">Email:</td>
                <td>
                    <input type="text" name="email" value="<?=$rs->email?>" style="width: 300px;">
                    <?=form_error('email')?>
                </td>
            </tr>            
            <tr>
                <td class="key" width="200">Địa chỉ:</td>
                <td><input type="text" name="diachi" value="<?=$rs->diachi?>" style="width: 300px;"><?=form_error('diachi')?></td>
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
                <td class="key">Điện thoại:</td>
                <td><input type="text" name="dienthoai" value="<?=$rs->dienthoai?>"><?=form_error('dienthoai')?></td>
            </tr>
            <tr>
                <td class="key">Di động:</td>
                <td><input type="text" name="didong" value="<?=$rs->didong?>"></td>
            </tr>                 

            <tr>
                <td class="key">Fax:</td>
                <td><input type="text" name="fax" value="<?=$rs->fax?>"></td>
            </tr>            
            <tr>
                <td class="key">Giới thiệu</td>
                <td>
                     <textarea cols="" rows="" style="width: 50%;height: 50px;" name="gioithieu"><?=$rs->gioithieu?></textarea>
                </td>
            </tr>
                                                      
        </table>
     </fieldset>
 </div>
 
 <div style="width: 21%;float: right;">
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
                    <?=$this->icon_library->add('lienhe/themmoinhom')?>
                </li>
                <li>
                    <?=$this->icon_library->save()?>
                </li>
                <li>
                    <a class="toolbar"><span class="icon-32-trash"></span>Xóa</a>
                </li>                 
                <li class="divider"></li>                
                <li>
                    <?=$this->icon_library->cancel('lienhe/nhomlienhe')?> 
                </li>
                
            </ul>
        </div>
    </div>
   
 </div>
 </div>
 <?=form_close()?>
<script type="text/javascript">
$('.addfile').popupWindow({
height:500,
width:500,
top:50,
left:50
});
</script>