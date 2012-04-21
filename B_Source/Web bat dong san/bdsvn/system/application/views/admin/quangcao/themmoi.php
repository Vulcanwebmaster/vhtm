<?=form_open('quangcao/themmoi',array('name'=>'adminform'))?>
 <div style="width: 78%;float: left;">
     <fieldset>
        <legend>Thêm mới thể loại</legend>
        <table class="adminform">
            <tr>
                <td class="key" width="200">Tên quảng cáo</td>
                <td>
                    <input type="text" name="name" value="<?=set_value('name')?>" style="width: 300px;">
                    <?=form_error('tieude')?>
                </td>
            </tr>
            <tr>
                <td class="key" width="200">Danh muc:</td>
                <td>
                <select name="id_dm">
                    <?foreach($list as $dm):?>
                        <option value="<?=$dm->id?>"><?=$dm->name?> - <?=$dm->rong?></option>
                    <?endforeach;?>
                </select>
                </td>
            </tr>
            <tr>
                <td class="key" width="200">Link:</td>
                <td><input type="text" name="link" value="<?=set_value('link')?>" style="width: 300px;"></td>
            </tr>
            <tr>
                <td class="key" width="200">File:</td>
                <td><input type="text" name="hinhanh" value="<?=set_value('hinhanh')?>" style="width: 300px;">
                <a class="addfile" href="<?=base_url()?>quanlyfile/themanh/hinhanh">Thêm ảnh</a>
                </td>
            </tr> 
            <tr>
                <td class="key" width="200">Chiều cao:</td>
                <td><input type="text" name="cao" value="<?=set_value('cao')?>"> Fixel</td>
            </tr> 
            <tr>
                <td class="key" width="200">Chiều dài:</td>
                <td><input type="text" name="dai" value="<?=set_value('dai')?>"> Fixel</td>
            </tr>
            <tr>
                <td class="key">Loại File</td>
                <td>
                    <select name="option">
                        <option value="0">Hình ảnh</option>
                        <option value="1">Flash</option>
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
                <td class="key" width="200">Ngày bắt đầu:</td>
                <td><input type="text" name="date_begin" value="<?=set_value('date_begin')?>"></td>
            </tr> 
            <tr>
                <td class="key" width="200">Ngày kết thúc:</td>
                <td><input type="text" name="date_end" value="<?=set_value('date_end')?>"></td>
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
                    <?=$this->icon_library->add('quangcao/themmoi')?>
                </li>
                <li>
                    <?=$this->icon_library->save()?>
                </li>
                <li>
                    <a class="toolbar"><span class="icon-32-trash"></span>Xóa</a>
                </li>                 
                <li class="divider"></li>                
                <li>
                    <?=$this->icon_library->cancel('quangcao/danhsach')?> 
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
