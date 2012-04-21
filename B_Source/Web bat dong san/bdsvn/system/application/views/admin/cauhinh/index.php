 <div style="width: 60%;float: left;"> 
<?=form_open('cauhinh')?>
<fieldset>
    <legend>Cấu hình Website</legend>
    <table class="admin">

        <tr>
            <td width="200"><b>Tên Website:</b></td>
            <td><input type="text" name="site_name" value="<?=$setting['site_name']?>"></td>
        </tr>
        <tr>
            <td><b>Đóng website:</b></td>
            <td> <input type="radio" value="0" name="site_close" <?if($setting['site_close']==0){echo 'checked="checked"';}?>> Mở <input type="radio" name="site_close" value="1" <?if($setting['site_close']==1){echo 'checked="checked"';}?>> Đóng</td>
        </tr> 
        <tr>
            <td><b>Nội dung đóng website:</b></td>
            <td><textarea cols="" rows="" name="site_close_message" style="width: 100%;height: 50px;"><?=$setting['site_close_message']?></textarea> </td>
        </tr>         
        <tr>
            <td><b>Bộ soạn thảo:</b></td>
            <td> </td>
        </tr>         
        <tr>
            <td><b>Email:</b></td>
            <td> <input type="text" name="site_email" value="<?=$setting['site_email']?>"></td>
        </tr>
        <tr>
            <td><b>Site Copyright:</b></td>
            <td> <input type="text" name="site_copyright" value="<?=$setting['site_copyright']?>"></td>
        </tr>                       
    </table>
</fieldset>
<fieldset>
    <legend>Cấu hình tỉ giả</legend>
    <table class="admin">

        <tr>
            <td width="200"><b>USD:</b></td>
            <td><input type="text" name="usd" value="<?=$setting['usd']?>"></td>
        </tr>
        <tr>
            <td><b>SJC:</b></td>
            <td><input type="text" name="sjc" value="<?=$setting['sjc']?>"> </td>
        </tr> 
               
    </table>
</fieldset>
<fieldset>
    <legend>Cấu hình thẻ Meta</legend>
    <table class="admin">

        <tr>
            <td width="200"><b>Miêu tả website:</b></td>
            <td><textarea cols="" rows="" name="site_description" style="width: 100%;height: 50px;"><?=$setting['site_description']?></textarea></td>
        </tr>
        <tr>
            <td><b>Từ khóa:</b></td>
            <td> <textarea cols="" rows="" name="site_keywords" style="width: 100%;height: 50px;"><?=$setting['site_keywords']?></textarea> </td>
        </tr> 
               
    </table>
</fieldset>


</div>
 <div style="width: 36%;float: right;">
 <div class="toolbar_box">
    <div class="t">
        <div class="t">
            <div class="t"></div>
        </div>
    </div>
    <div class="m">
        <div class="toolbar-list">
            <ul>
                 <li class="toolbar-apply">
                    <a class="toolbar"><span class="icon-32-new"></span>Add</a>
                </li>
                <li class="toolbar-apply">
                    <input type="submit" value="Lưu" class="save"> 
                </li>
                <li class="toolbar-apply">
                    <a class="toolbar"><span class="icon-32-trash"></span>Xóa</a>
                </li>                 
                <li class="divider"></li>                
                <li class="toolbar-apply">
                    <a class="toolbar" href="<?=base_url()?>admin/cpanel"><span class="icon-32-cancel"></span>Hủy</a>
                </li>
                <li>
                    
                </li>                 
            </ul>
        </div>
    </div>
   
 </div>
 </div>
 <?=form_close()?>  
