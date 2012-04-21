<?=form_open('noidung/capnhatdanhmuc/'.$this->uri->segment(3))?>
 <div style="width: 78%;float: left;">
     <fieldset>
        <legend>Thêm mới thể loại</legend>
        <table class="adminform">
            <tr>
                <td class="key" width="200">Tên thể loại</td>
                <td><input type="text" name="ten" value="<?=$rs->ten?>" style="width: 300px;"></td>
            </tr>
            <tr>
                <td class="key" width="200">Alias:</td>
                <td><input type="text" name="alias" value="<?=$rs->alias?>" style="width: 300px;"></td>
            </tr> 
            <tr>
                <td class="key" width="200">Thể loại:</td>
                <td>
                    <select name="parentid">
                    <?foreach($theloai as $tl):?>
                        <option value="<?=$tl->id?>" <?if($tl->id ==$rs->parentid){echo 'selected="selected"';}?>><?=$tl->ten?></option>
                    <?endforeach;?>
                    </select>
                </td>
            </tr>                       
            <tr>
                <td class="key">Bật | tắt</td>
                <td>
                    <select name="bat">
                        <option value="1" <?if($rs->bat=='1'){echo 'selected="selected"';}?>>Bật</option>
                        <option value="0" <?if($rs->bat=='0'){echo 'selected="selected"';}?>>Tắt</option>
                    </select>
                </td>
            </tr> 
            <tr>
                <td class="key">Phân trang</td>
                <td><input type="text" name="phantrang" value="<?=$rs->phantrang?>"></td>
            </tr>     
            <tr>
                <td class="key">Miêu tả</td>
                <td>
                    <textarea cols="" rows="" style="width: 50%;height: 50px;" name="mieuta"><?=$rs->mieuta?></textarea> 
                </td>
            </tr>
            <tr>
                <td class="key">Từ khóa</td>
                <td>
                     <textarea cols="" rows="" style="width: 50%;height: 50px;" name="tukhoa"><?=$rs->tukhoa?></textarea>
                </td>
            </tr> 
            <tr>
                <td class="key">Sắp xếp</td>
                <td><input type="text" name="sapxep" value="<?=$rs->sapxep?>" size="10"></td>
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
                    <?=$this->icon_library->cancel('noidung/danhmuc')?> 
                </li>
                
            </ul>
        </div>
    </div>
   
 </div>
 </div>
 <?=form_close()?>
