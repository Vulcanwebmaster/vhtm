<?=form_open('noidung/themdanhmuc')?>
 <div style="width: 78%;float: left;">
     <fieldset>
        <legend>Thêm mới danh mục</legend>
        <table class="adminform">
            <tr>
                <td class="key" width="200">Tên danh mục</td>
                <td><input type="text" name="ten" value="<?=set_value('ten')?>" style="width: 300px;"></td>
            </tr>
            <tr>
                <td class="key" width="200">Alias:</td>
                <td><input type="text" name="alias" value="<?=set_value('alias')?>" style="width: 300px;"></td>
            </tr>
            <tr>
                <td class="key" width="200">Thể loại:</td>
                <td>
                    <select name="parentid">
                    <?foreach($theloai as $tl):?>
                        <option value="<?=$tl->id?>"><?=$tl->ten?></option>
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
                <td class="key">Phân trang</td>
                <td><input type="text" name="phantrang" value=""></td>
            </tr>     
            <tr>
                <td class="key">Miêu tả</td>
                <td>
                    <textarea cols="" rows="" style="width: 50%;height: 50px;" name="mieuta"></textarea> 
                </td>
            </tr>
            <tr>
                <td class="key">Từ khóa</td>
                <td>
                     <textarea cols="" rows="" style="width: 50%;height: 50px;" name="tukhoa"></textarea>
                </td>
            </tr>
            <tr>
                <td class="key">Sắp xếp</td>
                <td><input type="text" name="sapxep" value="" size="10"></td>
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
