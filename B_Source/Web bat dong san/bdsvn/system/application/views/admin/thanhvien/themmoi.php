<?=form_open('thanhviens/themmoi')?>
 <div style="width: 78%;float: left;">
     <fieldset>
        <legend>Thêm mới thành viên</legend>
        <table class="adminform">
            <tr>
                <td class="key" width="200">Họ và tên</td>
                <td><input type="text" name="fullname" value="<?=set_value('fullname')?>"></td>
            </tr>
            <tr>
                <td class="key" width="200">Email:</td>
                <td><input type="text" name="email" value="<?=set_value('email')?>"></td>
            </tr>            
            <tr>
                <td class="key">Tên đăng nhập</td>
                <td><input type="text" name="username" value="<?=set_value('username')?>"></td>
            </tr> 
            <tr>
                <td class="key">Mật khẩu</td>
                <td><input type="text" name="password" value=""></td>
            </tr>     
            <tr>
                <td class="key">Mật khẩu nhập lại</td>
                <td><input type="text" name="password_re" value=""></td>
            </tr>
            <tr>
                <td class="key">Nhóm</td>
                <td>
                    <select name="id_group" multiple="multiple">
                        <?foreach($list as $rs):?>
                        <option value="<?=$rs->manhom?>"><?=$rs->tennhom?></option>
                        <?endforeach;?>
                    </select>
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
                    <?=$this->icon_library->add('thanhviens/themmoi')?>
                </li>
                <li>
                    <?=$this->icon_library->save()?>
                </li>
                <li>
                    <a class="toolbar"><span class="icon-32-trash"></span>Xóa</a>
                </li>                 
                <li class="divider"></li>                
                <li>
                    <?=$this->icon_library->cancel('thanhviens')?> 
                </li>
                
            </ul>
        </div>
    </div>
   
 </div>
 </div>
 <?=form_close()?>
