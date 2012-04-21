<?=form_open('quangcao/capnhat/'.$this->uri->segment(3),array('name'=>'adminform'))?>
 <div style="width: 78%;float: left;">
     <fieldset>
        <legend>Thêm mới thể loại</legend>
        <table class="adminform">
            <tr>
                <td class="key" width="200">Tên quảng cáo</td>
                <td>
                    <input type="text" name="name" value="<?=$rs->name?>" style="width: 300px;">
                    <?=form_error('tieude')?>
                </td>
            </tr>
            <tr>
                <td class="key" width="200">Danh muc:</td>
                <td>
                <select name="id_dm">
                    <?foreach($list as $dm):?>
                        <option value="<?=$dm->id?>" <?if($rs->id_dm==$dm->id){echo 'selected="selected"';}?>><?=$dm->name?> - <?=$dm->rong?></option>
                    <?endforeach;?>
                </select>
                </td>
            </tr>
            <tr>
                <td class="key" width="200">Link:</td>
                <td><input type="text" name="link" value="<?=$rs->link?>" style="width: 300px;"></td>
            </tr>
            <tr>
                <td class="key" width="200">File:</td>
                <td><input type="text" name="hinhanh" value="<?=$rs->hinhanh?>" style="width: 300px;">
                <a class="addfile" href="<?=base_url()?>quanlyfile/themanh/hinhanh">Thêm ảnh</a>
                </td>
            </tr> 
            <tr>
                <td class="key" width="200">Chiều cao:</td>
                <td><input type="text" name="cao" value="<?=$rs->cao?>"> Fixel</td>
            </tr> 
            <tr>
                <td class="key" width="200">Chiều dài:</td>
                <td><input type="text" name="dai" value="<?=$rs->dai?>"> Fixel</td>
            </tr>
            <tr>
                <td class="key">Loại File</td>
                <td>
                    <select name="option">
                        <option value="0" <?if($rs->option==0){echo 'selected="selected"';}?>>Hình ảnh</option>
                        <option value="1" <?if($rs->option==1){echo 'selected="selected"';}?>>Flash</option>
                    </select>
                </td>
            </tr>           
            <tr>
                <td class="key">Bật | tắt</td>
                <td>
                    <select name="bat">
                        <option value="1" <?if($rs->bat==1){echo 'selected="selected"';}?>>Bật</option>
                        <option value="0" <?if($rs->bat==0){echo 'selected="selected"';}?>>Tắt</option>
                    </select>
                </td>
            </tr> 
            <tr>
                <td class="key" width="200">Ngày bắt đầu:</td>
                <td><input type="text" name="date_begin" value="<?=$rs->date_begin?>"></td>
            </tr> 
            <tr>
                <td class="key" width="200">Ngày kết thúc:</td>
                <td><input type="text" name="date_end" value="<?=$rs->date_end?>"></td>
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
                    <?=$this->icon_library->add('noidung/themtheloai')?>
                </li>
                <li>
                    <?=$this->icon_library->save()?>
                </li>
                <li>
                    <a class="toolbar"><span class="icon-32-trash"></span>Xóa</a>
                </li>                 
                <li class="divider"></li>                
                <li>
                    <?=$this->icon_library->cancel('noidung/theloai')?> 
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
